<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunnelAlertIgnoredLang extends Model
{
    protected $fillable = [
        'lang',
        'lang_key',
    ];

    public static function keyFor(string $lang): string
    {
        return mb_strtolower(trim($lang));
    }
}

