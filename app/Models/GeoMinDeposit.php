<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeoMinDeposit extends Model
{
    protected $fillable = [
        'geo',
        'min_deposit',
        'currency',
    ];

    /**
     * @return array{id: int, geo: string, min_deposit: string, currency: string, created_at: ?string, updated_at: ?string}
     */
    public function toPanelArray(): array
    {
        return [
            'id' => $this->id,
            'geo' => strtoupper((string) $this->geo),
            'min_deposit' => (string) $this->min_deposit,
            'currency' => strtoupper((string) $this->currency),
            'created_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }

    /**
     * Map keyed by GEO for offer wizard / edit modal.
     *
     * @return array<string, array{min_deposit: string, currency: string}>
     */
    public static function catalog(): array
    {
        $map = [];

        foreach (static::query()->orderBy('geo')->get(['geo', 'min_deposit', 'currency']) as $row) {
            $geo = strtoupper(trim((string) $row->geo));
            if ($geo === '') {
                continue;
            }
            $map[$geo] = [
                'min_deposit' => (string) $row->min_deposit,
                'currency' => strtoupper((string) $row->currency),
            ];
        }

        return $map;
    }
}
