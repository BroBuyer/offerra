<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('origin_servers', function (Blueprint $table): void {
            $table->id();
            $table->string('host')->unique();
            $table->unsignedSmallInteger('port')->default(22);
            $table->string('username')->nullable();
            $table->text('password')->nullable();
            $table->string('label')->nullable();
            $table->string('deploy_driver')->nullable();
            $table->string('deploy_path_template')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('alerts_enabled')->default(true);
            $table->foreignId('owner_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->json('health')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('origin_servers');
    }
};
