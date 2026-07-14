<?php

namespace Tests\Unit;

use App\Models\UserSetting;
use App\Services\DynadotClient;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class DynadotPurchaseTest extends TestCase
{
    public function test_get_account_balance_parses_usd_balance(): void
    {
        Http::fake([
            'https://api.dynadot.com/api3.json*' => Http::response([
                'GetAccountBalanceResponse' => [
                    'ResponseCode' => 0,
                    'Status' => 'success',
                    'BalanceList' => [
                        ['Currency' => 'USD', 'Amount' => '42.50'],
                    ],
                ],
            ]),
        ]);

        $balance = app(DynadotClient::class)->getAccountBalance($this->makeSettings());

        $this->assertSame('42.50', $balance['balances'][0]['amount']);
        $this->assertSame('USD', $balance['balances'][0]['currency']);
        $this->assertSame(42.5, $balance['usd']);
        $this->assertFalse($balance['low_balance']);
    }

    public function test_register_returns_success_payload(): void
    {
        Http::fake([
            'https://api.dynadot.com/api3.json*' => function ($request) {
                $query = $request->data();

                if (($query['command'] ?? '') === 'search') {
                    return Http::response([
                        'SearchResponse' => [
                            'ResponseCode' => '0',
                            'SearchResults' => [
                                [
                                    'DomainName' => 'brand-new.online',
                                    'Available' => 'yes',
                                    'Price' => '2.50 in USD',
                                ],
                            ],
                        ],
                    ]);
                }

                return Http::response([
                    'RegisterResponse' => [
                        'ResponseCode' => 0,
                        'Status' => 'success',
                        'DomainName' => 'brand-new.online',
                        'Expiration' => 1458379145266,
                    ],
                ]);
            },
        ]);

        $result = app(DynadotClient::class)->register($this->makeSettings(), 'brand-new.online');

        $this->assertTrue($result['ok']);
        $this->assertSame('brand-new.online', $result['domain']);
        $this->assertSame('success', $result['status']);
    }

    public function test_register_requires_contact_id(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Contact ID');

        app(DynadotClient::class)->register($this->makeSettings(['dynadot_contact_id' => '']), 'brand-new.online');
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function makeSettings(array $overrides = []): UserSetting
    {
        $settings = new UserSetting(array_merge([
            'dynadot_api_key' => 'test-api-key',
            'dynadot_sandbox' => false,
            'dynadot_default_years' => 1,
            'dynadot_contact_id' => '999',
        ], $overrides));

        $settings->exists = true;

        return $settings;
    }
}
