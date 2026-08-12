<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use InvalidArgumentException;

class TemplateCatalog
{
    public function __construct(
        private readonly string $templatesPath,
    ) {}

    /**
     * @return list<string>
     */
    public function ids(): array
    {
        return array_column($this->forWizard(), 'id');
    }

    /**
     * @return list<array{id: string, name: string, languages: list<array{code: string, name: string}>}>
     */
    public function forWizard(): array
    {
        $templates = [];

        foreach ($this->discoverTemplateIds() as $id) {
            $templates[] = [
                'id' => $id,
                'name' => $id,
                'languages' => $this->languagesFor($id),
            ];
        }

        return $templates;
    }

    /**
     * @return list<array{id: string, name: string, description: string, pages: string, active: bool}>
     */
    public function forLibrary(): array
    {
        $items = [];

        foreach ($this->discoverTemplateIds() as $id) {
            $langs = $this->languagesFor($id);

            $items[] = [
                'id' => $id,
                'name' => $id,
                'description' => $this->libraryDescription($id, $langs),
                'languages' => $langs,
                'pages' => 'index, product, offer, faq, contacts, sign, thanks',
                'preview_url' => route('templates.preview', ['template' => $id]).'/',
                'active' => true,
            ];
        }

        return $items;
    }

    /**
     * @return list<array{code: string, name: string}>
     */
    public function languagesFor(string $templateId): array
    {
        $languages = [];

        foreach (array_keys($this->templateLanguageSources($templateId)) as $code) {
            $languages[] = [
                'code' => $code,
                'name' => $this->languageLabel($code),
            ];
        }

        usort($languages, fn (array $a, array $b) => strcmp($a['code'], $b['code']));

        return $languages;
    }

    /**
     * @return list<string>
     */
    public function languageCodesFor(string $templateId): array
    {
        return array_column($this->languagesFor($templateId), 'code');
    }

    public function resolveSourcePath(string $templateId, string $lang): string
    {
        $lang = strtolower($lang);
        $sources = $this->templateLanguageSources($templateId);

        if (isset($sources[$lang]) && File::isDirectory($sources[$lang])) {
            return $sources[$lang];
        }

        $templatePath = $this->templatePath($templateId);

        if ($templatePath && File::isFile($templatePath.DIRECTORY_SEPARATOR.'index.php')) {
            return $templatePath;
        }

        throw new InvalidArgumentException(
            "Мова «{$lang}» недоступна для шаблону «{$templateId}».",
        );
    }

    public function label(string $templateId): string
    {
        return $templateId;
    }

    /**
     * Filesystem root used for /preview/{template}/… rendering.
     * Prefer template root when it has index.php; otherwise the requested
     * (or first available) language under langs/.
     */
    public function previewRootPath(string $templateId, ?string $lang = null): string
    {
        $templatePath = $this->templatePath($templateId);

        if (! $templatePath) {
            throw new InvalidArgumentException("Шаблон «{$templateId}» не знайдено.");
        }

        $lang = $lang !== null ? strtolower($lang) : null;
        $codes = $this->languageCodesFor($templateId);

        if ($lang !== null && $lang !== '' && in_array($lang, $codes, true)) {
            return $this->resolveSourcePath($templateId, $lang);
        }

        if (File::isFile($templatePath.DIRECTORY_SEPARATOR.'index.php')) {
            return $templatePath;
        }

        if ($codes === []) {
            return $templatePath;
        }

        return $this->resolveSourcePath($templateId, $codes[0]);
    }

    /**
     * @return list<string>
     */
    private function discoverTemplateIds(): array
    {
        if (! File::isDirectory($this->templatesPath)) {
            return [];
        }

        $ids = [];

        foreach (File::directories($this->templatesPath) as $directory) {
            $id = basename($directory);

            if (str_starts_with($id, '.')) {
                continue;
            }

            $ids[] = $id;
        }

        sort($ids);

        return $ids;
    }

    /**
     * @return array<string, string> lang code => folder path (templates only)
     */
    private function templateLanguageSources(string $templateId): array
    {
        $sources = [];
        $templatePath = $this->templatePath($templateId);

        if ($templatePath && File::isDirectory($templatePath)) {
            $langsDir = $templatePath.DIRECTORY_SEPARATOR.'langs';

            if (File::isDirectory($langsDir)) {
                foreach (File::directories($langsDir) as $directory) {
                    $code = strtolower(basename($directory));

                    if (preg_match('/^[a-z]{2}$/', $code)) {
                        $sources[$code] = $directory;
                    }
                }
            }

            $rootLang = $this->readSiteLang($templatePath);

            if ($rootLang && ! isset($sources[$rootLang])) {
                $sources[$rootLang] = $templatePath;
            }
        }

        return $sources;
    }

    private function templatePath(string $templateId): ?string
    {
        $path = rtrim($this->templatesPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$templateId;

        return File::isDirectory($path) ? $path : null;
    }

    private function readSiteLang(string $directory): ?string
    {
        $configPath = $directory.'/includes/config.php';

        if (! File::exists($configPath)) {
            return null;
        }

        if (preg_match("/define\s*\(\s*'SITE_LANG'\s*,\s*'([a-z]{2})'\s*\)/i", File::get($configPath), $matches)) {
            return strtolower($matches[1]);
        }

        return null;
    }

    private function languageLabel(string $code): string
    {
        foreach (config('offerra.languages', []) as $language) {
            if ($language['code'] === $code) {
                return $language['name'];
            }
        }

        return strtoupper($code);
    }

    /**
     * @param  list<array{code: string, name: string}>  $languages
     */
    private function libraryDescription(string $templateId, array $languages): string
    {
        $codes = array_column($languages, 'code');

        if ($codes === []) {
            return 'PHP-ленд · templates/'.$templateId.'/ · мови не знайдено';
        }

        $labels = array_map(
            fn (array $lang) => $lang['name'].' ('.$lang['code'].')',
            $languages,
        );

        return 'PHP-ленд · '.count($codes).' '.(count($codes) === 1 ? 'мова' : 'мови').': '.implode(', ', $labels);
    }
}
