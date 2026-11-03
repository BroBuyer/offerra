<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('origin_servers', function (Blueprint $table): void {
            $table->dropColumn([
                'hoster_url',
                'hoster_email',
                'hoster_password',
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('origin_servers', function (Blueprint $table): void {
            $table->string('hoster_url', 255)->nullable()->after('hoster');
            $table->string('hoster_email', 255)->nullable()->after('hoster_url');
            $table->text('hoster_password')->nullable()->after('hoster_email');
        });
    }
};
