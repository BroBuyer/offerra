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

    public function test_keitaro_stub_disables_tracker_and_reuses_click_id(): void
    {
        $json = $this->landerEval(
            '$_GET["subid"] = "abc12345def67890";'
            .'echo json_encode(['
            .'  "enabled" => keitaro_is_enabled(),'
            .'  "track" => keitaro_should_track(),'
            .'  "subid" => keitaro_subid(),'
            .'  "click" => offer_click_id(),'
            .']);'
        );
        $data = json_decode($json, true);

        $this->assertIsArray($data);
        $this->assertFalse($data['enabled']);
        $this->assertFalse($data['track']);
        $this->assertSame('abc12345def67890', $data['subid']);
        $this->assertSame('abc12345def67890', $data['click']);
    }

    public function test_lead_runtime_push_covers_keitaro_stub_and_processor(): void
    {
        $files = app(\App\Services\DeployService::class)->leadRuntimeRelativeFiles();

        $this->assertContains('includes/config.php', $files);
        $this->assertContains('includes/helpers.php', $files);
        $this->assertContains('includes/keitaro.php', $files);
        $this->assertContains('integration/LeadProcessor.php', $files);
        $this->assertContains('integration/send.php', $files);
    }

    public function test_helpers_do_not_remember_click_on_send_include(): void
    {
        foreach ($this->rootTemplateHelpers() as $helpers) {
            $src = file_get_contents($helpers);
            $this->assertIsString($src);
            $this->assertStringContainsString('function offer_click_id_remember', $src);
            $this->assertStringNotContainsString('offer_click_id_remember();', $src, $helpers);
        }
    }

    public function test_processor_remembers_click_only_after_protections(): void
    {
        foreach ($this->rootTemplateProcessors() as $processor) {
            $src = file_get_contents($processor);
            $this->assertIsString($src);
            $this->assertMatchesRegularExpression(
                '/shouldSilentDrop\\(\\$spamReason\\).*?offer_click_id_remember\\(\\);.*?buildCrmPayload/s',
                $src,
                $processor,
            );
        }
    }

    /** @return list<string> */
    private function rootTemplateHelpers(): array
    {
        $dir = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'templates';
        $out = [];
        foreach (scandir($dir) ?: [] as $name) {
            if ($name === '.' || $name === '..') {
                continue;
            }
            $helpers = $dir.DIRECTORY_SEPARATOR.$name.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'helpers.php';
            if (is_file($helpers)) {
                $out[] = $helpers;
            }
        }

        $this->assertNotEmpty($out);

        return $out;
    }

    /** @return list<string> */
    private function rootTemplateProcessors(): array
    {
        $dir = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'templates';
        $out = [];
        foreach (scandir($dir) ?: [] as $name) {
            if ($name === '.' || $name === '..') {
                continue;
            }
            $processor = $dir.DIRECTORY_SEPARATOR.$name.DIRECTORY_SEPARATOR.'integration'.DIRECTORY_SEPARATOR.'LeadProcessor.php';
            if (is_file($processor)) {
                $out[] = $processor;
            }
        }

        $this->assertNotEmpty($out);

        return $out;
    }

    private function landerEval(string $code): string
    {
        $helpers = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'default'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'helpers.php';
        $stub = app(\App\Services\OfferGenerator::class)->keitaroCompatStubSource();
        $stubFile = tempnam(sys_get_temp_dir(), 'kts');
        file_put_contents($stubFile, $stub);
        $script = "<?php\n"
            ."define('SITE_NAME', 'ClickIdBrand');\n"
            ."define('SITE_URL', 'https://click-id.test');\n"
            ."define('SITE_LANG', 'en');\n"
            .'require '.var_export($helpers, true).";\n"
            .'require '.var_export($stubFile, true).";\n"
            .$code
            ."\n";

        $tmp = tempnam(sys_get_temp_dir(), 'cid');
        file_put_contents($tmp, $script);

        $cmd = escapeshellarg(PHP_BINARY).' '.escapeshellarg($tmp);
        $output = (string) shell_exec($cmd.' 2>&1');
        @unlink($tmp);
        @unlink($stubFile);

        return trim($output);
    }
}
