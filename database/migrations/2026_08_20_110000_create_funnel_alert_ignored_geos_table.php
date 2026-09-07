<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('funnel_alert_ignored_geos', function (Blueprint $table): void {
            $table->id();
            $table->string('geo', 8);
            $table->string('geo_key')->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('funnel_alert_ignored_geos');
    }
};

