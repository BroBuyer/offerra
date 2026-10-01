<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::table('geo_min_deposits')->where('geo', 'SI')->exists()) {
            return;
        }

        $now = now();

        DB::table('geo_min_deposits')->insert([
            'geo' => 'SI',
            'min_deposit' => '250',
            'currency' => 'EUR',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }

    public function down(): void
    {
        DB::table('geo_min_deposits')->where('geo', 'SI')->delete();
    }
};
