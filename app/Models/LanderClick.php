<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LanderClick extends Model
{
    protected $fillable = [
        'user_id',
        'click_id',
        'offer_id',
        'domain',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }
}
