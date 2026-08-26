<?php

namespace App\Services;

use App\Models\UserSetting;
use App\Support\DeployDriver;
use RuntimeException;
use phpseclib3\Net\SFTP;
use phpseclib3\Net\SSH2;

class OriginHostService
{
    public function ensureWebRoot(UserSetting $settings, string $domain): string
    {
        $path = $this->publicHtmlPath($settings, $domain);
        $quoted = $this->quote($path);
        $parent = $this->quote(dirname($path));

        $this->exec(
            $settings,
            "mkdir -p /var/www/offers && mkdir -p {$quoted} && chown www-data:www-data /var/www/offers {$parent} {$quoted} && chmod 775 /var/www/offers {$parent} {$quoted}",
        );

        return $path;
    }

    public function deleteWebRoot(UserSetting $settings, string $domain): void
    {
        $path = $this->offerRootPath($settings, $domain);
        $quoted = $this->quote($path);

        $this->exec($settings, "rm -rf {$quoted}");
    }

    /**
     * Pack the local offer folder into tar.gz, upload once, unpack on origin.
     *
     * @param  list<string>  $skipFiles
     */
    public function deployArchive(UserSetting $settings, string $domain, string $localPath, array $skipFiles = []): string
    {
        if (! is_dir($localPath) || ! is_file($localPath.'/index.php')) {
            throw new RuntimeException('Локальна папка оффера не готова для архіву.');
        }

        $remotePath = $this->ensureWebRoot($settings, $domain);
        $safeDomain = $this->normalizeDomain($domain);
        $archive = sys_get_temp_dir().'/offerra-'.$safeDomain.'-'.bin2hex(random_bytes(3)).'.tar.gz';
        $remoteArchive = '/tmp/offerra-'.$safeDomain.'.tgz';

        try {
            $this->buildTar($localPath, $archive, $skipFiles);
            $this->uploadFile($settings, $archive, $remoteArchive);

            $root = $this->quote($remotePath);
            $pack = $this->quote($remoteArchive);
            $this->exec(
                $settings,
                "find {$root} -mindepth 1 -delete && tar -xzf {$pack} -C {$root} && chown -R www-data:www-data {$root} && chmod -R u+rwX,g+rX,o+rX {$root} && test -f {$root}/index.php && rm -f {$pack}",
                90,
            );
        } finally {
            @unlink($archive);
        }

        return $remotePath;
    }

    public function originIp(UserSetting $settings): string
    {
        $host = trim((string) $settings->deploy_host);

        if ($host === '') {
            throw new RuntimeException('Заповніть SSH host (IP сервера) у налаштуваннях деплою.');
        }

        if (filter_var($host, FILTER_VALIDATE_IP)) {
            return $host;
        }

        $resolved = gethostbyname($host);

        if ($resolved === $host && ! filter_var($host, FILTER_VALIDATE_IP)) {
            throw new RuntimeException('Не вдалося визначити IP сервера для A-запису.');
        }

        return $resolved;
    }

    public function publicHtmlPath(UserSetting $settings, string $domain): string
    {
        $domain = $this->normalizeDomain($domain);
        $template = $settings->deploy_path_template ?: DeployDriver::defaultPath($settings->deploy_driver);
        $username = trim((string) $settings->deploy_username);

        return str_replace(
            ['{user}', '{domain}'],
            [$username, $domain],
            $template,
        );
    }

    public function offerRootPath(UserSetting $settings, string $domain): string
    {
        return dirname($this->publicHtmlPath($settings, $domain));
    }

    /**
     * @param  list<string>  $skipFiles
     */
    private function buildTar(string $localPath, string $archive, array $skipFiles): void
    {
        $command = ['tar', '-czf', $archive, '-C', $localPath];

        foreach ($skipFiles as $skip) {
            $skip = trim($skip);

            if ($skip !== '') {
                $command[] = '--exclude='.$skip;
            }
        }

        $command[] = '.';
        $line = implode(' ', array_map('escapeshellarg', $command));
        $output = [];
        $code = 0;
        exec($line.' 2>&1', $output, $code);

        if ($code !== 0 || ! is_file($archive) || filesize($archive) < 32) {
            throw new RuntimeException('Не вдалося зібрати tar.gz: '.trim(implode("\n", $output)));
        }
    }

    private function uploadFile(UserSetting $settings, string $localFile, string $remoteFile): void
    {
        [$host, $port, $username, $password] = $this->credentials($settings);
        $sftp = new SFTP($host, $port, 20);
        $sftp->setTimeout(60);

        if (! $sftp->login($username, $password)) {
            $sftp->disconnect();
            throw new RuntimeException('SFTP: логін відхилено під час завантаження архіву.');
        }

        $ok = $sftp->put($remoteFile, $localFile, SFTP::SOURCE_LOCAL_FILE);
        $sftp->disconnect();

        if (! $ok) {
            throw new RuntimeException('SFTP: не вдалося завантажити tar.gz на origin.');
        }
    }

    private function exec(UserSetting $settings, string $command, int $timeout = 20): string
    {
        [$host, $port, $username, $password] = $this->credentials($settings);

        $ssh = new SSH2($host, $port, 12);
        $ssh->setTimeout($timeout);

        if (! $ssh->login($username, $password)) {
            $ssh->disconnect();
            throw new RuntimeException('SSH: логін відхилено. Перевір користувача і пароль.');
        }

        $output = (string) $ssh->exec($command.'; echo __EC__:$?');
        $ssh->disconnect();

        if (! preg_match('/__EC__:(\d+)/', $output, $match)) {
            throw new RuntimeException('SSH команда не повернула код виходу.');
        }

        if ((int) $match[1] !== 0) {
            throw new RuntimeException('SSH команда завершилась з помилкою: '.trim(str_replace($match[0], '', $output)));
        }

        return trim(str_replace($match[0], '', $output));
    }

    private function normalizeDomain(string $domain): string
    {
        $domain = strtolower(trim($domain));

        if ($domain === '' || ! preg_match('/^[a-z0-9.-]+$/', $domain)) {
            throw new RuntimeException('Некоректний домен для origin-сервера.');
        }

        return $domain;
    }

    private function quote(string $path): string
    {
        return "'".str_replace("'", "'\\''", $path)."'";
    }

    /**
     * @return array{0: string, 1: int, 2: string, 3: string}
     */
    private function credentials(UserSetting $settings): array
    {
        $host = trim((string) $settings->deploy_host);
        $port = (int) ($settings->deploy_port ?: 22);
        $username = trim((string) $settings->deploy_username);
        $password = (string) ($settings->deploy_password ?? '');

        if ($host === '' || $username === '' || $password === '') {
            throw new RuntimeException('Заповніть host, користувача і пароль SSH.');
        }

        return [$host, $port, $username, $password];
    }
}
