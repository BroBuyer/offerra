<?php

namespace App\Http\Middleware;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $user = $request->user()?->fresh();

        return [
            ...parent::share($request),
            'auth' => [
                'user' => $user ? [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->isAdmin() ? User::ROLE_ADMIN : ($user->role ?: User::ROLE_USER),
                    'role_label' => $user->isAdmin() ? 'Адмін' : $user->roleLabel(),
                ] : null,
            ],
            'flash' => [
                'success' => fn () => $request->session()->get('success'),
                'user_credentials' => fn () => $request->session()->get('user_credentials'),
            ],
            'panel' => fn () => [
                'affiliate_tag' => $request->user()?->settings?->affiliate_tag ?? 'BRO',
                'keitaro_url' => $request->user()?->settings?->keitaro_url ?? 'clickmetrics38.com',
            ],
        ];
    }
}
