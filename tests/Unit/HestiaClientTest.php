<?php

namespace Tests\Unit;

use App\Models\UserSetting;
use App\Services\HestiaClient;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class HestiaClientTest extends TestCase
{
    public function test_uses_access_key_auth_when_configured(): void
    {
        Http::fake([
            'https://10.0.0.1:8083/api/*' => Http::sequence()
                ->push('{}', 200, ['hestia-exit-code' => '0'])
                ->push('', 200, ['hestia-exit-code' => '0']),
        ]);

        $settings = new UserSetting([
            'deploy_host' => '10.0.0.1',
            'deploy_username' => 'user',
            'deploy_api_access_key' => 'abcdefghij1234567890',
            'deploy_api_secret_key' => 'secret1234567890123456789012345678901234',
        ]);

        $client = new HestiaClient;
        $client->addWebDomain($settings, 'example.com');

        Http::assertSent(function ($request) {
            $data = $request->data();

            return $request->url() === 'https://10.0.0.1:8083/api/'
                && ($data['returncode'] ?? '') === 'no'
                && ($data['access_key'] ?? '') === 'abcdefghij1234567890'
                && ($data['secret_key'] ?? '') === 'secret1234567890123456789012345678901234'
                && ($data['cmd'] ?? '') === 'v-add-web-domain'
                && ! isset($data['password']);
        });
    }

    public function test_falls_back_to_password_auth_when_api_keys_missing(): void
    {
        Http::fake([
            'https://10.0.0.1:8083/api/*' => Http::sequence()
                ->push('{}', 200, ['hestia-exit-code' => '0'])
                ->push('', 200, ['hestia-exit-code' => '0']),
        ]);

        $settings = new UserSetting([
            'deploy_host' => '10.0.0.1',
            'deploy_username' => 'user',
            'deploy_password' => 'sftp-pass',
        ]);

        $client = new HestiaClient;
        $client->addWebDomain($settings, 'example.com');

        Http::assertSent(function ($request) {
            $data = $request->data();

            return ($data['user'] ?? '') === 'user'
                && ($data['password'] ?? '') === 'sftp-pass'
                && ($data['returncode'] ?? '') === 'no'
                && ! isset($data['access_key']);
        });
    }

    public function test_test_connection_counts_domains_from_json_body(): void
    {
        Http::fake([
            'https://10.0.0.1:8083/api/*' => Http::response(
                '{"a.example":{"DOMAIN":"a.example"},"b.example":{"DOMAIN":"b.example"}}',
                200,
                ['hestia-exit-code' => '0'],
            ),
        ]);

        $settings = new UserSetting([
            'deploy_host' => '10.0.0.1',
            'deploy_username' => 'user',
            'deploy_api_access_key' => 'abcdefghij1234567890',
            'deploy_api_secret_key' => 'secret1234567890123456789012345678901234',
        ]);

        $result = (new HestiaClient)->testConnection($settings);

        $this->assertTrue($result['ok']);
        $this->assertSame(2, $result['domains']);
    }

    public function test_http_401_includes_helpful_hint(): void
    {
        Http::fake([
            'https://10.0.0.1:8083/api/*' => Http::response('Authentication failed', 401),
        ]);

        $settings = new UserSetting([
            'deploy_host' => '10.0.0.1',
            'deploy_username' => 'user',
            'deploy_password' => 'wrong',
        ]);

        $result = (new HestiaClient)->testConnection($settings);

        $this->assertFalse($result['ok']);
        $this->assertStringContainsString('213.176.115.14', $result['message']);
    }
}
