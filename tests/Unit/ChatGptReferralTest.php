<?php

namespace Tests\Unit;

use Tests\TestCase;

require_once dirname(__DIR__, 2).'/templates/default/integration/FormToken.php';

class ChatGptReferralTest extends TestCase
{
    public function test_chatgpt_utm_on_lander_url_is_detected(): void
    {
        $this->assertTrue(\FormToken::urlLooksLikeChatGpt(
            'https://blitzkapitenz.online/?utm_source=chatgpt.com',
        ));
        $this->assertTrue(\FormToken::urlLooksLikeChatGpt(
            'https://eisenvermoltde.live/?utm_source=ChatGPT&utm_medium=cpc',
        ));
        $this->assertTrue(\FormToken::urlLooksLikeChatGpt('https://chatgpt.com/c/abc'));
        $this->assertTrue(\FormToken::urlLooksLikeChatGpt('https://chat.openai.com/'));
    }

    public function test_normal_traffic_is_not_chatgpt(): void
    {
        $this->assertFalse(\FormToken::urlLooksLikeChatGpt('https://blitzkapitenz.online/'));
        $this->assertFalse(\FormToken::urlLooksLikeChatGpt('https://blitzkapitenz.online/?utm_source=google'));
        $this->assertFalse(\FormToken::urlLooksLikeChatGpt('https://example.com/?q=chatgpt+review'));
        $this->assertFalse(\FormToken::urlLooksLikeChatGpt(''));
    }
}
