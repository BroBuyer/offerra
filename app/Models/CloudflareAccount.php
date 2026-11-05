<?php

namespace App\Models;

use App\Services\CloudflareClient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CloudflareAccount extends Model
{
    protected $fillable = [
        'name',
        'api_token',
        'account_id',
        'is_active',
        'last_checked_at',
        'last_check_ok',
        'last_check_message',
    ];

    protected function casts(): array
    {
        return [
            'api_token' => 'encrypted',
            'is_active' => 'boolean',
            'last_checked_at' => 'datetime',
            'last_check_ok' => 'boolean',
        ];
    }

    /**
     * @return array{token: string, account_id: string, name: string}
     */
    public function credentials(): array
    {
        return [
            'token' => CloudflareClient::normalizeApiToken($this->api_token),
            'account_id' => trim((string) ($this->account_id ?? '')),
            'name' => trim((string) ($this->name ?? '')),
        ];
    }

    public function isUsable(): bool
    {
        if (! $this->is_active) {
            return false;
        }

        $creds = $this->credentials();

        return $creds['token'] !== '' && $creds['account_id'] !== '';
    }

    public function displayName(): string
    {
        $name = trim((string) ($this->name ?? ''));

        return $name !== '' ? $name : ('CF #'.$this->id);
    }

    /**
     * @return array<string, int>
     */
    public static function offerCountsByAccountId(): array
    {
        return Offer::query()
            ->whereNotIn('status', ['archived', 'archiving', 'purging', 'teardown_failed'])
            ->whereNotNull('cloudflare_account_id')
            ->where('cloudflare_account_id', '!=', '')
            ->selectRaw('cloudflare_account_id, count(*) as c')
            ->groupBy('cloudflare_account_id')
            ->pluck('c', 'cloudflare_account_id')
            ->map(fn ($count) => (int) $count)
            ->all();
    }

    /**
     * @param  array<string, int>|null  $counts
     * @return array<string, mixed>
     */
    public function toPanelArray(?array $counts = null): array
    {
        $accountId = trim((string) ($this->account_id ?? ''));
        $counts ??= self::offerCountsByAccountId();

        return [
            'id' => $this->id,
            'name' => $this->displayName(),
            'account_id' => $accountId,
            'api_token' => filled($this->api_token) ? (string) $this->api_token : '',
            'has_token' => filled($this->api_token),
            'is_active' => (bool) $this->is_active,
            'offers_count' => (int) ($counts[$accountId] ?? 0),
            'last_checked_at' => $this->last_checked_at?->timezone('Europe/Kyiv')->format('Y-m-d H:i'),
            'last_check_ok' => $this->last_check_ok,
            'last_check_message' => $this->last_check_message,
        ];
    }

    /**
     * Compact list for the offers bulk "CF акаунт" bar (no secrets).
     *
     * @return Collection<int, array{id: int, name: string, account_id: string, offers_count: int}>
     */
    public static function activeForSwitch(): Collection
    {
        $counts = self::offerCountsByAccountId();

        return self::query()
            ->where('is_active', true)
            ->orderBy('id')
            ->get()
            ->filter(fn (self $account) => $account->isUsable())
            ->values()
            ->map(function (self $account) use ($counts) {
                $accountId = trim((string) $account->account_id);

                return [
                    'id' => $account->id,
                    'name' => $account->displayName(),
                    'account_id' => $accountId,
                    'offers_count' => (int) ($counts[$accountId] ?? 0),
                ];
            });
    }
}
