<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use App\Support\SecretValue;
use App\Support\TelegramLeadDumpParser;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use RuntimeException;

class CrmLeadResendService
{
    public function __construct(
        private readonly TelegramLeadDumpParser $parser,
    ) {}

    /**
     * @param  array<string, mixed>  $input
     * @return array{ok: bool, http: int, payload: array<string, mixed>, offer: array<string, mixed>, crm: array<string, mixed>}
     */
    public function send(User $user, array $input): array
    {
        $parsed = $this->mergeInput($input);
        $this->assertRequired($parsed);

        $offer = $this->findOffer($user, $parsed['domain']);
        if (! $offer) {
            throw new RuntimeException('Офер «'.$parsed['domain'].'» не знайдено.');
        }

        $settings = $offer->user?->settings;
        $apiKey = SecretValue::normalize($settings?->crm_api_key ?? '');
        if ($apiKey === '') {
            throw new RuntimeException('У власника офера немає CRM API key.');
        }

        $payload = $this->buildPayload($parsed, $offer, $settings);

        $response = Http::timeout(40)
            ->connectTimeout(8)
            ->withHeaders([
                'Authorization' => $apiKey,
                'Content-Type' => 'application/json',
            ])
            ->post((string) config('offerra.crm_api_url'), $payload);

        $crm = $response->json();
        if (! is_array($crm)) {
            $crm = ['raw' => mb_substr((string) $response->body(), 0, 800)];
        }

        Log::info('CRM lead resent from panel', [
            'offer_id' => $offer->id,
            'domain' => $offer->domain,
            'http' => $response->status(),
            'by' => $user->id,
        ]);

        return [
            'ok' => $response->successful(),
            'http' => $response->status(),
            'payload' => $this->publicPayload($payload),
            'offer' => [
                'id' => $offer->id,
                'domain' => $offer->domain,
                'brand' => $offer->brand,
                'status' => $offer->status,
            ],
            'crm' => $crm,
        ];
    }

    /**
     * @param  array<string, mixed>  $input
     * @return array<string, string>
     */
    public function mergeInput(array $input): array
    {
        $fromDump = $this->parser->parse((string) ($input['dump'] ?? ''));
        $overrides = [];

        foreach ([
            'first_name', 'last_name', 'email', 'phone', 'affiliate',
            'funnel', 'offer', 'domain', 'country', 'ip', 'language', 'subid',
        ] as $key) {
            $value = trim((string) ($input[$key] ?? ''));
            if ($value !== '') {
                $overrides[$key] = $value;
            }
        }

        if (isset($overrides['phone'])) {
            $overrides['phone'] = $this->parser->normalizePhone($overrides['phone']);
        }
        if (isset($overrides['domain'])) {
            $overrides['domain'] = $this->parser->normalizeDomain($overrides['domain']);
        }
        if (isset($overrides['email'])) {
            $overrides['email'] = strtolower($overrides['email']);
        }
        if (isset($overrides['country'])) {
            $overrides['country'] = strtoupper($overrides['country']);
        }
        if (isset($overrides['language'])) {
            $overrides['language'] = strtolower($overrides['language']);
        }
        if (isset($overrides['affiliate'])) {
            $overrides['affiliate'] = strtoupper($overrides['affiliate']);
        }

        return array_merge($fromDump, $overrides);
    }

    /**
     * @param  array<string, string>  $parsed
     */
    private function assertRequired(array $parsed): void
    {
        if ($parsed['email'] === '' || ! filter_var($parsed['email'], FILTER_VALIDATE_EMAIL)) {
            throw new RuntimeException('Немає валідного email.');
        }
        if ($parsed['phone'] === '') {
            throw new RuntimeException('Немає телефону.');
        }
        if ($parsed['first_name'] === '') {
            throw new RuntimeException('Немає імені.');
        }
        if ($parsed['domain'] === '') {
            throw new RuntimeException('Немає домена офера.');
        }
    }

    private function findOffer(User $user, string $domain): ?Offer
    {
        $query = Offer::query()
            ->with('user.settings')
            ->where('domain', $domain)
            ->orderByRaw("case when status in ('archived', 'teardown_failed') then 1 else 0 end")
            ->orderByDesc('id');

        if (! $user->canSeeAllOffers()) {
            $query->where('user_id', $user->id);
        }

        return $query->first();
    }

    /**
     * @param  array<string, string>  $parsed
     * @return array<string, string>
     */
    public function buildPayload(array $parsed, Offer $offer, ?UserSetting $settings): array
    {
        $affiliate = $parsed['affiliate'] !== ''
            ? $parsed['affiliate']
            : strtoupper(trim((string) ($settings?->affiliate_tag ?? 'BRO')));
        $funnel = $parsed['funnel'] !== '' ? $parsed['funnel'] : $offer->brand;
        $country = $parsed['country'] !== '' ? $parsed['country'] : strtoupper((string) $offer->geo);
        $language = $parsed['language'] !== '' ? $parsed['language'] : strtolower((string) $offer->lang);

        $payload = [
            'ip' => $parsed['ip'],
            'email' => $parsed['email'],
            'first_name' => $parsed['first_name'],
            'last_name' => $parsed['last_name'],
            'password' => $this->generatePassword(),
            'phone' => $parsed['phone'],
            'affiliate_id' => $affiliate !== '' ? $affiliate : 'BRO',
            'offer_id' => $funnel,
            'country_code' => $country,
            'lead_language' => $language,
            'aff_sub2' => $funnel,
        ];

        if ($parsed['subid'] !== '') {
            $payload['aff_sub3'] = $parsed['subid'];
        }

        if ($offer->from_search_team) {
            $payload['aff_sub7'] = 'SEO';
            $payload['aff_sub8'] = 'SearchAM';
        }

        return $payload;
    }

    /**
     * @param  array<string, string>  $payload
     * @return array<string, string>
     */
    private function publicPayload(array $payload): array
    {
        unset($payload['password']);

        return $payload;
    }

    private function generatePassword(int $length = 10): string
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, strlen($chars) - 1)];
        }

        return $password;
    }
}
