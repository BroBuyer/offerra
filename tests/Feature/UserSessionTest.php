<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UserSessionTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_sees_active_sessions_on_users_page(): void
    {
        $admin = User::factory()->admin()->create(['name' => 'Aaa Admin']);
        $user = User::factory()->create(['name' => 'Zzz User']);

        $this->insertSession('sess-live', $user->id, '193.5.64.10');
        $this->insertSession('sess-stale', $user->id, '1.1.1.1', lastActivity: time() - 10_000);

        $this->actingAs($admin)
            ->get(route('users.index'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Panel/Users/Index')
                ->has('users', 2)
                ->where('users.1.email', $user->email)
                ->where('users.1.sessions_count', 1)
                ->where('users.1.sessions_ip_count', 1)
                ->where('users.1.sessions.0.ip', '193.5.64.10')
                ->where('users.1.sessions.0.browser', 'Chrome')
                ->where('users.1.sessions.0.os', 'Windows')
            );
    }

    public function test_regular_user_cannot_see_users_or_drop_sessions(): void
    {
        $user = User::factory()->create();
        $other = User::factory()->create();
        $this->insertSession('sess-other', $other->id);

        $this->actingAs($user)
            ->get(route('users.index'))
            ->assertForbidden();

        $this->actingAs($user)
            ->delete(route('users.sessions.destroy', ['user' => $other, 'session' => 'sess-other']))
            ->assertForbidden();

        $this->assertDatabaseHas('sessions', ['id' => 'sess-other']);
    }

    public function test_admin_can_drop_one_session(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create();
        $this->insertSession('sess-keep', $user->id, '10.0.0.1');
        $this->insertSession('sess-drop', $user->id, '10.0.0.2');

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->delete(route('users.sessions.destroy', ['user' => $user, 'session' => 'sess-drop']))
            ->assertRedirect(route('users.index'));

        $this->assertDatabaseMissing('sessions', ['id' => 'sess-drop']);
        $this->assertDatabaseHas('sessions', ['id' => 'sess-keep']);
    }

    private function insertSession(
        string $id,
        int $userId,
        string $ip = '127.0.0.1',
        string $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
        ?int $lastActivity = null,
    ): void {
        DB::table('sessions')->insert([
            'id' => $id,
            'user_id' => $userId,
            'ip_address' => $ip,
            'user_agent' => $userAgent,
            'payload' => base64_encode('{}'),
            'last_activity' => $lastActivity ?? time(),
        ]);
    }
}
