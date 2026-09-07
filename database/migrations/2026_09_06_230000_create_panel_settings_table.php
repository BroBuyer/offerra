<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('panel_settings', function (Blueprint $table): void {
            $table->id();
            $table->boolean('users_see_all_offers')->default(true);
            $table->timestamps();
        });

        DB::table('panel_settings')->insert([
            'users_see_all_offers' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('panel_settings');
    }
};
