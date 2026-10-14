<?php

namespace App\Support;

class TelegramLeadDumpParser
{
    /**
     * @return array{
     *     first_name: string,
     *     last_name: string,
     *     email: string,
     *     phone: string,
     *     affiliate: string,
     *     funnel: string,
     *     offer: string,
     *     domain: string,
     *     country: string,
     *     ip_country: string,
     *     ip: string,
     *     language: string,
     *     subid: string
     * }
     */
    public function parse(string $raw): array
    {
        $text = $this->normalize($raw);
        $fields = [];

        foreach (preg_split("/\r\n|\n|\r/", $text) as $line) {
            $line = trim($line);
            if ($line === '' || ! str_contains($line, ':')) {
                continue;
            }

            [$label, $value] = explode(':', $line, 2);
            $key = $this->normalizeLabel($label);
            $value = $this->normalizeValue($value);

            if ($key === '' || $value === '') {
                continue;
            }

            $fields[$key] = $value;
        }

        $name = $fields['name'] ?? '';
        [$firstName, $lastName] = $this->splitName($name);

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => strtolower($fields['email'] ?? ''),
            'phone' => $this->normalizePhone($fields['phone'] ?? ''),
            'affiliate' => strtoupper($fields['affiliate'] ?? ''),
            'funnel' => $fields['funnel'] ?? ($fields['offer'] ?? ''),
            'offer' => $fields['offer'] ?? ($fields['funnel'] ?? ''),
            'domain' => $this->normalizeDomain($fields['domain'] ?? ''),
            'country' => strtoupper($fields['country'] ?? ''),
            'ip_country' => strtoupper($fields['ip_country'] ?? ''),
            'ip' => $fields['ip'] ?? '',
            'language' => strtolower($fields['language'] ?? ''),
            'subid' => $fields['subid'] ?? '',
        ];
    }

    public function normalizePhone(string $phone): string
    {
        $phone = trim($phone);
        if ($phone === '') {
            return '';
        }

        if (str_starts_with($phone, '+')) {
            return '+'.preg_replace('/\D/', '', substr($phone, 1));
        }

        return preg_replace('/\D/', '', $phone) ?? '';
    }

    public function normalizeDomain(string $domain): string
    {
        $domain = trim($domain);
        if ($domain === '') {
            return '';
        }

        if (preg_match('#https?://([^/\s)]+)#i', $domain, $matches)) {
            $domain = $matches[1];
        } elseif (preg_match('/([a-z0-9](?:[a-z0-9-]*[a-z0-9])?(?:\.[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)+)/i', $domain, $matches)) {
            $domain = $matches[1];
        }

        $domain = strtolower(preg_replace('#^www\.#', '', $domain) ?? $domain);

        return rtrim($domain, './');
    }

    private function normalize(string $raw): string
    {
        $text = html_entity_decode($raw, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/<\s*br\s*\/?>/i', "\n", $text) ?? $text;
        $text = preg_replace('/<\/p>/i', "\n", $text) ?? $text;
        $text = strip_tags($text);
        $text = str_replace("\u{00A0}", ' ', $text);

        return trim($text);
    }

    private function normalizeLabel(string $label): string
    {
        $label = strtolower(trim(preg_replace('/\s+/', ' ', $label) ?? $label));
        $label = rtrim($label, " \t.");

        return match ($label) {
            'name', "ім'я", 'імя' => 'name',
            'email', 'e-mail', 'пошта' => 'email',
            'phone', 'телефон' => 'phone',
            'affiliate', 'aff' => 'affiliate',
            'funnel' => 'funnel',
            'offer', 'оффер' => 'offer',
            'domain', 'домен' => 'domain',
            'country (offer)', 'country offer', 'geo', 'country' => 'country',
            'country (ip)', 'country ip' => 'ip_country',
            'ip' => 'ip',
            'language', 'lang' => 'language',
            'subid', 'sub id', 'sub_id' => 'subid',
            default => '',
        };
    }

    private function normalizeValue(string $value): string
    {
        $value = trim($value);
        $value = trim($value, " \t\"'");

        if (in_array($value, ['—', '–', '-', '−', ''], true)) {
            return '';
        }

        return $value;
    }

    /**
     * @return array{0: string, 1: string}
     */
    private function splitName(string $name): array
    {
        $name = trim(preg_replace('/\s+/', ' ', $name) ?? $name);
        if ($name === '') {
            return ['', ''];
        }

        $parts = explode(' ', $name, 2);

        return [$parts[0], $parts[1] ?? ''];
    }
}
