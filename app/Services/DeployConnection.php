<?php

namespace App\Services;

use InvalidArgumentException;
use League\Flysystem\Filesystem;
use League\Flysystem\PhpseclibV3\SftpAdapter;
use League\Flysystem\PhpseclibV3\SftpConnectionProvider;
use League\Flysystem\UnixVisibility\PortableVisibilityConverter;
use League\Flysystem\Visibility;
use RuntimeException;

class DeployConnection
{
    /**
     * @param  array{
     *     host: string,
     *     port?: int,
     *     username: string,
     *     password: string,
     *     path_template?: string|null,
     * }  $config
     * @return array{ok: bool, message: string, path?: string, files?: list<string>}
     */
    public function test(array $config, ?string $domain = null): array
    {
        $host = trim($config['host'] ?? '');
        $username = trim($config['username'] ?? '');
        $password = $config['password'] ?? '';

        if ($host === '' || $username === '' || $password === '') {
            throw new InvalidArgumentException('Заповніть host, користувача і пароль SFTP.');
        }

        $port = (int) ($config['port'] ?? 22);
        $domain = $domain ? strtolower(trim($domain)) : 'reserve-safegrove-ie.com';
        $remotePath = $this->resolveRemotePath(
            $config['path_template'] ?? null,
            $username,
            $domain,
        );

        try {
            $filesystem = $this->connect($config);

            if (! $filesystem->directoryExists($remotePath)) {
                return [
                    'ok' => false,
                    'message' => "З'єднання є, але папка не знайдена: {$remotePath}. Перевірте домен у Hestia.",
                    'path' => $remotePath,
                ];
            }

            $listing = $filesystem->listContents($remotePath, false);
            $files = [];

            foreach ($listing as $item) {
                $files[] = basename($item->path());
                if (count($files) >= 8) {
                    break;
                }
            }

            return [
                'ok' => true,
                'message' => "SFTP OK · {$username}@{$host}:{$port}",
                'path' => $remotePath,
                'files' => $files,
            ];
        } catch (\Throwable $e) {
            return [
                'ok' => false,
                'message' => 'SFTP помилка: '.$e->getMessage(),
                'path' => $remotePath,
            ];
        }
    }

    public function resolveRemotePath(?string $template, string $username, string $domain): string
    {
        $template = $template ?: '/home/{user}/web/{domain}/public_html';

        return str_replace(
            ['{user}', '{domain}'],
            [$username, strtolower($domain)],
            $template,
        );
    }

    public function connect(array $config, int $timeout = 15): Filesystem
    {
        $host = trim($config['host'] ?? '');
        $username = trim($config['username'] ?? '');
        $password = $config['password'] ?? '';

        if ($host === '' || $username === '' || $password === '') {
            throw new InvalidArgumentException('Заповніть host, користувача і пароль SFTP.');
        }

        return $this->filesystem(
            $host,
            (int) ($config['port'] ?? 22),
            $username,
            $password,
            $timeout,
        );
    }

    /**
     * @param  array{
     *     host: string,
     *     port?: int,
     *     username: string,
     *     password: string,
     *     path_template?: string|null,
     * }  $config
     * @return array{deployed: bool, path: string, marker: string|null}
     */
    public function probeRemote(array $config, string $domain): array
    {
        $remotePath = $this->resolveRemotePath(
            $config['path_template'] ?? null,
            trim($config['username'] ?? ''),
            $domain,
        );

        try {
            $filesystem = $this->connect($config, 60);
            $markers = ['index.php', 'static/css/main.css', 'assets/css/main.css'];

            foreach ($markers as $marker) {
                $file = rtrim($remotePath, '/').'/'.$marker;
                if ($filesystem->fileExists($file)) {
                    return [
                        'deployed' => true,
                        'path' => $remotePath,
                        'marker' => $marker,
                    ];
                }
            }

            return [
                'deployed' => false,
                'path' => $remotePath,
                'marker' => null,
            ];
        } catch (\Throwable) {
            return [
                'deployed' => false,
                'path' => $remotePath,
                'marker' => null,
            ];
        }
    }

    private function filesystem(string $host, int $port, string $username, string $password, int $timeout = 15): Filesystem
    {
        $provider = new SftpConnectionProvider(
            host: $host,
            username: $username,
            password: $password,
            port: $port,
            timeout: $timeout,
        );

        $adapter = new SftpAdapter(
            connectionProvider: $provider,
            root: '/',
            visibilityConverter: PortableVisibilityConverter::fromArray([
                'file' => ['public' => 0644, 'private' => 0600],
                'dir' => ['public' => 0755, 'private' => 0700],
            ]),
        );

        return new Filesystem($adapter, [
            'visibility' => Visibility::PUBLIC,
            'directory_visibility' => Visibility::PUBLIC,
        ]);
    }

    /**
     * @param  array{
     *     host: string,
     *     port?: int,
     *     username: string,
     *     password: string,
     * }  $config
     */
    public function chmodPublicRecursive(array $config, string $remotePath, int $timeout = 180): void
    {
        $host = trim($config['host'] ?? '');
        $username = trim($config['username'] ?? '');
        $password = $config['password'] ?? '';

        if ($host === '' || $username === '' || $password === '') {
            throw new InvalidArgumentException('Заповніть host, користувача і пароль SFTP.');
        }

        $provider = new SftpConnectionProvider(
            host: $host,
            username: $username,
            password: $password,
            port: (int) ($config['port'] ?? 22),
            timeout: $timeout,
        );

        $connection = $provider->provideConnection();

        if (! $connection->chmod(0755, $remotePath, true)) {
            throw new RuntimeException("Не вдалося встановити права на {$remotePath}");
        }
    }
}
