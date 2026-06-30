<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index(): Response
    {
        $users = User::query()
            ->withCount('offers')
            ->orderBy('name')
            ->get()
            ->map(fn (User $user) => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->isAdmin() ? User::ROLE_ADMIN : ($user->role ?: User::ROLE_USER),
                'role_label' => $user->isAdmin() ? 'Адмін' : $user->roleLabel(),
                'offers_count' => $user->offers_count,
                'created_at' => $user->created_at?->format('Y-m-d'),
            ]);

        return Inertia::render('Panel/Users/Index', [
            'users' => $users,
        ]);
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $password = $request->string('password')->toString();

        $user = User::create([
            'name' => $request->string('name')->toString(),
            'email' => $request->string('email')->toString(),
            'password' => $password,
            'role' => User::ROLE_USER,
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
}
