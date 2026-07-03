<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('offers', 'crm_include_domain')) {
            return;
        }

        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn(['crm_include_domain', 'crm_ip_countries']);
        });
    }

    public function down(): void
    {
        if (Schema::hasColumn('offers', 'crm_include_domain')) {
            return;
        }

        Schema::table('offers', function (Blueprint $table) {
            $table->boolean('crm_include_domain')->default(false)->after('indexed_at');
            $table->string('crm_ip_countries', 100)->nullable()->after('crm_include_domain');
        });
    }
};
