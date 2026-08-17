<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunnelAlertIgnoredBrand extends Model
{
    protected $fillable = [
        'brand',
        'brand_key',
    ];

    public static function keyFor(string $brand): string
    {
        return mb_strtolower(trim($brand));
    }
}
