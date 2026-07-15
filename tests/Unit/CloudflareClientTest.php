<?php

namespace Tests\Unit;

use App\Models\UserSetting;
use App\Services\CloudflareClient;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CloudflareClientTest extends TestCase
{
    public function test_configure_edge_security_sets_ssl_https_and_www_redirect(): void
    {
        Http::fake([
            'https://api.cloudflare.com/client/v4/zones/zone123/settings/ssl' => Http::response([
                'success' => true,
                'result' => ['id' => 'ssl', 'value' => 'flexible'],
            ]),
            'https://api.cloudflare.com/client/v4/zones/zone123/settings/always_use_https' => Http::response([
                'success' => true,
                'result' => ['id' => 'always_use_https', 'value' => 'on'],
            ]),
            'https://api.cloudflare.com/client/v4/zones/zone123/rulesets/phases/http_request_dynamic_redirect/entrypoint' => Http::sequence()
                ->push(['success' => true, 'result' => ['rules' => []]])
                ->push(['success' => true, 'result' => ['rules' => []]]),
        ]);

        $settings = new UserSetting([
            'cloudflare_api_token' => 'cf-token',
            'cloudflare_account_id' => 'acct',
        ]);

        (new CloudflareClient)->configureEdgeSecurity($settings, 'zone123', 'example.com');

        Http::assertSent(function ($request) {
            return $request->url() === 'https://api.cloudflare.com/client/v4/zones/zone123/settings/ssl'
                && $request->method() === 'PATCH'
                && ($request->data()['value'] ?? '') === 'flexible';
        });

        Http::assertSent(function ($request) {
            return $request->url() === 'https://api.cloudflare.com/client/v4/zones/zone123/settings/always_use_https'
                && ($request->data()['value'] ?? '') === 'on';
        });

        Http::assertSent(function ($request) {
            if ($request->method() !== 'PUT' || ! str_contains($request->url(), 'http_request_dynamic_redirect/entrypoint')) {
                return false;
            }

            $rules = $request->data()['rules'] ?? [];

            return ($rules[0]['expression'] ?? '') === '(http.host eq "www.example.com")';
        });
    }
}
