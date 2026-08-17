<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunnelAlertEvent extends Model
{
    protected $fillable = [
        'external_id',
        'event',
        'brand',
        'geo',
        'lang',
        'match_key',
        'offer_found',
        'event_at',
        'notified_at',
        'payload',
    ];

    protected function casts(): array
    {
        return [
            'offer_found' => 'boolean',
            'event_at' => 'datetime',
            'notified_at' => 'datetime',
            'payload' => 'array',
        ];
    }

    public static function matchKey(string $brand, string $geo, string $lang): string
    {
        return mb_strtolower(trim($brand)).'|'.strtoupper(trim($geo)).'|'.strtolower(trim($lang));
    }
}
