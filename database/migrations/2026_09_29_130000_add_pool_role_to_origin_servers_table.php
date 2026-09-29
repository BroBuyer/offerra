<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('origin_servers', function (Blueprint $table): void {
            if (! Schema::hasColumn('origin_servers', 'role')) {
                $table->string('role', 20)->default('pool')->after('is_active');
            }
            if (! Schema::hasColumn('origin_servers', 'max_offers')) {
                $table->unsignedInteger('max_offers')->nullable()->after('role');
            }
        });
    }

    public function down(): void
    {
        Schema::table('origin_servers', function (Blueprint $table): void {
            if (Schema::hasColumn('origin_servers', 'max_offers')) {
                $table->dropColumn('max_offers');
            }
            if (Schema::hasColumn('origin_servers', 'role')) {
                $table->dropColumn('role');
            }
        });
    }
};
