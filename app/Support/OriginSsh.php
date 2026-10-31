<?php

namespace App\Support;

use RuntimeException;
use Symfony\Component\Process\Process;
use phpseclib3\Net\SFTP;
use phpseclib3\Net\SSH2;

/**
 * SSH exec that cannot hang a queue worker.
 *
 * phpseclib's exec() waits forever when OpenSSH accepts the password but never
 * confirms a session channel ("Undefined array key 1" = CHANNEL_EXEC). On the
 * panel we shell out to `timeout` + sshpass instead.
 */
class OriginSsh
{
    public function exec(
        string $host,
        int $port,
        string $username,
        string $password,
        string $command,
        int $timeout = 20,
    ): string {
        $host = trim($host);
        $username = trim($username);
        $password = (string) $password;
        $port = $port > 0 ? $port : 22;
        $timeout = max(5, $timeout);

        if ($host === '' || $username === '' || $password === '') {
            throw new RuntimeException('Заповніть host, користувача і пароль SSH.');
        }

        if ($this->canUseOpenSsh()) {
            return $this->execOpenSsh($host, $port, $username, $password, $command, $timeout);
        }

        return $this->execPhpSecLib($host, $port, $username, $password, $command, $timeout);
    }

    public function upload(
        string $host,
        int $port,
        string $username,
        string $password,
        string $localFile,
        string $remoteFile,
        int $timeout = 90,
    ): void {
        if (! is_file($localFile)) {
            throw new RuntimeException('Локальний файл для upload не знайдено.');
        }

        if ($this->canUseOpenSsh() && is_executable('/usr/bin/scp')) {
            $this->uploadOpenSsh($host, $port, $username, $password, $localFile, $remoteFile, $timeout);

            return;
        }

        $this->uploadPhpSecLib($host, $port, $username, $password, $localFile, $remoteFile, $timeout);
    }

    public function canUseOpenSsh(): bool
    {
        return PHP_OS_FAMILY === 'Linux'
            && is_executable('/usr/bin/timeout')
            && is_executable('/usr/bin/sshpass')
            && is_executable('/usr/bin/ssh');
    }

    private function execOpenSsh(
        string $host,
        int $port,
        string $username,
        string $password,
        string $command,
        int $timeout,
    ): string {
        $process = new Process(
            [
                '/usr/bin/timeout', '-k', '2', (string) $timeout,
                '/usr/bin/sshpass', '-e',
                '/usr/bin/ssh',
                '-o', 'StrictHostKeyChecking=accept-new',
                '-o', 'UserKnownHostsFile=/dev/null',
                '-o', 'GlobalKnownHostsFile=/dev/null',
                '-o', 'LogLevel=ERROR',
                '-o', 'ConnectTimeout=8',
                '-o', 'PreferredAuthentications=password',
                '-o', 'PubkeyAuthentication=no',
                '-o', 'NumberOfPasswordPrompts=1',
                '-o', 'ServerAliveInterval=3',
                '-o', 'ServerAliveCountMax=2',
                '-p', (string) $port,
                $username.'@'.$host,
                $command,
            ],
            null,
            ['SSHPASS' => $password],
            null,
            $timeout + 4,
        );

        $process->run();
        $code = $process->getExitCode();
        $out = trim($process->getOutput()."\n".$process->getErrorOutput());

        if ($code === 124 || $code === 137) {
            throw new RuntimeException(
                'SSH: логін пройшов, але сесія зависла (канал команди не відкрився). Перезавантаж VPS з панелі хостера.',
            );
        }

        if ($code !== 0) {
            $hint = $out !== '' ? mb_substr($out, 0, 220) : 'exit '.$code;
            throw new RuntimeException('SSH команда не вдалась: '.$hint);
        }

        return trim($process->getOutput());
    }

    private function execPhpSecLib(
        string $host,
        int $port,
        string $username,
        string $password,
        string $command,
        int $timeout,
    ): string {
        $ssh = new SSH2($host, $port, min(12, $timeout));
        $ssh->setTimeout($timeout);

        try {
            if (! $ssh->login($username, $password)) {
                throw new RuntimeException('SSH: логін відхилено. Перевір користувача і пароль.');
            }

            $output = $ssh->exec($command);
            if ($output === false) {
                throw new RuntimeException('SSH: сесія не відкрила канал команди.');
            }

            return (string) $output;
        } catch (\ErrorException $e) {
            if (str_contains($e->getMessage(), 'Undefined array key')) {
                throw new RuntimeException(
                    'SSH: логін пройшов, але сесія зависла (канал команди не відкрився). Перезавантаж VPS з панелі хостера.',
                    0,
                    $e,
                );
            }

            throw new RuntimeException('SSH: '.$e->getMessage(), 0, $e);
        } finally {
            try {
                $ssh->disconnect();
            } catch (\Throwable) {
            }
        }
    }

    private function uploadOpenSsh(
        string $host,
        int $port,
        string $username,
        string $password,
        string $localFile,
        string $remoteFile,
        int $timeout,
    ): void {
        $process = new Process(
            [
                '/usr/bin/timeout', '-k', '2', (string) $timeout,
                '/usr/bin/sshpass', '-e',
                '/usr/bin/scp',
                '-o', 'StrictHostKeyChecking=accept-new',
                '-o', 'UserKnownHostsFile=/dev/null',
                '-o', 'GlobalKnownHostsFile=/dev/null',
                '-o', 'LogLevel=ERROR',
                '-o', 'ConnectTimeout=8',
                '-o', 'PreferredAuthentications=password',
                '-o', 'PubkeyAuthentication=no',
                '-P', (string) ($port > 0 ? $port : 22),
                $localFile,
                $username.'@'.$host.':'.$remoteFile,
            ],
            null,
            ['SSHPASS' => $password],
            null,
            $timeout + 4,
        );
        $process->run();
        $code = $process->getExitCode();

        if ($code === 124 || $code === 137) {
            throw new RuntimeException(
                'SFTP: сесія зависла після логіну. Перезавантаж VPS з панелі хостера.',
            );
        }

        if ($code !== 0) {
            $hint = trim($process->getErrorOutput().' '.$process->getOutput());
            throw new RuntimeException('SFTP: не вдалося завантажити файл.'.($hint !== '' ? ' '.mb_substr($hint, 0, 180) : ''));
        }
    }

    private function uploadPhpSecLib(
        string $host,
        int $port,
        string $username,
        string $password,
        string $localFile,
        string $remoteFile,
        int $timeout,
    ): void {
        $sftp = new SFTP($host, $port, min(20, $timeout));
        $sftp->setTimeout($timeout);

        try {
            if (! $sftp->login($username, $password)) {
                throw new RuntimeException('SFTP: логін відхилено під час завантаження архіву.');
            }
            if (! $sftp->put($remoteFile, $localFile, SFTP::SOURCE_LOCAL_FILE)) {
                throw new RuntimeException('SFTP: не вдалося завантажити tar.gz на origin.');
            }
        } finally {
            try {
                $sftp->disconnect();
            } catch (\Throwable) {
            }
        }
    }
}
