<?php

namespace Tests\Unit;

use App\Http\Requests\BulkOfferActionRequest;
use App\Jobs\RebindOfferDnsJob;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class BulkOfferActionRequestTest extends TestCase
{
    public function test_redeploy_accepts_ids(): void
    {
        $validator = Validator::make(
            ['ids' => [1, 2], 'action' => 'redeploy'],
            (new BulkOfferActionRequest)->rules(),
        );

        $this->assertFalse($validator->fails(), $validator->errors()->toJson());
    }

    public function test_rebind_requires_ipv4(): void
    {
        $request = new BulkOfferActionRequest;
        $validator = Validator::make(
            ['ids' => [1], 'action' => 'rebind_dns'],
            $request->rules(),
            $request->messages(),
        );

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('ip', $validator->errors()->toArray());
    }

    public function test_rebind_accepts_ipv4(): void
    {
        $validator = Validator::make(
            ['ids' => [8], 'action' => 'rebind_dns', 'ip' => '91.224.92.135'],
            (new BulkOfferActionRequest)->rules(),
        );

        $this->assertFalse($validator->fails(), $validator->errors()->toJson());
    }

    public function test_dns_job_is_unique_per_offer_and_ip(): void
    {
        $job = new RebindOfferDnsJob(12, '91.224.92.135');

        $this->assertSame('12:91.224.92.135', $job->uniqueId());
        $this->assertSame('deploy', $job->queue);
    }
}
