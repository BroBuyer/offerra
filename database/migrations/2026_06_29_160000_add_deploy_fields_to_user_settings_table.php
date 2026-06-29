<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->string('deploy_panel_name')->nullable()->after('tg_chat_id');
            $table->string('deploy_host')->nullable();
            $table->unsignedSmallInteger('deploy_port')->default(22);
            $table->string('deploy_username')->nullable();
            $table->text('deploy_password')->nullable();
            $table->string('deploy_path_template')->nullable();
            $table->string('deploy_panel_url')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn([
                'deploy_panel_name',
                'deploy_host',
                'deploy_port',
                'deploy_username',
                'deploy_password',
                'deploy_path_template',
                'deploy_panel_url',
            ]);
        });
    }
};
