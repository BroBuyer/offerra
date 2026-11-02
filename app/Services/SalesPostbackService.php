<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Log;

class SalesPostbackService
{
    public function __construct(
        private readonly TelegramNotifier $telegram,
        private readonly OfferClickIdService $clickIds,
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
        return $this->salePostbackUrl($settings);
    }

    public function leadPostbackUrl(UserSetting $settings): string
    {
        return $this->basePostbackUrl($settings).'?subid={aff_sub3}&status=lead';
    }

    public function salePostbackUrl(UserSetting $settings): string
    {
        return $this->basePostbackUrl($settings).'?subid={aff_sub3}&status=sale&payout={payout}';
    }

    private function basePostbackUrl(UserSetting $settings): string
    {
        $token = $this->ensureToken($settings);
        $base = rtrim((string) config('app.url'), '/');

        return "{$base}/api/v1/postback/{$token}";
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

        $subid = trim((string) (
            $input['subid']
            ?? $input['sub_id']
            ?? $input['aff_sub3']
            ?? $input['click_id']
            ?? ''
        ));
        $status = strtolower(trim((string) ($input['status'] ?? '')));
        $payout = trim((string) (
            $input['payout']
            ?? $input['revenue']
            ?? $input['conversion_revenue']
            ?? ''
        ));
        $domain = $this->normalizeDomain((string) (
            $input['domain']
            ?? $input['offer_domain']
            ?? $input['aff_sub4']
            ?? ''
        ));

        if ($subid === '') {
            return ['ok' => false, 'reason' => 'missing_subid'];
        }

        $click = $this->clickIds->findForUser((int) $settings->user_id, $subid);
        if (! $click) {
            return ['ok' => true, 'ignored' => true, 'reason' => 'unknown_click'];
        }

        if ($domain === '' && is_string($click->domain)) {
            $domain = $this->normalizeDomain($click->domain);
        }

        $isLead = $this->isLeadStatus($status);
        $isSale = $this->isSaleStatus($status);

        if (! $isLead && ! $isSale) {
            return ['ok' => true, 'ignored' => true, 'reason' => 'status_'.$status];
        }

        // Stats first — never block Telegram dep alert if stats fail.
        try {
            $this->bumpOfferStats($settings, $domain, $isLead, $isSale, $click->offer_id ? (int) $click->offer_id : null);
        } catch (\Throwable $e) {
            Log::warning('SalesPostback: stats bump failed', [
                'user_id' => $settings->user_id,
                'domain' => $domain,
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

                return ['ok' => true, 'reason' => 'telegram_failed'];
            }
        }

        return ['ok' => true];
    }

    private function bumpOfferStats(UserSetting $settings, string $domain, bool $isLead, bool $isSale, ?int $offerId = null): void
    {
        $offer = null;

        if ($offerId) {
            $offer = Offer::query()
                ->where('user_id', $settings->user_id)
                ->where('id', $offerId)
                ->whereNotIn('status', ['archived', 'archiving', 'purging'])
                ->first();
        }

        if (! $offer && $domain !== '') {
            $offer = Offer::query()
                ->where('user_id', $settings->user_id)
                ->whereRaw('LOWER(domain) = ?', [$domain])
                ->whereNotIn('status', ['archived', 'archiving', 'purging'])
                ->first();
        }

        if (! $offer) {
            Log::info('SalesPostback: no offer for domain', [
                'user_id' => $settings->user_id,
                'domain' => $domain,
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

    private function normalizeDomain(string $domain): string
    {
        $domain = strtolower(trim($domain));
        $domain = preg_replace('#^https?://#', '', $domain) ?? $domain;
        $domain = preg_replace('#^www\.#', '', $domain) ?? $domain;

        return rtrim(explode('/', $domain)[0], '.');
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
