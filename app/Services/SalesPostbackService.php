<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Log;

class SalesPostbackService
{
    public function __construct(
        private readonly TelegramNotifier $telegram,
    ) {}

    public function ensureToken(UserSetting $settings): string
    {
        $existing = trim((string) ($settings->sales_postback_token ?? ''));

        if ($existing === '' || strlen($existing) < 16) {
            $token = bin2hex(random_bytes(16));
            $settings->forceFill(['sales_postback_token' => $token])->save();

            return $token;
        }

        return $existing;
    }

    public function postbackUrl(UserSetting $settings): string
    {
        $token = $this->ensureToken($settings);
        $base = rtrim((string) config('app.url'), '/');

        // campaign_id → match Offer.keitaro_campaign_id for offer_stats
        return "{$base}/api/v1/postback/{$token}"
            .'?subid={subid}&status={status}&payout={revenue}&campaign_id={campaign_id}';
    }

    /**
     * Desired Keitaro conversion statuses for the panel S2S URL.
     *
     * @return list<string>
     */
    public function panelPostbackStatuses(): array
    {
        return ['lead', 'sale'];
    }

    /**
     * @param  array<string, mixed>  $input
     * @return array{ok: bool, ignored?: bool, reason?: string}
     */
    public function handle(string $token, array $input): array
    {
        $token = trim($token);

        if ($token === '' || strlen($token) < 16) {
            return ['ok' => false, 'reason' => 'invalid_token'];
        }

        $settings = UserSetting::query()
            ->where('sales_postback_token', $token)
            ->first();

        if (! $settings) {
            return ['ok' => false, 'reason' => 'unknown_token'];
        }

        $subid = trim((string) ($input['subid'] ?? $input['sub_id'] ?? ''));
        $status = strtolower(trim((string) ($input['status'] ?? '')));
        $payout = trim((string) (
            $input['payout']
            ?? $input['revenue']
            ?? $input['conversion_revenue']
            ?? ''
        ));
        $campaignId = (int) ($input['campaign_id'] ?? $input['campaign'] ?? 0);

        if ($subid === '') {
            return ['ok' => false, 'reason' => 'missing_subid'];
        }

        $isLead = $this->isLeadStatus($status);
        $isSale = $this->isSaleStatus($status);

        if (! $isLead && ! $isSale) {
            return ['ok' => true, 'ignored' => true, 'reason' => 'status_'.$status];
        }

        // Stats first — never block Telegram dep alert if stats fail.
        try {
            $this->bumpOfferStats($settings, $campaignId, $isLead, $isSale);
        } catch (\Throwable $e) {
            Log::warning('SalesPostback: stats bump failed', [
                'user_id' => $settings->user_id,
                'campaign_id' => $campaignId,
                'status' => $status,
                'error' => $e->getMessage(),
            ]);
        }

        if ($isSale) {
            $safeSubid = htmlspecialchars($subid, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            $lines = ['💰 DEP', 'subid: <code>'.$safeSubid.'</code>'];

            if ($payout !== '') {
                $amount = ltrim($payout, '$');
                $lines[] = 'payout: $'.htmlspecialchars($amount, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            }

            $sent = $this->telegram->send($settings, implode("\n", $lines), 'HTML');

            if (! $sent) {
                Log::warning('SalesPostback: telegram send failed', [
                    'user_id' => $settings->user_id,
                    'subid' => $subid,
                ]);

                // Still OK for Keitaro — TG hiccup must not cause endless retries
                return ['ok' => true, 'reason' => 'telegram_failed'];
            }
        }

        return ['ok' => true];
    }

    private function bumpOfferStats(UserSetting $settings, int $campaignId, bool $isLead, bool $isSale): void
    {
        if ($campaignId <= 0) {
            return;
        }

        $offer = Offer::query()
            ->where('user_id', $settings->user_id)
            ->where('keitaro_campaign_id', $campaignId)
            ->first();

        if (! $offer) {
            // Fallback: unique campaign id globally (shared KT / admin view)
            $offer = Offer::query()
                ->where('keitaro_campaign_id', $campaignId)
                ->first();
        }

        if (! $offer) {
            Log::info('SalesPostback: no offer for campaign', [
                'user_id' => $settings->user_id,
                'campaign_id' => $campaignId,
            ]);

            return;
        }

        $stats = $offer->ensureStats();
        $now = now();

        if ($isLead) {
            $stats->leads_count = (int) $stats->leads_count + 1;
            $stats->last_lead_at = $now;
        }

        if ($isSale) {
            $stats->deposits_count = (int) $stats->deposits_count + 1;
            $stats->last_deposit_at = $now;
        }

        $stats->save();
    }

    private function isSaleStatus(string $status): bool
    {
        return in_array($status, ['sale', 'dep', 'deposit', 'paid'], true);
    }

    private function isLeadStatus(string $status): bool
    {
        return in_array($status, ['lead', 'reg', 'registration'], true);
    }
}
