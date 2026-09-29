<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('origin_servers', 'owner_user_id')) {
            return;
        }

        Schema::table('origin_servers', function (Blueprint $table): void {
            $table->dropConstrainedForeignId('owner_user_id');
        });
    }

    public function down(): void
    {
        if (Schema::hasColumn('origin_servers', 'owner_user_id')) {
            return;
        }

        Schema::table('origin_servers', function (Blueprint $table): void {
            $table->foreignId('owner_user_id')->nullable()->after('alerts_enabled')->constrained('users')->nullOnDelete();
        });
    }
};
