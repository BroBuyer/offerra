<?php

namespace Tests\Unit;

use App\Services\OfferGscSubmitter;
use Tests\TestCase;

class OfferGscRetryableErrorTest extends TestCase
{
    public function test_quota_429_is_retryable(): void
    {
        $message = 'Search Console sites.add failed (HTTP 429): Quota exceeded for quota metric \'Low rate user requests limit\'';

        $this->assertTrue(OfferGscSubmitter::isRetryableError($message));
        $this->assertSame(
            'GSC ліміт запитів — повторюємо автоматично',
            OfferGscSubmitter::retryableErrorLabel($message),
        );
    }

    public function test_https_not_live_is_retryable(): void
    {
        $this->assertTrue(OfferGscSubmitter::isRetryableError('HTTPS is not live yet for example.com'));
    }

    public function test_permission_error_is_not_retryable(): void
    {
        $this->assertFalse(OfferGscSubmitter::isRetryableError(
            'Search Console sites.add failed (HTTP 403): You do not own this site',
        ));
    }
}
