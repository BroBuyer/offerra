<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->text('dynadot_api_key')->nullable()->after('deploy_panel_url');
            $table->text('dynadot_api_secret')->nullable();
            $table->string('dynadot_contact_id', 40)->nullable();
            $table->boolean('dynadot_sandbox')->default(false);
            $table->unsignedTinyInteger('dynadot_default_years')->default(1);

            $table->text('cloudflare_api_token')->nullable();
            $table->string('cloudflare_account_id', 40)->nullable();
            $table->boolean('cloudflare_default_proxied')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn([
                'dynadot_api_key',
                'dynadot_api_secret',
                'dynadot_contact_id',
                'dynadot_sandbox',
                'dynadot_default_years',
                'cloudflare_api_token',
                'cloudflare_account_id',
                'cloudflare_default_proxied',
            ]);
        });
    }
};
