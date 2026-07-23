<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->string('mirror_probe_token', 64)->nullable()->unique()->after('tg_group_chat_id');
        });

        Schema::table('offers', function (Blueprint $table) {
            $table->boolean('vitals_enabled')->default(false)->after('keitaro_campaign_token');
        });

        Schema::create('mirror_domains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('host', 191);
            $table->unsignedInteger('hit_count')->default(0);
            $table->timestamp('first_seen_at')->nullable();
            $table->timestamp('last_seen_at')->nullable();
            $table->timestamp('alerted_at')->nullable();
            $table->string('last_path', 512)->nullable();
            $table->string('last_ip', 64)->nullable();
            $table->string('last_ua', 512)->nullable();
            $table->string('status', 32)->default('new'); // new | watching | redirecting | ignored
            $table->boolean('redirect_enabled')->default(false);
            $table->string('redirect_url', 512)->nullable();
            $table->foreignId('redirect_offer_id')->nullable()->constrained('offers')->nullOnDelete();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'host']);
            $table->index(['user_id', 'status']);
            $table->index('last_seen_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mirror_domains');

        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn('vitals_enabled');
        });

        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn('mirror_probe_token');
        });
    }
};
