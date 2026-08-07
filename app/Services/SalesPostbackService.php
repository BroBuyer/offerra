<?php

namespace App\Services;

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

        if ($existing !== '' && strlen($existing) >= 16) {
            return $existing;
        }

        $token = bin2hex(random_bytes(16));
        $settings->forceFill(['sales_postback_token' => $token])->save();

        return $token;
    }

    public function postbackUrl(UserSetting $settings): string
    {
        $token = $this->ensureToken($settings);
        $base = rtrim((string) config('app.url'), '/');

        // Keitaro S2S: CRM payout becomes conversion revenue → pass as payout=
        return "{$base}/api/v1/postback/{$token}?subid={subid}&status={status}&payout={revenue}";
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

        if ($subid === '') {
            return ['ok' => false, 'reason' => 'missing_subid'];
        }

        if (! $this->isSaleStatus($status)) {
            return ['ok' => true, 'ignored' => true, 'reason' => 'status_'.$status];
        }

        $lines = ['💰 DEP', 'subid: '.$subid];

        if ($payout !== '') {
            $lines[] = 'payout: '.$payout;
        }

        $sent = $this->telegram->send($settings, implode("\n", $lines));

        if (! $sent) {
            Log::warning('SalesPostback: telegram send failed', [
                'user_id' => $settings->user_id,
                'subid' => $subid,
            ]);

            return ['ok' => false, 'reason' => 'telegram_failed'];
        }

        return ['ok' => true];
    }

    private function isSaleStatus(string $status): bool
    {
        return in_array($status, ['sale', 'dep', 'deposit', 'paid'], true);
    }
}
