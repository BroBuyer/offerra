<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('origin_servers', function (Blueprint $table): void {
            $table->string('cpu')->nullable()->after('label');
            $table->string('ram')->nullable()->after('cpu');
            $table->string('disk')->nullable()->after('ram');
            $table->string('price')->nullable()->after('disk');
        });
    }

    public function down(): void
    {
        Schema::table('origin_servers', function (Blueprint $table): void {
            $table->dropColumn(['cpu', 'ram', 'disk', 'price']);
        });
    }
};
