<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\UserSetting;
use App\Services\DeployService;
use App\Services\OriginHostService;
use App\Services\TelegramNotifier;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class HealBrokenLanders extends Command
{
    protected $signature = 'offers:heal-landers
        {--dry-run : Тільки звіт, без редеплою і видалення}
        {--prune-orphans : Видалити застарілі вебрути офферів, що вже хостяться на іншому origin}';

    protected $description = 'Знайти зламані лендінги на origin-серверах (втрачені функції шаблону) і перевилити їх; опційно прибрати осиротілі вебрути';

    public function handle(OriginHostService $origin, DeployService $deploy, TelegramNotifier $telegram): int
    {
        $dryRun = (bool) $this->option('dry-run');
        $prune = (bool) $this->option('prune-orphans');

        /** @var array<string, UserSetting> $hosts one representative settings row per origin host */
        $hosts = [];
        foreach ($this->hostSettings() as $settings) {
            $host = trim((string) $settings->deploy_host);
            if ($host === '' || isset($hosts[$host])) {
                continue;
            }
            $hosts[$host] = $settings;
        }

        $healed = [];
        $pruned = [];
        $orphans = [];

        foreach ($hosts as $host => $settings) {
            try {
                $domains = $origin->findBrokenLanders($settings);
            } catch (\Throwable $e) {
                $this->error("{$host}: scan failed — {$e->getMessage()}");
                Log::warning('heal-landers: scan failed', ['host' => $host, 'error' => $e->getMessage()]);

                continue;
            }

            $this->line("{$host}: broken=".count($domains));

            foreach ($domains as $domain) {
                $offer = Offer::query()->with('user.settings')->where('domain', $domain)->first();

                if (! $offer) {
                    $orphans[] = "{$domain} @ {$host} (немає в БД)";

                    continue;
                }

                $currentHost = trim((string) ($offer->user?->settings?->deploy_host ?? ''));

                // Broken copy on the offer's current origin — redeploy to heal it.
                if ($currentHost !== '' && $currentHost === $host) {
                    if ($dryRun) {
                        $healed[] = "{$domain} (would redeploy)";

                        continue;
                    }

                    try {
                        $deploy->enqueueDeploy($offer->user, $offer);
                        $healed[] = $domain;
                    } catch (\Throwable $e) {
                        $this->warn("  skip {$domain}: {$e->getMessage()}");
                    }

                    continue;
                }

                // Stale webroot left on a previous origin; the live site lives elsewhere.
                if ($prune && ! $dryRun && $currentHost !== '') {
                    try {
                        $origin->deleteWebRoot($settings, $domain);
                        $pruned[] = "{$domain} @ {$host}";
                    } catch (\Throwable $e) {
                        $this->warn("  prune failed {$domain}: {$e->getMessage()}");
                    }

                    continue;
                }

                $orphans[] = "{$domain} @ {$host}".($currentHost !== '' ? " (живий на {$currentHost})" : '');
            }
        }

        $this->info('healed='.count($healed).' pruned='.count($pruned).' orphans='.count($orphans));

        if (! $dryRun && ($healed !== [] || $pruned !== [])) {
            Log::info('heal-landers acted', ['healed' => $healed, 'pruned' => $pruned, 'orphans' => $orphans]);
            $this->notify($telegram, $hosts, $healed, $pruned, $orphans);
        }

        return self::SUCCESS;
    }

    /**
     * @return \Illuminate\Support\Collection<int, UserSetting>
     */
    private function hostSettings()
    {
        return UserSetting::query()
            ->whereNotNull('deploy_host')->where('deploy_host', '!=', '')
            ->whereNotNull('deploy_username')->where('deploy_username', '!=', '')
            ->whereNotNull('deploy_password')
            ->with('user')
            ->get();
    }

    /**
     * @param  array<string, UserSetting>  $hosts
     * @param  list<string>  $healed
     * @param  list<string>  $pruned
     * @param  list<string>  $orphans
     */
    private function notify(TelegramNotifier $telegram, array $hosts, array $healed, array $pruned, array $orphans): void
    {
        $lines = ['🩹 <b>Auto-heal лендінгів</b>'];

        if ($healed !== []) {
            $lines[] = 'Перевилито (redeploy): '.count($healed);
            $lines[] = '<code>'.e(implode(', ', array_slice($healed, 0, 20))).'</code>';
        }

        if ($pruned !== []) {
            $lines[] = 'Прибрано осиротілих папок: '.count($pruned);
        }

        if ($orphans !== []) {
            $lines[] = 'Осиротілі (не чіпав): '.count($orphans);
        }

        $text = implode("\n", $lines);

        foreach ($hosts as $settings) {
            if ($telegram->send($settings, $text, 'HTML')) {
                return;
            }
        }
    }
}
