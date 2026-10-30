<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $this->get('/login')->assertOk();
    }

    public function test_users_cannot_authenticate_with_invalid_password(): void
    {
        Http::fake();
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
        Http::assertNothingSent();
    }

    public function test_valid_password_without_telegram_stays_guest(): void
    {
        Http::fake();
        $user = User::factory()->create();

        $this->from('/login')
            ->post('/login', [
                'email' => $user->email,
                'password' => 'password',
            ])
            ->assertRedirect('/login')
            ->assertSessionHasErrors('email');

        $this->assertGuest();
        Http::assertNothingSent();
    }

    public function test_valid_password_sends_telegram_code_and_does_not_login_yet(): void
    {
        Http::fake([
            'https://api.telegram.org/*' => Http::response(['ok' => true], 200),
        ]);
        $user = $this->userWithTelegram();

        $this->from('/login')
            ->post('/login', [
                'email' => $user->email,
                'password' => 'password',
            ])
            ->assertRedirect('/login');

        $this->assertGuest();
        Http::assertSent(function ($request) {
            $text = (string) ($request->data()['text'] ?? '');

            return str_contains($request->url(), '/bottest-login-token/sendMessage')
                && (string) ($request->data()['chat_id'] ?? '') === '4242'
                && preg_match('/\b\d{4}\b/', $text);
        });
    }

    public function test_users_can_authenticate_with_telegram_code(): void
    {
        Http::fake([
            'https://api.telegram.org/*' => Http::response(['ok' => true], 200),
        ]);
        $user = $this->userWithTelegram();

        $this->from('/login')->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $code = $this->lastTelegramCode();
        $this->assertNotSame('', $code);

        $this->post('/login/2fa', ['code' => $code])
            ->assertRedirect(route('dashboard', absolute: false));

        $this->assertAuthenticatedAs($user);
    }

    public function test_wrong_telegram_code_keeps_guest(): void
    {
        Http::fake([
            'https://api.telegram.org/*' => Http::response(['ok' => true], 200),
        ]);
        $user = $this->userWithTelegram();

        $this->from('/login')->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->from('/login')
            ->post('/login/2fa', ['code' => '0000'])
            ->assertRedirect('/login')
            ->assertSessionHasErrors('code');

        $this->assertGuest();
    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post('/logout')
            ->assertRedirect('/');

        $this->assertGuest();
    }

    private function userWithTelegram(): User
    {
        $user = User::factory()->create();
        $user->settings()->create([
            'tg_bot_token' => 'test-login-token',
            'tg_chat_id' => '4242',
        ]);

        return $user;
    }

    private function lastTelegramCode(): string
    {
        foreach (Http::recorded() as $pair) {
            $text = (string) ($pair[0]->data()['text'] ?? '');
            if (preg_match('/\b(\d{4})\b/', $text, $match)) {
                return $match[1];
            }
        }

        return '';
    }
}
