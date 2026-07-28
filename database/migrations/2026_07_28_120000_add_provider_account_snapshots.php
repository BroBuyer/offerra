<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->string('dynadot_account_name')->nullable()->after('dynadot_default_years');
            $table->string('cloudflare_account_name')->nullable()->after('cloudflare_default_proxied');
        });

        Schema::table('offers', function (Blueprint $table) {
            $table->string('cloudflare_account_name')->nullable()->after('deploy_panel_name');
            $table->string('dynadot_account_name')->nullable()->after('cloudflare_account_name');
            $table->text('cloudflare_api_token')->nullable()->after('dynadot_account_name');
            $table->string('cloudflare_account_id')->nullable()->after('cloudflare_api_token');
            $table->text('dynadot_api_key')->nullable()->after('cloudflare_account_id');
            $table->string('dynadot_contact_id')->nullable()->after('dynadot_api_key');
            $table->boolean('dynadot_sandbox')->nullable()->after('dynadot_contact_id');
        });
    }

    public function down(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn(['dynadot_account_name', 'cloudflare_account_name']);
        });

        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn([
                'cloudflare_account_name',
                'dynadot_account_name',
                'cloudflare_api_token',
                'cloudflare_account_id',
                'dynadot_api_key',
                'dynadot_contact_id',
                'dynadot_sandbox',
            ]);
        });
    }
};
