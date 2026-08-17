<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('funnel_alert_settings', function (Blueprint $table): void {
            $table->id();
            $table->text('webhook_token')->nullable();
            $table->text('tg_bot_token')->nullable();
            $table->json('tg_chat_ids')->nullable();
            $table->timestamps();
        });

        Schema::create('funnel_alert_events', function (Blueprint $table): void {
            $table->id();
            $table->string('external_id')->nullable()->index();
            $table->string('event')->default('funnel.created');
            $table->string('brand');
            $table->string('geo', 8);
            $table->string('lang', 16);
            $table->string('match_key')->index();
            $table->boolean('offer_found')->default(false);
            $table->timestamp('event_at')->nullable();
            $table->timestamp('notified_at')->nullable();
            $table->json('payload')->nullable();
            $table->timestamps();

            $table->unique(['external_id'], 'funnel_alert_events_external_id_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('funnel_alert_events');
        Schema::dropIfExists('funnel_alert_settings');
    }
};
