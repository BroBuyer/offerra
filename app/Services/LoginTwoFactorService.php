<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginTwoFactorService
{
    public const SESSION_KEY = 'login_2fa';

    private const TTL_SECONDS = 600;

    private const RESEND_SECONDS = 30;

    public function __construct(private readonly TelegramNotifier $telegram) {}

    /**
     * @return array{ok: bool, error?: string}
     */
    public function start(Request $request, User $user, bool $remember): array
    {
        $target = $this->telegramTarget($user);
        if ($target === null) {
            return [
                'ok' => false,
                'error' => 'У Settings додай Telegram-бота і chat id — туди прийде код входу.',
            ];
        }

        $code = (string) random_int(1000, 9999);
        $sent = $this->telegram->sendRaw(
            $target['token'],
            [$target['chat_id']],
            $this->message($code),
            'HTML',
        );

        if (! $sent) {
            return [
                'ok' => false,
                'error' => 'Не вдалося надіслати код у Telegram. Спробуй ще раз.',
            ];
        }

        $this->rememberChallenge($request, $user, $remember, $code);

        return ['ok' => true];
    }

    /**
     * @return array{email: string}|null
     */
    public function pending(Request $request): ?array
    {
        $payload = $request->session()->get(self::SESSION_KEY);
        if (! is_array($payload) || (int) ($payload['user_id'] ?? 0) <= 0) {
            return null;
        }

        if (! $this->payloadIsFresh($payload)) {
            $request->session()->forget(self::SESSION_KEY);

            return null;
        }

        return [
            'email' => $this->maskEmail((string) ($payload['email'] ?? '')),
        ];
    }

    public function verify(Request $request, string $code): User
    {
        $payload = $this->requirePayload($request);
        $userId = (int) $payload['user_id'];
        $throttleKey = 'login-2fa|'.$userId.'|'.$request->ip();

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $this->forget($request);
            throw ValidationException::withMessages([
                'code' => 'Забагато спроб. Увійди з паролем ще раз.',
            ]);
        }

        $code = preg_replace('/\D+/', '', $code) ?? '';
        $hash = (string) ($payload['hash'] ?? '');
        if ($hash === '' || strlen($code) !== 4 || ! Hash::check($code, $hash) || ! $this->payloadIsFresh($payload)) {
            RateLimiter::hit($throttleKey, self::TTL_SECONDS);
            throw ValidationException::withMessages([
                'code' => 'Невірний або прострочений код.',
            ]);
        }

        $user = User::query()->find($userId);
        if (! $user) {
            $this->forget($request);
            throw ValidationException::withMessages([
                'code' => 'Сесію скинуто. Увійди ще раз.',
            ]);
        }

        RateLimiter::clear($throttleKey);
        $this->forget($request);

        return $user;
    }

    public function rememberFlag(Request $request): bool
    {
        $payload = $request->session()->get(self::SESSION_KEY);

        return is_array($payload) && ! empty($payload['remember']);
    }

    /**
     * @return array{ok: bool, error?: string}
     */
    public function resend(Request $request): array
    {
        $payload = $this->requirePayload($request);
        $sentAt = (int) ($payload['sent_at'] ?? 0);
        $wait = self::RESEND_SECONDS - (now()->timestamp - $sentAt);
        if ($wait > 0) {
            return [
                'ok' => false,
                'error' => 'Новий код можна надіслати через '.$wait.' с.',
            ];
        }

        $user = User::query()->find((int) $payload['user_id']);
        if (! $user) {
            $this->forget($request);

            return ['ok' => false, 'error' => 'Сесію скинуто. Увійди ще раз.'];
        }

        return $this->start($request, $user, (bool) ($payload['remember'] ?? false));
    }

    public function forget(Request $request): void
    {
        $request->session()->forget(self::SESSION_KEY);
    }

    /**
     * @return array{token: string, chat_id: string}|null
     */
    private function telegramTarget(User $user): ?array
    {
        $settings = $user->settings;
        $token = trim((string) ($settings?->tg_bot_token ?? ''));
        $chatId = trim((string) ($settings?->tg_chat_id ?? ''));
        if ($chatId === '') {
            $chatId = trim((string) ($settings?->tg_group_chat_id ?? ''));
        }

        if ($token === '' || $chatId === '') {
            return null;
        }

        return ['token' => $token, 'chat_id' => $chatId];
    }

    private function rememberChallenge(Request $request, User $user, bool $remember, string $code): void
    {
        $request->session()->put(self::SESSION_KEY, [
            'user_id' => $user->id,
            'remember' => $remember,
            'email' => $user->email,
            'sent_at' => now()->timestamp,
            'hash' => Hash::make($code),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function requirePayload(Request $request): array
    {
        $payload = $request->session()->get(self::SESSION_KEY);
        if (! is_array($payload) || (int) ($payload['user_id'] ?? 0) <= 0) {
            throw ValidationException::withMessages([
                'code' => 'Спочатку введи email і пароль.',
            ]);
        }

        return $payload;
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    private function payloadIsFresh(array $payload): bool
    {
        $sentAt = (int) ($payload['sent_at'] ?? 0);

        return $sentAt > 0
            && (now()->timestamp - $sentAt) <= self::TTL_SECONDS
            && filled($payload['hash'] ?? null);
    }

    private function message(string $code): string
    {
        return '<b>Offerra</b> — код входу: <code>'.$code.'</code>'."\n".'Дійсний 10 хвилин.';
    }

    private function maskEmail(string $email): string
    {
        $parts = explode('@', $email, 2);
        $local = $parts[0] ?? '';
        $domain = $parts[1] ?? '';
        if ($local === '' || $domain === '') {
            return $email;
        }
        $keep = min(2, strlen($local));

        return substr($local, 0, $keep).'***@'.$domain;
    }
}
