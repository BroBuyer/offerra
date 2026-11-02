<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lander_clicks', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('click_id', 64);
            $table->foreignId('offer_id')->nullable()->constrained('offers')->nullOnDelete();
            $table->string('domain', 255)->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'click_id']);
            $table->index('click_id');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lander_clicks');
    }
};
