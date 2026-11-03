<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class BackupServer extends Model
{
    protected $fillable = [
        'host',
        'port',
        'username',
        'password',
        'label',
        'hoster',
        'cpu',
        'ram',
        'disk',
        'price',
        'paid_until',
        'paid_until_alerted_for',
        'alerts_enabled',
        'last_status',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'encrypted',
            'port' => 'integer',
            'alerts_enabled' => 'boolean',
            'paid_until' => 'date',
            'paid_until_alerted_for' => 'date',
            'last_status' => 'array',
        ];
    }

    public function displayLabel(): string
    {
        $label = trim((string) ($this->label ?? ''));

        return $label !== '' ? $label : (string) $this->host;
    }

    public function daysUntilPaid(?Carbon $now = null): ?int
    {
        if ($this->paid_until === null) {
            return null;
        }

        $today = ($now ?? now())->copy()->startOfDay();
        $until = $this->paid_until->copy()->startOfDay();

        return (int) $today->diffInDays($until, false);
    }

    public function dueForBillingReminder(?Carbon $now = null): bool
    {
        if (! ($this->alerts_enabled ?? true)) {
            return false;
        }

        $days = $this->daysUntilPaid($now);
        if ($days === null || $days > 1) {
            return false;
        }

        $until = $this->paid_until?->toDateString();
        $alerted = $this->paid_until_alerted_for?->toDateString();

        return $until !== null && $alerted !== $until;
    }

    /**
     * @return array<string, mixed>
     */
    public function toPanelArray(): array
    {
        $status = is_array($this->last_status) ? $this->last_status : [];

        return [
            'id' => $this->id,
            'host' => $this->host,
            'port' => (int) ($this->port ?: 22),
            'username' => $this->username ?? '',
            'password' => filled($this->password) ? (string) $this->password : '',
            'has_password' => filled($this->password),
            'label' => $this->label ?? '',
            'display_label' => $this->displayLabel(),
            'hoster' => $this->hoster ?? '',
            'cpu' => $this->cpu ?? '',
            'ram' => $this->ram ?? '',
            'disk' => $this->disk ?? '',
            'price' => $this->price ?? '',
            'paid_until' => $this->paid_until?->toDateString(),
            'days_until_paid' => $this->daysUntilPaid(),
            'alerts_enabled' => (bool) ($this->alerts_enabled ?? true),
            'status' => [
                'state' => (string) ($status['state'] ?? 'unchecked'),
                'checked_at' => $status['checked_at'] ?? null,
                'last_ok_at' => $status['last_ok_at'] ?? null,
                'latest_snapshot_at' => $status['latest_snapshot_at'] ?? null,
                'snapshots' => (int) ($status['snapshots'] ?? 0),
                'keep_daily' => (int) ($status['keep_daily'] ?? 14),
                'size' => $status['size'] ?? null,
                'message' => $status['message'] ?? null,
                'cron' => $status['cron'] ?? 'щодня о 03:15 (Київ)',
            ],
        ];
    }
}
