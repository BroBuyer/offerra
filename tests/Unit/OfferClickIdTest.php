<?php

namespace Tests\Unit;

use Tests\TestCase;

class OfferClickIdTest extends TestCase
{
    public function test_generates_24_char_hex_click_id(): void
    {
        $id = $this->landerEval('echo offer_click_id();');

        $this->assertMatchesRegularExpression('/^[a-f0-9]{24}$/', $id);
    }

    public function test_honors_inbound_subid(): void
    {
        $id = $this->landerEval('$_GET["subid"] = "1g6fae0.1277.r71pg"; echo offer_click_id();');

        $this->assertSame('1g6fae0.1277.r71pg', $id);
    }

    public function test_rejects_garbage_and_falls_back_to_generated(): void
    {
        $id = $this->landerEval('$_GET["subid"] = "<script>"; echo offer_click_id();');

        $this->assertMatchesRegularExpression('/^[a-f0-9]{24}$/', $id);
    }

    public function test_normalize_lead_writes_aff_sub3_only(): void
    {
        $processor = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'default'.DIRECTORY_SEPARATOR.'integration'.DIRECTORY_SEPARATOR.'LeadProcessor.php';
        $json = $this->landerEval(
            'require '.var_export($processor, true).';'
            .'$_GET["subid"] = "abc12345def67890";'
            .'$lead = LeadProcessor::normalizeLead(["email" => "a@b.test"]);'
            .'echo json_encode($lead);'
        );
        $lead = json_decode($json, true);

        $this->assertIsArray($lead);
        $this->assertSame('abc12345def67890', $lead['aff_sub3']);
        $this->assertArrayNotHasKey('aff_sub4', $lead);
    }

    private function landerEval(string $code): string
    {
        $helpers = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'default'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'helpers.php';
        $script = "<?php\n"
            ."define('SITE_NAME', 'ClickIdBrand');\n"
            ."define('SITE_URL', 'https://click-id.test');\n"
            ."define('SITE_LANG', 'en');\n"
            .'require '.var_export($helpers, true).";\n"
            .$code
            ."\n";

        $tmp = tempnam(sys_get_temp_dir(), 'cid');
        file_put_contents($tmp, $script);

        $cmd = escapeshellarg(PHP_BINARY).' '.escapeshellarg($tmp);
        $output = (string) shell_exec($cmd.' 2>&1');
        @unlink($tmp);

        return trim($output);
    }
}
