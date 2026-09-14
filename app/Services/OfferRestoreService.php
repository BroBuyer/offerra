<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\User;
use App\Support\InfrastructureOptions;
use Illuminate\Support\Facades\Log;
use RuntimeException;

class OfferRestoreService
{
    public function __construct(
        private readonly OfferGenerator $generator,
        private readonly KeitaroClient $keitaro,
        private readonly InfrastructureProvisioner $provisioner,
    ) {}

    public function restore(Offer $offer, User $initiatedBy): Offer
    {
        $offer->refresh();
        $offer->loadMissing('user.settings');

        if ($offer->status !== 'archived') {
            throw new RuntimeException('Повернути з архіву можна лише повністю заархівований оффер.');
        }

        $domain = strtolower(trim((string) $offer->domain));

        $conflict = Offer::query()
            ->whereRaw('LOWER(domain) = ?', [$domain])
            ->where('id', '!=', $offer->id)
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->exists();

        if ($conflict) {
            throw new RuntimeException(
                "Активний оффер з доменом {$domain} вже існує. Спочатку заархівуйте його або змініть домен.",
            );
        }

        $settings = $offer->user?->settings;

        if (! $settings) {
            throw new RuntimeException('У власника оффера немає налаштувань Server.');
        }

        if (! InfrastructureProvisioner::settingsReady($settings)) {
            throw new RuntimeException(
                'Заповніть SSH, Cloudflare і Dynadot у налаштуваннях власника, щоб поновити оффер.',
            );
        }

        if (! $offer->keitaro_campaign_id && filled($settings->keitaro_api_key)) {
            try {
                $keitaro = $this->keitaro->createCampaign($settings, [
                    'brand' => $offer->brand,
                    'domain' => $offer->domain,
                    'geo' => $offer->geo,
                    'lang' => $offer->lang,
                    'affiliate_tag' => $settings->affiliate_tag,
                    'created_at' => $offer->created_at,
                ]);

                $offer->update([
                    'keitaro_campaign_id' => $keitaro['id'],
                    'keitaro_alias' => $keitaro['alias'],
                    'keitaro_campaign_token' => $keitaro['token'] ?? null,
                ]);
                $offer->refresh();
            } catch (\Throwable $e) {
                Log::warning('Offer restore: Keitaro recreate failed', [
                    'offer_id' => $offer->id,
                    'domain' => $domain,
                    'error' => $e->getMessage(),
                    'by' => $initiatedBy->id,
                ]);
            }
        }

        // Rebuild while still archived so a failure keeps the offer in the archive list.
        $this->generator->rebuildLocalFolder($offer->fresh());

        $oldMeta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $options = InfrastructureOptions::forOffer($offer);

        if (! InfrastructureOptions::anyEnabled($options)) {
            $options = InfrastructureOptions::defaults();
        }

        // Fresh infra progress — archive deleted origin/CF zone; do not trust old "done" flags.
        $meta = ['options' => $options];

        foreach (['geo_overflow_hub', 'geo_overflow_country'] as $keepKey) {
            if (! empty($oldMeta[$keepKey])) {
                $meta[$keepKey] = $oldMeta[$keepKey];
            }
        }

        $offer->update([
            'status' => 'generated',
            'archived_at' => null,
            'archived_by' => null,
            'teardown_meta' => null,
            'deploy_error' => null,
            'remote_path' => null,
            'deployed_at' => null,
            'deploy_panel_name' => trim((string) $settings->deploy_host) ?: $offer->deploy_panel_name,
            'provision_infrastructure' => true,
            'infra_status' => 'pending',
            'infra_error' => null,
            'infra_meta' => $meta,
            'submitted_for_indexing' => false,
            'indexed_at' => null,
        ]);

        $this->provisioner->enqueue($offer->fresh());

        Log::info('Offer restored from archive', [
            'offer_id' => $offer->id,
            'domain' => $domain,
            'by' => $initiatedBy->id,
        ]);

        return $offer->fresh();
    }
}
