<?php

namespace App\Support;

class DeployDriver
{
    public const UBUNTU = 'ubuntu';

    public const UBUNTU_PATH = '/var/www/offers/{domain}/public_html';

    public static function normalize(?string $driver): string
    {
        return self::UBUNTU;
    }

    public static function isUbuntu(?string $driver): bool
    {
        return true;
    }

    public static function defaultPath(?string $driver): string
    {
        return self::UBUNTU_PATH;
    }

    public static function pathForDriver(?string $driver, ?string $currentPath): string
    {
        $path = trim((string) $currentPath);

        return $path !== '' ? $path : self::UBUNTU_PATH;
    }
}
