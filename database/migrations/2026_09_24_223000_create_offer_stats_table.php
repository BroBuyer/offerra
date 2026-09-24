<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offer_stats', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('offer_id')->unique()->constrained('offers')->cascadeOnDelete();
            $table->unsignedInteger('clicks_geo_count')->default(0);
            $table->timestamp('last_click_geo_at')->nullable();
            $table->unsignedInteger('leads_count')->default(0);
            $table->timestamp('last_lead_at')->nullable();
            $table->unsignedInteger('deposits_count')->default(0);
            $table->timestamp('last_deposit_at')->nullable();
            $table->boolean('is_protected')->default(false);
            $table->timestamps();

            $table->index(['leads_count', 'last_lead_at']);
            $table->index(['clicks_geo_count', 'last_click_geo_at']);
            $table->index(['deposits_count', 'last_deposit_at']);
        });

        // Backfill empty stats for existing offers
        $now = now();
        DB::table('offers')->orderBy('id')->chunkById(500, function ($offers) use ($now): void {
            $rows = [];
            foreach ($offers as $offer) {
                $rows[] = [
                    'offer_id' => $offer->id,
                    'clicks_geo_count' => 0,
                    'leads_count' => 0,
                    'deposits_count' => 0,
                    'is_protected' => false,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
            if ($rows !== []) {
                DB::table('offer_stats')->insert($rows);
            }
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offer_stats');
    }
};
