<?php

namespace App\Models;

use App\Support\DeployDriver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OriginServer extends Model
{
    /** Takes new offers from the allocator. */
    public const ROLE_POOL = 'pool';

    /** Kept warm and monitored, but never receives new offers. */
    public const ROLE_SPARE = 'spare';

    /** Being emptied: no new offers, existing ones should be evacuated. */
    public const ROLE_DRAIN = 'drain';

    public const ROLES = [self::ROLE_POOL, self::ROLE_SPARE, self::ROLE_DRAIN];

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
        'deploy_driver',
        'deploy_path_template',
        'is_active',
        'role',
        'max_offers',
        'alerts_enabled',
        'owner_user_id',
        'health',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'encrypted',
            'port' => 'integer',
            'max_offers' => 'integer',
            'is_active' => 'boolean',
            'alerts_enabled' => 'boolean',
            'health' => 'array',
        ];
    }

    public static function normalizeRole(?string $role): string
    {
        $role = strtolower(trim((string) $role));

        return in_array($role, self::ROLES, true) ? $role : self::ROLE_POOL;
    }

    public function role(): string
    {
        return self::normalizeRole($this->role);
    }

    public function healthStatus(): string
    {
        $health = is_array($this->health) ? $this->health : [];

        return (string) ($health['status'] ?? 'unchecked');
    }

    /**
     * Free capacity for new offers, or null when the server has no limit.
     */
    public function freeCapacityFrom(int $offerCount): ?int
    {
        $max = (int) ($this->max_offers ?? 0);

        return $max > 0 ? max(0, $max - $offerCount) : null;
    }

    /**
     * Eligible to receive a brand-new offer from the allocator.
     */
    public function acceptsNewOffers(int $offerCount = 0): bool
    {
        if (! $this->is_active || $this->role() !== self::ROLE_POOL) {
            return false;
        }

        if (! $this->hasSshCredentials()) {
            return false;
        }

        if ($this->healthStatus() === 'down') {
            return false;
        }

        $free = $this->freeCapacityFrom($offerCount);

        return $free === null || $free > 0;
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_user_id');
    }

    public function hasSshCredentials(): bool
    {
        return filled($this->host)
            && filled($this->username)
            && filled($this->password);
    }

    public function displayLabel(): string
    {
        $label = trim((string) ($this->label ?? ''));

        return $label !== '' ? $label : (string) $this->host;
    }

    /**
     * @return array<string, mixed>
     */
    public function healthForPanel(): array
    {
        $health = is_array($this->health) ? $this->health : [];

        return [
            'status' => (string) ($health['status'] ?? 'unchecked'),
            'checked_at' => $health['checked_at'] ?? null,
            'fail_streak' => (int) ($health['fail_streak'] ?? 0),
            'degraded_streak' => (int) ($health['degraded_streak'] ?? 0),
            'message' => $health['message'] ?? null,
            'metrics' => is_array($health['metrics'] ?? null) ? $health['metrics'] : null,
            'last_alert_at' => $health['last_alert_at'] ?? null,
            'last_alert_kind' => $health['last_alert_kind'] ?? null,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toPanelArray(int $offerCount = 0): array
    {
        return [
            'id' => $this->id,
            'host' => $this->host,
            'port' => (int) ($this->port ?: 22),
            'username' => $this->username ?? '',
            'label' => $this->label ?? '',
            'display_label' => $this->displayLabel(),
            'hoster' => $this->hoster ?? '',
            'cpu' => $this->cpu ?? '',
            'ram' => $this->ram ?? '',
            'disk' => $this->disk ?? '',
            'price' => $this->price ?? '',
            'deploy_driver' => DeployDriver::normalize($this->deploy_driver),
            'deploy_path_template' => $this->deploy_path_template
                ?: DeployDriver::defaultPath($this->deploy_driver),
            'is_active' => (bool) $this->is_active,
            'role' => $this->role(),
            'max_offers' => (int) ($this->max_offers ?? 0),
            'free_capacity' => $this->freeCapacityFrom($offerCount),
            'accepts_new_offers' => $this->acceptsNewOffers($offerCount),
            'alerts_enabled' => (bool) ($this->alerts_enabled ?? true),
            'owner_user_id' => $this->owner_user_id,
            'owner_name' => $this->owner?->name,
            'owner_email' => $this->owner?->email,
            'password' => filled($this->password) ? (string) $this->password : '',
            'has_password' => filled($this->password),
            'has_ssh' => $this->hasSshCredentials(),
            'offers_count' => $offerCount,
            'health' => $this->healthForPanel(),
        ];
    }
}
