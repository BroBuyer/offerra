<?php

use App\Models\CloudflareAccount;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cloudflare_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->text('api_token');
            $table->string('account_id', 40);
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_checked_at')->nullable();
            $table->boolean('last_check_ok')->nullable();
            $table->string('last_check_message', 400)->nullable();
            $table->timestamps();
        });

        $admin = User::query()
            ->where('role', User::ROLE_ADMIN)
            ->orderBy('id')
            ->with('settings')
            ->first();

        $settings = $admin?->settings;
        if ($settings && $settings->hasCloudflareSlot('backup')) {
            $creds = $settings->cloudflareSlotCredentials('backup');
            CloudflareAccount::query()->create([
                'name' => $creds['name'] !== '' ? $creds['name'] : 'Запасний CF',
                'api_token' => $creds['token'],
                'account_id' => $creds['account_id'],
                'is_active' => true,
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cloudflare_accounts');
    }
};
