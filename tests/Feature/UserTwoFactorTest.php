<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTwoFactorTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_disable_two_factor(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create(['two_factor_enabled' => true]);

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->patch(route('users.two-factor.update', $user), [
                'two_factor_enabled' => false,
            ])
            ->assertRedirect(route('users.index'));

        $this->assertFalse($user->fresh()->twoFactorEnabled());
    }

    public function test_admin_cannot_enable_two_factor_without_telegram(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create(['two_factor_enabled' => false]);

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->patch(route('users.two-factor.update', $user), [
                'two_factor_enabled' => true,
            ])
            ->assertRedirect(route('users.index'))
            ->assertSessionHasErrors('two_factor');

        $this->assertFalse($user->fresh()->twoFactorEnabled());
    }

    public function test_admin_can_enable_two_factor_when_telegram_is_set(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create(['two_factor_enabled' => false]);
        $user->settings()->create([
            'tg_bot_token' => 'bot-token',
            'tg_chat_id' => '111',
        ]);

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->patch(route('users.two-factor.update', $user), [
                'two_factor_enabled' => true,
            ])
            ->assertRedirect(route('users.index'))
            ->assertSessionDoesntHaveErrors('two_factor');

        $this->assertTrue($user->fresh()->twoFactorEnabled());
    }

    public function test_regular_user_cannot_toggle_two_factor(): void
    {
        $user = User::factory()->create();
        $other = User::factory()->create(['two_factor_enabled' => true]);

        $this->actingAs($user)
            ->patch(route('users.two-factor.update', $other), [
                'two_factor_enabled' => false,
            ])
            ->assertForbidden();

        $this->assertTrue($other->fresh()->twoFactorEnabled());
    }
}
