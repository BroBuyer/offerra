<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->text('google_oauth_refresh_token')->nullable();
            $table->string('google_oauth_email')->nullable();
            $table->timestamp('google_oauth_connected_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn([
                'google_oauth_refresh_token',
                'google_oauth_email',
                'google_oauth_connected_at',
            ]);
        });
    }
};
