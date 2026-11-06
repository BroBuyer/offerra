<?php

namespace App\Support;

final class UserAgentSummary
{
    /**
     * @return array{browser: string, os: string}
     */
    public static function describe(?string $userAgent): array
    {
        $ua = trim((string) $userAgent);
        if ($ua === '') {
            return ['browser' => 'невідомо', 'os' => 'невідомо'];
        }

        return [
            'browser' => self::browser($ua),
            'os' => self::os($ua),
        ];
    }

    private static function browser(string $ua): string
    {
        if (preg_match('/Edg(?:e|A|iOS)?\//i', $ua) === 1) {
            return 'Edge';
        }
        if (stripos($ua, 'OPR/') !== false || stripos($ua, 'Opera') !== false) {
            return 'Opera';
        }
        if (stripos($ua, 'Firefox/') !== false || stripos($ua, 'FxiOS/') !== false) {
            return 'Firefox';
        }
        if (stripos($ua, 'Chrome/') !== false || stripos($ua, 'CriOS/') !== false) {
            return 'Chrome';
        }
        if (stripos($ua, 'Safari/') !== false) {
            return 'Safari';
        }

        return 'інший';
    }

    private static function os(string $ua): string
    {
        if (preg_match('/Android/i', $ua) === 1) {
            return 'Android';
        }
        if (preg_match('/iPhone|iPad|iPod|iOS/i', $ua) === 1) {
            return 'iOS';
        }
        if (preg_match('/Windows/i', $ua) === 1) {
            return 'Windows';
        }
        if (preg_match('/Mac OS X|Macintosh/i', $ua) === 1) {
            return 'macOS';
        }
        if (preg_match('/Linux/i', $ua) === 1) {
            return 'Linux';
        }

        return 'інша';
    }
}
