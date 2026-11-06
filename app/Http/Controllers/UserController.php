<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserAccessRequest;
use App\Http\Requests\UpdateUserTwoFactorRequest;
use App\Models\User;
use App\Models\UserSetting;
use App\Support\UserAgentSummary;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index(): Response
    {
        $users = User::query()
            ->with('settings')
            ->withCount('offers')
            ->orderBy('name')
            ->get();

        $sessionsByUser = $this->activeSessionsByUser($users->pluck('id'));
        $currentSessionId = request()->hasSession() ? (string) request()->session()->getId() : '';

        $payload = $users->map(function (User $user) use ($sessionsByUser, $currentSessionId) {
            $sessions = $this->presentSessions(
                $sessionsByUser->get((int) $user->id, collect()),
                $currentSessionId,
            );
            $ips = collect($sessions)
                ->pluck('ip')
                ->filter()
                ->unique()
                ->values();

            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->isAdmin() ? User::ROLE_ADMIN : ($user->role ?: User::ROLE_USER),
                'role_label' => $user->isAdmin() ? 'Адмін' : $user->roleLabel(),
                'can_see_all_offers' => $user->canSeeAllOffers(),
                'can_manage_all_offers' => $user->canManageAllOffers(),
                'two_factor_enabled' => $user->twoFactorEnabled(),
                'has_telegram_2fa' => $user->hasTelegramTwoFactor(),
                'offers_count' => $user->offers_count,
                'created_at' => $user->created_at?->format('Y-m-d'),
                'sessions' => $sessions,
                'sessions_count' => count($sessions),
                'sessions_ip_count' => $ips->count(),
            ];
        });

        return Inertia::render('Panel/Users/Index', [
            'users' => $payload,
        ]);
    }

    public function updateAccess(UpdateUserAccessRequest $request, User $user): RedirectResponse
    {
        if ($user->isAdmin()) {
            return redirect()
                ->route('users.index')
                ->withErrors(['access' => 'Адмін і так бачить і керує всіма офферами.']);
        }

        $see = $request->boolean('can_see_all_offers');
        $manage = $request->boolean('can_manage_all_offers');
        if ($manage) {
            $see = true;
        }
        if (! $see) {
            $manage = false;
        }

        $user->update([
            'can_see_all_offers' => $see,
            'can_manage_all_offers' => $manage,
        ]);

        $parts = [];
        $parts[] = $see ? 'бачить усі оффери' : 'бачить лише свої';
        $parts[] = $manage ? 'може редагувати і діставати з архіву чужі' : 'керує лише своїми';

        return redirect()
            ->route('users.index')
            ->with('success', "{$user->email}: ".implode(', ', $parts).'.');
    }

    public function updateTwoFactor(UpdateUserTwoFactorRequest $request, User $user): RedirectResponse
    {
        $enabled = $request->boolean('two_factor_enabled');
        $user->loadMissing('settings');

        if ($enabled && ! $user->hasTelegramTwoFactor()) {
            return redirect()
                ->route('users.index')
                ->withErrors(['two_factor' => "{$user->email}: спочатку додай Telegram-бота і chat id у Settings."]);
        }

        $user->update([
            'two_factor_enabled' => $enabled,
        ]);

        return redirect()
            ->route('users.index')
            ->with('success', $enabled
                ? "{$user->email}: 2FA увімкнено."
                : "{$user->email}: 2FA вимкнено, вхід лише паролем.");
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $password = $request->string('password')->toString();

        $user = User::create([
            'name' => $request->string('name')->toString(),
            'email' => $request->string('email')->toString(),
            'password' => $password,
            'role' => User::ROLE_USER,
            'can_see_all_offers' => false,
            'can_manage_all_offers' => false,
            'email_verified_at' => now(),
        ]);

        UserSetting::query()->firstOrCreate(['user_id' => $user->id]);

        return redirect()
            ->route('users.index')
            ->with('success', "Користувача {$user->email} створено")
            ->with('user_credentials', [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'password' => $password,
            ]);
    }

    public function resetPassword(User $user): RedirectResponse
    {
        if ($user->isAdmin()) {
            return redirect()
                ->route('users.index')
                ->withErrors(['reset' => 'Пароль адміністратора можна змінити лише в профілі.']);
        }

        $password = Str::password(14);

        $user->update([
            'password' => $password,
        ]);
        $user->invalidatePanelSessions();

        return redirect()
            ->route('users.index')
            ->with('success', "Новий пароль для {$user->email}")
            ->with('user_credentials', [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'password' => $password,
            ]);
    }

    public function logout(User $user): RedirectResponse
    {
        $authUser = request()->user();
        if ($authUser && (int) $user->id === (int) $authUser->id) {
            return redirect()
                ->route('users.index')
                ->withErrors(['logout' => 'Себе розлогінь через меню зліва.']);
        }

        $dropped = $user->invalidatePanelSessions();
        $suffix = $dropped > 0
            ? " Знято сесій: {$dropped}."
            : ' Активних сесій не було.';

        return redirect()
            ->route('users.index')
            ->with('success', "{$user->email} розлогінено.{$suffix}");
    }

    public function destroySession(User $user, string $session): RedirectResponse
    {
        $authUser = request()->user();
        $currentId = request()->hasSession() ? (string) request()->session()->getId() : '';

        if ($authUser && (int) $user->id === (int) $authUser->id && hash_equals($currentId, $session)) {
            return redirect()
                ->route('users.index')
                ->withErrors(['sessions' => 'Поточну сесію так не закриєш — вийди з меню зліва.']);
        }

        $dropped = $user->destroyPanelSession($session);

        return redirect()
            ->route('users.index')
            ->with('success', $dropped
                ? "Сесію {$user->email} закрито."
                : "Сесії вже не було.");
    }

    /**
     * @param  Collection<int, int|string>  $userIds
     * @return Collection<int, Collection<int, object>>
     */
    private function activeSessionsByUser(Collection $userIds): Collection
    {
        if ($userIds->isEmpty()) {
            return collect();
        }

        return DB::table((string) config('session.table', 'sessions'))
            ->whereIn('user_id', $userIds->all())
            ->where('last_activity', '>=', User::panelSessionCutoff())
            ->orderByDesc('last_activity')
            ->get()
            ->groupBy(fn (object $row) => (int) $row->user_id);
    }

    /**
     * @param  Collection<int, object>  $rows
     * @return list<array{id: string, ip: string, browser: string, os: string, user_agent: string, last_activity_at: string, last_activity_ago: string, is_current: bool}>
     */
    private function presentSessions(Collection $rows, string $currentSessionId): array
    {
        return $rows->map(function (object $row) use ($currentSessionId) {
            $agent = UserAgentSummary::describe(is_string($row->user_agent ?? null) ? $row->user_agent : null);
            $ts = (int) ($row->last_activity ?? 0);

            return [
                'id' => (string) $row->id,
                'ip' => trim((string) ($row->ip_address ?? '')),
                'browser' => $agent['browser'],
                'os' => $agent['os'],
                'user_agent' => trim((string) ($row->user_agent ?? '')),
                'last_activity_at' => $ts > 0 ? date('Y-m-d H:i', $ts) : '',
                'last_activity_ago' => $this->activityAgo($ts),
                'is_current' => $currentSessionId !== '' && hash_equals($currentSessionId, (string) $row->id),
            ];
        })->values()->all();
    }

    private function activityAgo(int $timestamp): string
    {
        if ($timestamp <= 0) {
            return '—';
        }

        $minutes = max(0, (int) floor((time() - $timestamp) / 60));
        if ($minutes < 1) {
            return 'щойно';
        }
        if ($minutes < 60) {
            return $minutes.' хв тому';
        }

        $hours = intdiv($minutes, 60);
        if ($hours < 24) {
            return $hours.' год тому';
        }

        return intdiv($hours, 24).' д тому';
    }
}
