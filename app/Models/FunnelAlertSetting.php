<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunnelAlertSetting extends Model
{
    protected $fillable = [
        'webhook_token',
        'tg_bot_token',
        'tg_chat_ids',
    ];

    protected function casts(): array
    {
        return [
            'webhook_token' => 'encrypted',
            'tg_bot_token' => 'encrypted',
            'tg_chat_ids' => 'array',
        ];
    }

    public static function current(): self
    {
        return static::query()->first() ?? static::query()->create([]);
    }

    /**
     * @return list<string>
     */
    public function chatIds(): array
    {
        $ids = $this->tg_chat_ids ?? [];

        return array_values(array_unique(array_filter(array_map(
            static fn ($id) => trim((string) $id),
            is_array($ids) ? $ids : [],
        ), static fn (string $id) => $id !== '')));
    }
}
