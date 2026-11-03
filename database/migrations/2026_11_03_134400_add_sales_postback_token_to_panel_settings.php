<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('panel_settings', function (Blueprint $table): void {
            $table->string('sales_postback_token', 64)->nullable()->unique()->after('users_see_all_offers');
        });

        $existing = DB::table('user_settings')
            ->whereNotNull('sales_postback_token')
            ->where('sales_postback_token', '!=', '')
            ->orderBy('user_id')
            ->value('sales_postback_token');

        if (is_string($existing) && strlen($existing) >= 16) {
            DB::table('panel_settings')->orderBy('id')->limit(1)->update([
                'sales_postback_token' => $existing,
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        Schema::table('panel_settings', function (Blueprint $table): void {
            $table->dropUnique(['sales_postback_token']);
            $table->dropColumn('sales_postback_token');
        });
    }
};
