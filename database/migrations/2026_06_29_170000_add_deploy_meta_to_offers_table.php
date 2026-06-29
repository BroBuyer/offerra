<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->string('deploy_panel_name')->nullable()->after('status');
            $table->string('remote_path')->nullable()->after('deploy_panel_name');
            $table->timestamp('deployed_at')->nullable()->after('remote_path');
            $table->text('deploy_error')->nullable()->after('deployed_at');
        });
    }

    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn([
                'deploy_panel_name',
                'remote_path',
                'deployed_at',
                'deploy_error',
            ]);
        });
    }
};
