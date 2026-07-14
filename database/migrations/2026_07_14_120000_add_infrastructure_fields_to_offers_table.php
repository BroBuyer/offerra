<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->boolean('provision_infrastructure')->default(false);
            $table->string('infra_status', 32)->nullable();
            $table->text('infra_error')->nullable();
            $table->json('infra_meta')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn([
                'provision_infrastructure',
                'infra_status',
                'infra_error',
                'infra_meta',
            ]);
        });
    }
};
