<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('offers', function (Blueprint $table): void {
            $table->string('availability_status', 16)->default('unchecked')->after('infra_meta');
            $table->timestamp('availability_checked_at')->nullable()->after('availability_status');
            $table->string('availability_error', 400)->nullable()->after('availability_checked_at');
            $table->unsignedTinyInteger('availability_fail_streak')->default(0)->after('availability_error');

            $table->index(['status', 'availability_checked_at'], 'offers_availability_check_idx');
            $table->index(['status', 'availability_status'], 'offers_availability_status_idx');
        });
    }

    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table): void {
            $table->dropIndex('offers_availability_check_idx');
            $table->dropIndex('offers_availability_status_idx');
            $table->dropColumn([
                'availability_status',
                'availability_checked_at',
                'availability_error',
                'availability_fail_streak',
            ]);
        });
    }
};
