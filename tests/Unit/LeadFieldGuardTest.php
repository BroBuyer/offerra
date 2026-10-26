<?php

namespace Tests\Unit;

use Tests\TestCase;

require_once dirname(__DIR__, 2).'/templates/default/integration/LeadFieldGuard.php';

class LeadFieldGuardTest extends TestCase
{
    public function test_this_spam_payload_fails_on_phone(): void
    {
        $this->assertSame(
            'Invalid phone',
            \LeadFieldGuard::error('Kiehn', 'Kiehn', 'camille.kiehn13@mdhmx.com', '13'),
        );
    }

    public function test_short_and_long_phone_are_rejected(): void
    {
        $this->assertSame('length', \LeadFieldGuard::phoneError('1234567'));
        $this->assertSame('length', \LeadFieldGuard::phoneError('+1234567890123456'));
        $this->assertNull(\LeadFieldGuard::phoneError('+34612345678'));
        $this->assertNull(\LeadFieldGuard::phoneError('34612345678'));
    }

    public function test_name_word_and_length_limits(): void
    {
        $this->assertSame('length', \LeadFieldGuard::nameError('A', 4));
        $this->assertSame('words', \LeadFieldGuard::nameError('One Two Three Four Five', 4));
        $this->assertSame('digits', \LeadFieldGuard::nameError('John2', 4));
        $this->assertNull(\LeadFieldGuard::nameError('Kiehn', 4));
        $this->assertNull(\LeadFieldGuard::nameError("O'Neill", 5));
        $this->assertNull(\LeadFieldGuard::nameError('van der Berg', 5));
        $this->assertNull(\LeadFieldGuard::nameError('吴', 4));
    }

    public function test_email_limits(): void
    {
        $this->assertSame('format', \LeadFieldGuard::emailError('not-an-email'));
        $this->assertSame('reserved', \LeadFieldGuard::emailError('a@b.example'));
        $this->assertSame('length', \LeadFieldGuard::emailError('a@b.c'));
        $this->assertNull(\LeadFieldGuard::emailError('camille.kiehn13@mdhmx.com'));
    }

    public function test_valid_lead_passes(): void
    {
        $this->assertNull(\LeadFieldGuard::error(
            'Maria',
            'Garcia',
            'maria.garcia@gmail.com',
            '+34612345678',
        ));
    }
}
