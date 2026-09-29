<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->boolean('submitted_for_indexing')->default(false)->after('deploy_error');
            $table->timestamp('indexed_at')->nullable()->after('submitted_for_indexing');
        });
    }

    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn(['submitted_for_indexing', 'indexed_at']);
        });
    }
};
