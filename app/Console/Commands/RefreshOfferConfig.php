<?php

namespace App\Console\Commands;

use App\Jobs\PushOfferConfigJob;
use App\Models\Offer;
use App\Services\DeployService;
use App\Services\OfferGenerator;
use App\Support\SecretValue;
use Illuminate\Console\Command;

class RefreshOfferConfig extends Command
{
    protected $signature = 'offers:refresh-config
        {offer? : ID оффера (або --all)}
        {--all : Усі live офери}
        {--push : Синхронно залити includes/config.php на origin}
        {--queue-push : Поставити PushOfferConfigJob у чергу deploy}
        {--limit=0 : Ліміт при --all (0 = усі)}';

    protected $description = 'Перегенерувати includes/config.php з актуальних налаштувань';

    public function handle(OfferGenerator $generator, DeployService $deploy): int
    {
        $all = (bool) $this->option('all');
        $offerId = $this->argument('offer');
        $push = (bool) $this->option('push');
        $queuePush = (bool) $this->option('queue-push');
        $limit = max(0, (int) $this->option('limit'));

        if (! $all && ! $offerId) {
            $this->error('Вкажіть ID оффера або --all');

            return self::FAILURE;
        }

        if ($all) {
            $query = Offer::query()
                ->with('user.settings')
                ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
                ->orderBy('id');

            if ($limit > 0) {
                $query->limit($limit);
            }

            $offers = $query->get();
        } else {
            $offer = Offer::query()->with('user.settings')->find($offerId);
            if (! $offer) {
                $this->error('Оффер не знайдено');

                return self::FAILURE;
            }
            $offers = collect([$offer]);
        }

        $ok = 0;
        $failed = 0;
        $queued = 0;

        foreach ($offers as $offer) {
            try {
                $settings = $offer->user?->settings;
                if ($settings) {
                    $normalized = SecretValue::normalize($settings->crm_api_key);
                    if ($normalized !== $settings->crm_api_key) {
                        $settings->crm_api_key = $normalized;
                        $settings->save();
                    }
                }

                if ($queuePush) {
                    PushOfferConfigJob::dispatch($offer->id)->onQueue('deploy');
                    $queued++;
                    $ok++;
                    if ($queued % 100 === 0) {
                        $this->line("queued={$queued}");
                    }

                    continue;
                }

                $generator->refreshConfig($offer);

                if ($push && in_array($offer->status, ['deployed', 'failed'], true) && $offer->user) {
                    $deploy->pushConfig($offer->user, $offer->fresh());
                    $this->line("#{$offer->id} {$offer->domain}: config pushed");
                } else {
                    $this->line("#{$offer->id} {$offer->domain}: config refreshed (local)");
                }

                $ok++;
            } catch (\Throwable $e) {
                $failed++;
                $this->warn("#{$offer->id} {$offer->domain}: ".$e->getMessage());
            }
        }

        $this->info("done ok={$ok} fail={$failed} queued={$queued} total=".$offers->count());

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }
}
