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

        (new CloudflareClient)->configureEdgeSecurity($settings, 'zone123', 'example.com', [
            'cloudflare_ssl' => true,
            'cloudflare_https' => true,
            'cloudflare_www_redirect' => true,
        ]);

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

    public function test_configure_edge_security_creates_www_redirect_when_entrypoint_missing(): void
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
                ->push([], 404)
                ->push([], 404),
            'https://api.cloudflare.com/client/v4/zones/zone123/rulesets' => Http::response([
                'success' => true,
                'result' => ['id' => 'ruleset-new'],
            ]),
        ]);

        $settings = new UserSetting([
            'cloudflare_api_token' => 'cf-token',
            'cloudflare_account_id' => 'acct',
        ]);

        (new CloudflareClient)->configureEdgeSecurity($settings, 'zone123', 'example.com', [
            'cloudflare_ssl' => true,
            'cloudflare_https' => true,
            'cloudflare_www_redirect' => true,
        ]);

        Http::assertSent(function ($request) {
            return $request->method() === 'POST'
                && $request->url() === 'https://api.cloudflare.com/client/v4/zones/zone123/rulesets'
                && ($request->data()['phase'] ?? '') === 'http_request_dynamic_redirect';
        });
    }

    public function test_delete_zone_treats_invalid_identifier_as_already_missing(): void
    {
        Http::fake([
            'https://api.cloudflare.com/client/v4/zones/stale-zone' => Http::response([
                'success' => false,
                'errors' => [['message' => 'Invalid zone identifier']],
            ], 400),
        ]);

        $settings = new UserSetting([
            'cloudflare_api_token' => 'cf-token',
            'cloudflare_account_id' => 'acct',
        ]);

        $result = (new CloudflareClient)->deleteZone($settings, 'stale-zone');

        $this->assertSame('already_missing', $result);
    }

    public function test_delete_zone_returns_deleted_on_success(): void
    {
        Http::fake([
            'https://api.cloudflare.com/client/v4/zones/zone123' => Http::response([
                'success' => true,
                'result' => ['id' => 'zone123'],
            ], 200),
        ]);

        $settings = new UserSetting([
            'cloudflare_api_token' => 'cf-token',
            'cloudflare_account_id' => 'acct',
        ]);

        $result = (new CloudflareClient)->deleteZone($settings, 'zone123');

        $this->assertSame('deleted', $result);
    }

    public function test_normalize_api_token_strips_bearer_prefix_and_whitespace(): void
    {
        $this->assertSame(
            'abc123-token',
            CloudflareClient::normalizeApiToken("Bearer \r\nabc123-token\n"),
        );
    }

    public function test_test_connection_returns_ok_when_token_valid(): void
    {
        Http::fake([
            'https://api.cloudflare.com/client/v4/user/tokens/verify' => Http::response([
                'success' => true,
                'result' => ['status' => 'active'],
            ]),
            'https://api.cloudflare.com/client/v4/zones*' => Http::response([
                'success' => true,
                'result' => [],
                'result_info' => ['total_count' => 3],
            ]),
        ]);

        $settings = new UserSetting([
            'cloudflare_api_token' => 'Bearer cf-token',
            'cloudflare_account_id' => 'acct',
        ]);

        $result = (new CloudflareClient)->testConnection($settings);

        $this->assertTrue($result['ok']);
        $this->assertStringContainsString('валідний', $result['message']);

        Http::assertSent(function ($request) {
            return $request->url() === 'https://api.cloudflare.com/client/v4/user/tokens/verify'
                && $request->header('Authorization')[0] === 'Bearer cf-token';
        });
    }
}
