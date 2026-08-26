<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('user_settings', 'origin_health_alerts')) {
            Schema::table('user_settings', function (Blueprint $table) {
                $table->boolean('origin_health_alerts')->default(true)->after('origin_health');
            });
        }

        // JEL origin ще не готовий — не спамити алертами до увімкнення вручну.
        DB::table('user_settings')
            ->whereIn('user_id', function ($query) {
                $query->select('id')
                    ->from('users')
                    ->where('name', 'like', '%JEL%');
            })
            ->update(['origin_health_alerts' => false]);
    }

    public function down(): void
    {
        if (Schema::hasColumn('user_settings', 'origin_health_alerts')) {
            Schema::table('user_settings', function (Blueprint $table) {
                $table->dropColumn('origin_health_alerts');
            });
        }
    }
};
