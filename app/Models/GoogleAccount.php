<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class GoogleAccount extends Model
{
    protected $fillable = [
        'user_id',
        'email',
        'refresh_token',
        'is_primary',
        'connected_at',
    ];

    protected function casts(): array
    {
        return [
            'refresh_token' => 'encrypted',
            'is_primary' => 'boolean',
            'connected_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return array{id: int, email: string, is_primary: bool, connected_at: ?string}
     */
    public function toPanelArray(): array
    {
        return [
            'id' => $this->id,
            'email' => (string) ($this->email ?? ''),
            'is_primary' => (bool) $this->is_primary,
            'connected_at' => $this->connected_at?->timezone('Europe/Kyiv')->format('Y-m-d H:i'),
        ];
    }

    public function makePrimary(): void
    {
        DB::transaction(function (): void {
            static::query()
                ->where('user_id', $this->user_id)
                ->where('id', '!=', $this->id)
                ->update(['is_primary' => false]);

            $this->forceFill(['is_primary' => true])->save();
        });
    }

    public function promoteReplacementIfPrimary(): void
    {
        if (! $this->is_primary) {
            return;
        }

        $next = static::query()
            ->where('user_id', $this->user_id)
            ->where('id', '!=', $this->id)
            ->orderBy('id')
            ->first();

        if ($next) {
            $next->makePrimary();
        }
    }
}
