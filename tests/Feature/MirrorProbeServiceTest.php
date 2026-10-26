<?php

namespace Tests\Feature;

use App\Models\MirrorDomain;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\MirrorProbeService;
use App\Services\TelegramNotifier;
use App\Support\PublicDnsLookup;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class MirrorProbeServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_curl_without_origin_cannot_create_a_mirror(): void
    {
        $this->fakeDns(['1.2.3.4']);
        [$service, $token] = $this->probe();

        $service->handlePing($token, 'nonexistent-abcdef.example', [
            'host_trusted' => true,
            'ip' => '9.9.9.9',
        ]);

        $this->assertSame(0, MirrorDomain::query()->count());
    }

    public function test_reserved_tld_is_rejected_even_with_origin(): void
    {
        $this->fakeDns(['1.2.3.4']);
        [$service, $token] = $this->probe();

        $service->handlePing($token, 'nonexistent-abcdef.example', [
            'host_trusted' => true,
            'ip' => '9.9.9.9',
            'origin_host' => 'nonexistent-abcdef.example',
        ]);

        $this->assertSame(0, MirrorDomain::query()->count());
    }

    public function test_placeholder_exemple_com_is_noise(): void
    {
        $this->fakeDns(['93.184.216.34']);
        [$service, $token] = $this->probe();

        $service->handlePing($token, 'exemple.com', [
            'host_trusted' => true,
            'ip' => '9.9.9.9',
            'origin_host' => 'exemple.com',
        ]);

        $this->assertSame(0, MirrorDomain::query()->count());
    }

    public function test_unresolved_host_is_rejected(): void
    {
        $this->fakeDns([]);
        [$service, $token] = $this->probe();

        $service->handlePing($token, 'aaaaaaaa-zzzzzzzz.xyz', [
            'host_trusted' => true,
            'ip' => '9.9.9.9',
            'origin_host' => 'aaaaaaaa-zzzzzzzz.xyz',
        ]);

        $this->assertSame(0, MirrorDomain::query()->count());
    }

    public function test_real_browser_collect_records_a_resolving_clone(): void
    {
        $this->fakeDns(['198.51.100.10']);
        $this->mock(TelegramNotifier::class, function ($mock) {
            $mock->shouldReceive('send')->once();
        });

        [$service, $token] = $this->probe();

        $service->handlePing($token, 'polarisai-za.live', [
            'host_trusted' => true,
            'ip' => '203.0.113.8',
            'origin_host' => 'polarisai-za.live',
            'path' => '/',
        ]);

        $this->assertSame(1, MirrorDomain::query()->count());
        $this->assertSame('polarisai-za.live', MirrorDomain::query()->value('host'));
    }

    public function test_prune_drops_reserved_and_unresolved_rows(): void
    {
        $user = User::factory()->create();
        MirrorDomain::query()->create([
            'user_id' => $user->id,
            'host' => 'nonexistent-abcdef.example',
            'status' => MirrorDomain::STATUS_NEW,
            'hit_count' => 1,
        ]);
        MirrorDomain::query()->create([
            'user_id' => $user->id,
            'host' => 'keep-this-clone.live',
            'status' => MirrorDomain::STATUS_NEW,
            'hit_count' => 1,
        ]);

        $this->fakeDns(function ($host) {
            return $host === 'keep-this-clone.live' ? ['198.51.100.20'] : [];
        });

        $deleted = app(MirrorProbeService::class)->pruneJunk();

        $this->assertSame(1, $deleted);
        $this->assertSame(['keep-this-clone.live'], MirrorDomain::query()->pluck('host')->all());
    }

    /**
     * @return array{0: MirrorProbeService, 1: string}
     */
    private function probe(): array
    {
        Cache::flush();
        $user = User::factory()->create();
        $settings = UserSetting::query()->create([
            'user_id' => $user->id,
            'mirror_probe_token' => 'tokentokentokentoken12',
        ]);

        return [app(MirrorProbeService::class), $settings->mirror_probe_token];
    }

    /**
     * @param  list<string>|callable  $ips
     */
    private function fakeDns(array|callable $ips): void
    {
        $this->mock(PublicDnsLookup::class, function ($mock) use ($ips) {
            $mock->shouldReceive('aRecords')->andReturnUsing(
                is_callable($ips)
                    ? $ips
                    : static fn () => $ips
            );
        });
    }
}
