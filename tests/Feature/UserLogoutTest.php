<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UserLogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_drop_another_users_panel_sessions(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create([
            'remember_token' => 'old-remember-token-old-remember-token-old',
        ]);

        $this->insertSession('sess-user', $user->id);
        $this->insertSession('sess-admin', $admin->id);

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->post(route('users.logout', $user))
            ->assertRedirect(route('users.index'));

        $this->assertDatabaseMissing('sessions', ['id' => 'sess-user']);
        $this->assertDatabaseHas('sessions', ['id' => 'sess-admin']);
        $this->assertNotSame(
            'old-remember-token-old-remember-token-old',
            $user->fresh()->remember_token,
        );
    }

    public function test_regular_user_cannot_logout_others(): void
    {
        $user = User::factory()->create();
        $other = User::factory()->create();
        $this->insertSession('sess-other', $other->id);

        $this->actingAs($user)
            ->post(route('users.logout', $other))
            ->assertForbidden();

        $this->assertDatabaseHas('sessions', ['id' => 'sess-other']);
    }

    public function test_admin_cannot_logout_self_from_users_page(): void
    {
        $admin = User::factory()->admin()->create();
        $this->insertSession('sess-self', $admin->id);

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->post(route('users.logout', $admin))
            ->assertRedirect(route('users.index'))
            ->assertSessionHasErrors('logout');

        $this->assertDatabaseHas('sessions', ['id' => 'sess-self']);
    }

    public function test_password_reset_also_drops_sessions(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create();
        $this->insertSession('sess-reset', $user->id);

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->post(route('users.reset-password', $user))
            ->assertRedirect(route('users.index'));

        $this->assertDatabaseMissing('sessions', ['id' => 'sess-reset']);
    }

    private function insertSession(string $id, int $userId): void
    {
        DB::table('sessions')->insert([
            'id' => $id,
            'user_id' => $userId,
            'ip_address' => '127.0.0.1',
            'user_agent' => 'phpunit',
            'payload' => base64_encode('{}'),
            'last_activity' => time(),
        ]);
    }
}
