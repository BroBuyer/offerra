<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->string('google_index_status', 32)->nullable()->after('indexed_at');
            $table->timestamp('google_indexed_at')->nullable()->after('google_index_status');
            $table->timestamp('google_index_checked_at')->nullable()->after('google_indexed_at');
            $table->string('google_index_coverage', 190)->nullable()->after('google_index_checked_at');
        });
    }

    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn([
                'google_index_status',
                'google_indexed_at',
                'google_index_checked_at',
                'google_index_coverage',
            ]);
        });
    }
};
