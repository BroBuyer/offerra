<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class OfferScanner
{
    public function __construct(
        private readonly string $offersPath,
    ) {}

    /**
     * @return list<array<string, mixed>>
     */
    public function scan(): array
    {
        if (! File::isDirectory($this->offersPath)) {
            return [];
        }

        $offers = [];

        foreach (File::directories($this->offersPath) as $directory) {
            $folder = basename($directory);

            if ($folder === 'example') {
                continue;
            }

            $parsed = $this->parseFolderName($folder);

            if ($parsed === null) {
                continue;
            }

            $config = $this->readConfig($directory);
            $manifest = $this->readManifest($directory);

            $offers[] = array_merge($parsed, [
                'folder' => $folder,
                'path' => $directory,
                'template' => $manifest['template'] ?? $config['template'] ?? 'Netto Capitriva',
                'keitaro_id' => $manifest['keitaro_campaign_id'] ?? $config['keitaro_id'],
                'status' => $manifest['status'] ?? $config['status'] ?? 'generated',
            ]);
        }

        usort($offers, fn (array $a, array $b) => strcmp($b['date'], $a['date']));

        return $offers;
    }

    /**
     * @return array<string, mixed>|null
     */
    private function parseFolderName(string $folder): ?array
    {
        $parts = explode('_', $folder);

        if (count($parts) < 6 || $parts[2] !== 'BRO') {
            return null;
        }

        $date = array_pop($parts);
        $domain = array_pop($parts);

        if (! preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            return null;
        }

        $brandParts = array_slice($parts, 3);
        $brand = str_replace('-', ' ', implode('-', $brandParts));

        return [
            'geo' => $parts[0],
            'lang' => $parts[1],
            'brand' => $brand,
            'domain' => $domain,
            'date' => $date,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function readManifest(string $directory): array
    {
        $path = $directory.'/manifest.json';

        if (! File::exists($path)) {
            return [];
        }

        $data = json_decode(File::get($path), true);

        return is_array($data) ? $data : [];
    }

    /**
     * @return array{keitaro_id: ?string, template: ?string, status: ?string}
     */
    private function readConfig(string $directory): array
    {
        $configPath = $directory.'/includes/config.php';

        if (! File::exists($configPath)) {
            return ['keitaro_id' => null, 'template' => null, 'status' => null];
        }

        $contents = File::get($configPath);
        $keitaroId = null;

        if (preg_match('/#(\d+)/', $contents, $matches)) {
            $keitaroId = $matches[1];
        }

        return [
            'keitaro_id' => $keitaroId ?: null,
            'template' => 'Netto Capitriva',
            'status' => 'generated',
        ];
    }

    /**
     * @param  list<array<string, mixed>>  $offers
     * @return array<string, mixed>
     */
    public function dashboardStats(array $offers): array
    {
        $today = now()->toDateString();
        $generatedToday = count(array_filter($offers, fn (array $o) => $o['date'] === $today));

        $geos = array_count_values(array_column($offers, 'geo'));
        arsort($geos);

        $langs = array_count_values(array_column($offers, 'lang'));
        arsort($langs);

        return [
            'total' => count($offers),
            'generated_today' => $generatedToday,
            'unique_geos' => count($geos),
            'unique_langs' => count($langs),
            'geo_breakdown' => $geos,
            'lang_breakdown' => $langs,
            'pending_deploy' => count($offers),
            'deployed' => 0,
            'keitaro_linked' => count(array_filter($offers, fn (array $o) => ! empty($o['keitaro_id']))),
        ];
    }
}
