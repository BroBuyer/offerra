<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\LoginTwoFactorService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    public function __construct(private readonly LoginTwoFactorService $twoFactor) {}

    /**
     * Display the login view.
     */
    public function create(Request $request): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
            'challenge' => $this->twoFactor->pending($request),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $user = $request->authenticateCredentials();
        $started = $this->twoFactor->start($request, $user, $request->boolean('remember'));

        if (! ($started['ok'] ?? false)) {
            throw ValidationException::withMessages([
                'email' => $started['error'] ?? trans('auth.failed'),
            ]);
        }

        return back();
    }

    public function verifyTwoFactor(Request $request): RedirectResponse
    {
        $request->validate([
            'code' => ['required', 'string', 'max:8'],
        ]);

        $remember = $this->twoFactor->rememberFlag($request);
        $user = $this->twoFactor->verify($request, (string) $request->input('code'));

        Auth::login($user, $remember);
        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    public function resendTwoFactor(Request $request): RedirectResponse
    {
        $started = $this->twoFactor->resend($request);
        if (! ($started['ok'] ?? false)) {
            throw ValidationException::withMessages([
                'code' => $started['error'] ?? 'Не вдалося надіслати код.',
            ]);
        }

        return back()->with('status', 'Новий код надіслано в Telegram.');
    }

    public function cancelTwoFactor(Request $request): RedirectResponse
    {
        $this->twoFactor->forget($request);

        return redirect()->route('login');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
