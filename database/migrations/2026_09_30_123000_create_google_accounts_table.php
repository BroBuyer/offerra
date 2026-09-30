<?php

use App\Models\GoogleAccount;
use App\Models\UserSetting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('google_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('email');
            $table->text('refresh_token');
            $table->boolean('is_primary')->default(false);
            $table->timestamp('connected_at')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'email']);
            $table->index(['user_id', 'is_primary']);
        });

        UserSetting::query()
            ->whereNotNull('google_oauth_refresh_token')
            ->where('google_oauth_refresh_token', '!=', '')
            ->each(function (UserSetting $settings): void {
                $token = trim((string) $settings->google_oauth_refresh_token);
                if ($token === '') {
                    return;
                }

                $email = strtolower(trim((string) ($settings->google_oauth_email ?? '')));
                if ($email === '') {
                    $email = 'google-user-'.$settings->user_id.'@unknown.local';
                }

                GoogleAccount::query()->updateOrCreate(
                    [
                        'user_id' => $settings->user_id,
                        'email' => $email,
                    ],
                    [
                        'refresh_token' => $token,
                        'is_primary' => true,
                        'connected_at' => $settings->google_oauth_connected_at ?? now(),
                    ],
                );
            });
    }

    public function down(): void
    {
        Schema::dropIfExists('google_accounts');
    }
};
