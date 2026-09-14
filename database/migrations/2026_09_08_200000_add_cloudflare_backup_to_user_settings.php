<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->text('cloudflare_backup_api_token')->nullable()->after('cloudflare_account_name');
            $table->string('cloudflare_backup_account_id', 40)->nullable()->after('cloudflare_backup_api_token');
            $table->string('cloudflare_backup_account_name')->nullable()->after('cloudflare_backup_account_id');
        });
    }

    public function down(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn([
                'cloudflare_backup_api_token',
                'cloudflare_backup_account_id',
                'cloudflare_backup_account_name',
            ]);
        });
    }
};
