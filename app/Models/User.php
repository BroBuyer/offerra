<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'role', 'can_see_all_offers'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    public const ROLE_ADMIN = 'admin';

    public const ROLE_USER = 'user';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'can_see_all_offers' => 'boolean',
        ];
    }

    public function settings(): HasOne
    {
        return $this->hasOne(UserSetting::class);
    }

    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class);
    }

    public function roleLabel(): string
    {
        return match ($this->role) {
            self::ROLE_ADMIN => 'Адмін',
            default => 'Користувач',
        };
    }

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN
            || $this->email === 'admin@offerra.local';
    }

    /**
     * Whether this user may list/filter offers belonging to everyone.
     * Management (edit/deploy/archive) stays owner-or-admin unless isAdmin().
     */
    public function canSeeAllOffers(): bool
    {
        return $this->isAdmin() || (bool) $this->can_see_all_offers;
    }
}
