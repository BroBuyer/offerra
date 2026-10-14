<?php

namespace Tests\Unit;

use App\Support\TelegramLeadDumpParser;
use Tests\TestCase;

class TelegramLeadDumpParserTest extends TestCase
{
    public function test_parses_plain_telegram_dump(): void
    {
        $dump = <<<'TXT'
Name: Lucia Braschi
Email: lucia.braschi@icloud.com
Phone: +393922333949

Affiliate: EGO
Funnel: Vinci AI
Offer: Vinci AI
Domain: vinci-ai.org (https://vinci-ai.org/)
Country (offer): IT
Country (IP): IT
Spam reason: —
KT detail: —
IP: 5.91.126.157
Language: it
SubID: 1g6fae0.1277.r71pg
TXT;

        $parsed = (new TelegramLeadDumpParser)->parse($dump);

        $this->assertSame('Lucia', $parsed['first_name']);
        $this->assertSame('Braschi', $parsed['last_name']);
        $this->assertSame('lucia.braschi@icloud.com', $parsed['email']);
        $this->assertSame('+393922333949', $parsed['phone']);
        $this->assertSame('EGO', $parsed['affiliate']);
        $this->assertSame('Vinci AI', $parsed['funnel']);
        $this->assertSame('vinci-ai.org', $parsed['domain']);
        $this->assertSame('IT', $parsed['country']);
        $this->assertSame('5.91.126.157', $parsed['ip']);
        $this->assertSame('it', $parsed['language']);
        $this->assertSame('1g6fae0.1277.r71pg', $parsed['subid']);
    }

    public function test_parses_html_telegram_dump(): void
    {
        $dump = '<b>Name:</b> Lucia Braschi<br><b>Email:</b> lucia.braschi@icloud.com<br>'
            .'<b>Domain:</b> <a href="https://vinci-ai.org/">vinci-ai.org</a>';

        $parsed = (new TelegramLeadDumpParser)->parse($dump);

        $this->assertSame('Lucia', $parsed['first_name']);
        $this->assertSame('lucia.braschi@icloud.com', $parsed['email']);
        $this->assertSame('vinci-ai.org', $parsed['domain']);
    }
}
