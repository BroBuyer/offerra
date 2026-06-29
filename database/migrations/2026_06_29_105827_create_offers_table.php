<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('folder')->unique();
            $table->string('brand');
            $table->string('domain');
            $table->string('geo', 8);
            $table->string('lang', 8);
            $table->string('phone', 8)->nullable();
            $table->string('template');
            $table->string('status')->default('generated');
            $table->unsignedInteger('keitaro_campaign_id')->nullable();
            $table->string('keitaro_alias')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
