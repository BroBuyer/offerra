<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('origin_servers', function (Blueprint $table): void {
            $table->string('hoster')->nullable()->after('label');
        });
    }

    public function down(): void
    {
        Schema::table('origin_servers', function (Blueprint $table): void {
            $table->dropColumn('hoster');
        });
    }
};
