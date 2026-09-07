<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PanelSetting extends Model
{
    protected $fillable = [
        'users_see_all_offers',
    ];

    protected function casts(): array
    {
        return [
            'users_see_all_offers' => 'boolean',
        ];
    }

    public static function current(): self
    {
        return static::query()->first() ?? static::query()->create([
            'users_see_all_offers' => true,
        ]);
    }

    public static function usersSeeAllOffers(): bool
    {
        return (bool) static::current()->users_see_all_offers;
    }
}
