<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('backup_servers', function (Blueprint $table): void {
            $table->id();
            $table->string('host', 255)->unique();
            $table->unsignedInteger('port')->default(22);
            $table->string('username', 255)->nullable();
            $table->text('password')->nullable();
            $table->string('label', 255)->nullable();
            $table->string('hoster', 120)->nullable();
            $table->string('cpu', 120)->nullable();
            $table->string('ram', 80)->nullable();
            $table->string('disk', 80)->nullable();
            $table->string('price', 80)->nullable();
            $table->date('paid_until')->nullable();
            $table->date('paid_until_alerted_for')->nullable();
            $table->boolean('alerts_enabled')->default(true);
            $table->json('last_status')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('backup_servers');
    }
};
