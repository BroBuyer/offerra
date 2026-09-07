<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->boolean('can_see_all_offers')->default(false);
        });

        $globalOn = false;
        if (Schema::hasTable('panel_settings')) {
            $globalOn = (bool) DB::table('panel_settings')->value('users_see_all_offers');
        }

        if ($globalOn) {
            DB::table('users')
                ->where(function ($query): void {
                    $query->whereNull('role')
                        ->orWhere('role', '!=', 'admin');
                })
                ->update(['can_see_all_offers' => true]);
        }
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->dropColumn('can_see_all_offers');
        });
    }
};
