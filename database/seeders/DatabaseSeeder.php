<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::query()->firstOrCreate(
            ['email' => 'admin@offerra.local'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'role' => User::ROLE_ADMIN,
            ],
        );

        UserSetting::query()->firstOrCreate(
            ['user_id' => $user->id],
            [
                'keitaro_url' => env('SEED_KEITARO_URL'),
                'keitaro_group_id' => env('SEED_KEITARO_GROUP_ID'),
                'affiliate_tag' => env('SEED_AFFILIATE_TAG', 'BRO'),
            ],
        );
    }
}
