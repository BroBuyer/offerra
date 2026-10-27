<?php

namespace Tests\Unit;

use App\Models\OriginServer;
use Tests\TestCase;

class OriginServerPanelSortTest extends TestCase
{
    public function test_drain_goes_last_and_hosters_cluster(): void
    {
        $rows = collect([
            $this->server('158.94.209.18', 'virtualine', OriginServer::ROLE_DRAIN),
            $this->server('144.172.118.208', 'cloudzy', OriginServer::ROLE_POOL),
            $this->server('217.156.65.242', 'AlexHost', OriginServer::ROLE_POOL),
            $this->server('84.200.193.136', 'ultahost', OriginServer::ROLE_POOL),
            $this->server('198.251.91.240', 'cloudzy', OriginServer::ROLE_SPARE),
            $this->server('80.96.112.133', 'AlexHost', OriginServer::ROLE_POOL),
            $this->server('158.94.208.144', 'virtualine', OriginServer::ROLE_DRAIN),
            $this->server('84.200.89.234', 'ultahost', OriginServer::ROLE_POOL),
        ])->sort(OriginServer::compareForPanel(...))->values();

        $this->assertSame([
            '80.96.112.133',
            '217.156.65.242',
            '144.172.118.208',
            '198.251.91.240',
            '84.200.89.234',
            '84.200.193.136',
            '158.94.208.144',
            '158.94.209.18',
        ], $rows->pluck('host')->all());
    }

    private function server(string $host, string $hoster, string $role): OriginServer
    {
        $server = new OriginServer;
        $server->host = $host;
        $server->hoster = $hoster;
        $server->role = $role;

        return $server;
    }
}
