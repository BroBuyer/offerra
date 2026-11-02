<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn([
                'keitaro_campaign_id',
                'keitaro_alias',
                'keitaro_campaign_token',
            ]);
        });

        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn([
                'keitaro_url',
                'keitaro_api_key',
                'keitaro_group_id',
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->unsignedInteger('keitaro_campaign_id')->nullable();
            $table->string('keitaro_alias')->nullable();
            $table->text('keitaro_campaign_token')->nullable();
        });

        Schema::table('user_settings', function (Blueprint $table) {
            $table->string('keitaro_url')->nullable();
            $table->text('keitaro_api_key')->nullable();
            $table->string('keitaro_group_id')->default('51');
        });
    }
};
