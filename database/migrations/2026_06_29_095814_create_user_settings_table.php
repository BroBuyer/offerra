<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('keitaro_url')->nullable();
            $table->text('keitaro_api_key')->nullable();
            $table->string('keitaro_group_id')->default('51');
            $table->string('affiliate_tag')->default('BRO');
            $table->text('crm_api_key')->nullable();
            $table->text('tg_bot_token')->nullable();
            $table->string('tg_chat_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_settings');
    }
};
