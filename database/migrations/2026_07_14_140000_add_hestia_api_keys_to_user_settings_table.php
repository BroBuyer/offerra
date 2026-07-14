<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->string('deploy_api_access_key')->nullable()->after('deploy_panel_url');
            $table->text('deploy_api_secret_key')->nullable()->after('deploy_api_access_key');
        });
    }

    public function down(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn(['deploy_api_access_key', 'deploy_api_secret_key']);
        });
    }
};
