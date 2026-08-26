<?php

use App\Models\Offer;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Legacy offers stored the origin-webroot step under infra_meta['hestia'].
     * The Hestia integration is gone, so normalize those rows to the
     * infra_meta['origin'] key the code now relies on, and drop 'hestia'.
     */
    public function up(): void
    {
        Offer::query()
            ->whereNotNull('infra_meta')
            ->chunkById(200, function ($offers) {
                foreach ($offers as $offer) {
                    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];

                    $changed = false;

                    if (array_key_exists('hestia', $meta)) {
                        if (($meta['origin'] ?? null) !== 'done' && $meta['hestia'] === 'done') {
                            $meta['origin'] = 'done';
                        }

                        unset($meta['hestia']);
                        $changed = true;
                    }

                    if (isset($meta['options']) && is_array($meta['options']) && array_key_exists('hestia', $meta['options'])) {
                        unset($meta['options']['hestia']);
                        $changed = true;
                    }

                    if ($changed) {
                        $offer->forceFill(['infra_meta' => $meta])->saveQuietly();
                    }
                }
            });
    }

    public function down(): void
    {
        // Irreversible data normalization; nothing to roll back.
    }
};
