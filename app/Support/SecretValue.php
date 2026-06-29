<?php

namespace App\Support;

class SecretValue
{
    public static function normalize(?string $value): string
    {
        $value = trim((string) $value);

        if ($value === '') {
            return '';
        }

        if (preg_match(
            "/define\s*\(\s*['\"][^'\"]+['\"]\s*,\s*['\"]([^'\"]+)['\"]\s*\)\s*;?/i",
            $value,
            $matches,
        )) {
            return $matches[1];
        }

        return $value;
    }
}
