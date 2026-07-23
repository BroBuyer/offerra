<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MirrorDomain extends Model
{
    public const STATUS_NEW = 'new';

    public const STATUS_WATCHING = 'watching';

    public const STATUS_REDIRECTING = 'redirecting';

    public const STATUS_IGNORED = 'ignored';

    protected $fillable = [
        'user_id',
        'host',
        'hit_count',
        'first_seen_at',
        'last_seen_at',
        'alerted_at',
        'last_path',
        'last_ip',
        'last_ua',
        'status',
        'redirect_enabled',
        'redirect_url',
        'redirect_offer_id',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'hit_count' => 'integer',
            'first_seen_at' => 'datetime',
            'last_seen_at' => 'datetime',
            'alerted_at' => 'datetime',
            'redirect_enabled' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function redirectOffer(): BelongsTo
    {
        return $this->belongsTo(Offer::class, 'redirect_offer_id');
    }

    /**
     * @return array<string, mixed>
     */
    public function toPanelArray(): array
    {
        return [
            'id' => $this->id,
            'host' => $this->host,
            'hit_count' => $this->hit_count,
            'first_seen_at' => $this->first_seen_at?->timezone(config('app.timezone'))->format('Y-m-d H:i'),
            'last_seen_at' => $this->last_seen_at?->timezone(config('app.timezone'))->format('Y-m-d H:i'),
            'alerted_at' => $this->alerted_at?->timezone(config('app.timezone'))->format('Y-m-d H:i'),
            'last_path' => $this->last_path,
            'last_ip' => $this->last_ip,
            'status' => $this->status,
            'redirect_enabled' => $this->redirect_enabled,
            'redirect_url' => $this->redirect_url,
            'redirect_offer_id' => $this->redirect_offer_id,
            'redirect_offer_domain' => $this->redirectOffer?->domain,
            'notes' => $this->notes,
            'user_id' => $this->user_id,
            'user_email' => $this->user?->email,
        ];
    }
}
