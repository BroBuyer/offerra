<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunnelAlertIgnoredGeo extends Model
{
    protected $fillable = [
        'geo',
        'geo_key',
    ];

    public static function keyFor(string $geo): string
    {
        return mb_strtoupper(trim($geo));
    }
}

