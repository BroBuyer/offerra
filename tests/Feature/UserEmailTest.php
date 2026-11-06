<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserEmailTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_change_user_email(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create(['email' => 'volseo007@gmail.com']);

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->patch(route('users.email.update', $user), [
                'email' => 'vol.new@example.com',
            ])
            ->assertRedirect(route('users.index'));

        $this->assertSame('vol.new@example.com', $user->fresh()->email);
    }

    public function test_admin_cannot_reuse_existing_email(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create(['email' => 'volseo007@gmail.com']);
        User::factory()->create(['email' => 'taken@example.com']);

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->patch(route('users.email.update', $user), [
                'email' => 'taken@example.com',
            ])
            ->assertRedirect(route('users.index'))
            ->assertSessionHasErrors('email');

        $this->assertSame('volseo007@gmail.com', $user->fresh()->email);
    }

    public function test_admin_cannot_change_admin_email_from_users_page(): void
    {
        $admin = User::factory()->admin()->create(['email' => 'admin@offerra.local']);
        $otherAdmin = User::factory()->admin()->create(['email' => 'other-admin@offerra.local']);

        $this->actingAs($admin)
            ->from(route('users.index'))
            ->patch(route('users.email.update', $otherAdmin), [
                'email' => 'new-admin@offerra.local',
            ])
            ->assertRedirect(route('users.index'))
            ->assertSessionHasErrors('email');

        $this->assertSame('other-admin@offerra.local', $otherAdmin->fresh()->email);
    }

    public function test_regular_user_cannot_change_emails(): void
    {
        $user = User::factory()->create();
        $other = User::factory()->create(['email' => 'volseo007@gmail.com']);

        $this->actingAs($user)
            ->patch(route('users.email.update', $other), [
                'email' => 'vol.new@example.com',
            ])
            ->assertForbidden();

        $this->assertSame('volseo007@gmail.com', $other->fresh()->email);
    }
}
