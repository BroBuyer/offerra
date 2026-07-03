<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->boolean('crm_include_domain')->default(false)->after('indexed_at');
            $table->string('crm_ip_countries', 100)->nullable()->after('crm_include_domain');
        });

        DB::table('offers')
            ->where('domain', 'britexium-primo.org')
            ->update([
                'crm_include_domain' => false,
                'crm_ip_countries' => 'FR',
            ]);
    }

    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn(['crm_include_domain', 'crm_ip_countries']);
        });
    }
};
