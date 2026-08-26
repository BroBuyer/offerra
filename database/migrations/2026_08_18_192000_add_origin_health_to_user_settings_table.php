<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('user_settings', 'deploy_driver')) {
            Schema::table('user_settings', function (Blueprint $table) {
                $table->string('deploy_driver', 16)->default('hestia');
            });
        }

        if (! Schema::hasColumn('user_settings', 'origin_health')) {
            Schema::table('user_settings', function (Blueprint $table) {
                $table->json('origin_health')->nullable();
            });
        }
    }

    public function down(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn(['deploy_driver', 'origin_health']);
        });
    }
};
