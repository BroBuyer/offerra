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
                'keitaro_url' => 'https://clickmetrics38.com',
                'keitaro_group_id' => '51',
                'affiliate_tag' => 'BRO',
                'crm_api_key' => 'b15dtss21lmvlch8zheq1eukzb8840nw',
                'tg_bot_token' => '8374261466:AAEcvD648TQNYRpSxVjULW02y-0tCk67P-M',
                'tg_chat_id' => '8918948320',
            ],
        );
    }
}
