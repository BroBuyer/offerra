<?php

namespace App\Services;

use App\Models\Offer;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use InvalidArgumentException;

class OfferVerificationFileService
{
    public function __construct(
        private readonly string $offersPath,
    ) {}

    public function isValidFilename(string $filename): bool
    {
        return (bool) preg_match('/^google[a-z0-9]+\.html$/i', $filename);
    }

    /** Нормалізує ім'я файлу (прибирає (1), (2) від браузера тощо). */
    public function normalizeFilename(string $filename): ?string
    {
        $filename = strtolower(basename($filename));
        $filename = preg_replace('/ \(\d+\)(?=\.html$)/', '', $filename) ?? $filename;

        if ($this->isValidFilename($filename)) {
            return $filename;
        }

        if (preg_match('/(google[a-z0-9]+\.html)/i', $filename, $matches)) {
            $candidate = strtolower($matches[1]);

            if ($this->isValidFilename($candidate)) {
                return $candidate;
            }
        }

        return null;
    }

    public function storageDirectory(Offer $offer): string
    {
        return storage_path('app/offer-verification/'.$offer->id);
    }

    public function storagePath(Offer $offer): ?string
    {
        $filename = trim((string) $offer->verification_filename);

        if ($filename === '') {
            return null;
        }

        return $this->storageDirectory($offer).DIRECTORY_SEPARATOR.$filename;
    }

    public function store(Offer $offer, UploadedFile $file): string
    {
        $canonicalName = $this->normalizeFilename($file->getClientOriginalName());

        if ($canonicalName === null) {
            throw new InvalidArgumentException(
                'Очікується файл Google Search Console: googleXXXXXXXX.html',
            );
        }

        if ($file->getSize() > 65536) {
            throw new InvalidArgumentException('Файл верифікації занадто великий (макс. 64 KB).');
        }

        $contents = (string) file_get_contents($file->getRealPath());

        if ($contents === '' || ! str_contains($contents, 'google-site-verification')) {
            throw new InvalidArgumentException('Файл не схожий на HTML-верифікацію Google Search Console.');
        }

        $this->deleteStoredFile($offer);

        $directory = $this->storageDirectory($offer);
        File::ensureDirectoryExists($directory);
        File::put($directory.DIRECTORY_SEPARATOR.$canonicalName, $contents);

        $offer->update(['verification_filename' => $canonicalName]);
        $offer->refresh();

        $this->syncToOfferFolder($offer);

        return $canonicalName;
    }

    public function delete(Offer $offer): void
    {
        $this->deleteStoredFile($offer);
        $this->deleteFromOfferFolder($offer);

        $offer->update(['verification_filename' => null]);
    }

    public function syncToOfferFolder(Offer $offer): void
    {
        $storagePath = $this->storagePath($offer);

        if ($storagePath === null || ! File::isFile($storagePath)) {
            return;
        }

        $offerRoot = rtrim($this->offersPath, DIRECTORY_SEPARATOR)
            .DIRECTORY_SEPARATOR.$offer->folder;

        if (! File::isDirectory($offerRoot)) {
            return;
        }

        $filename = (string) $offer->verification_filename;
        $this->deleteOtherVerificationFiles($offerRoot, $filename);
        File::copy($storagePath, $offerRoot.DIRECTORY_SEPARATOR.$filename);
    }

    public function publicUrl(Offer $offer): ?string
    {
        $filename = trim((string) $offer->verification_filename);

        if ($filename === '') {
            return null;
        }

        return 'https://'.$offer->domain.'/'.$filename;
    }

    private function deleteStoredFile(Offer $offer): void
    {
        $directory = $this->storageDirectory($offer);

        if (! File::isDirectory($directory)) {
            return;
        }

        File::deleteDirectory($directory);
    }

    private function deleteFromOfferFolder(Offer $offer): void
    {
        $offerRoot = rtrim($this->offersPath, DIRECTORY_SEPARATOR)
            .DIRECTORY_SEPARATOR.$offer->folder;

        if (! File::isDirectory($offerRoot)) {
            return;
        }

        $filename = trim((string) $offer->verification_filename);

        if ($filename !== '' && File::isFile($offerRoot.DIRECTORY_SEPARATOR.$filename)) {
            File::delete($offerRoot.DIRECTORY_SEPARATOR.$filename);
        }

        $this->deleteOtherVerificationFiles($offerRoot);
    }

    private function deleteOtherVerificationFiles(string $offerRoot, ?string $keepFilename = null): void
    {
        foreach (File::files($offerRoot) as $file) {
            $name = $file->getFilename();

            if ($this->normalizeFilename($name) !== null && $name !== $keepFilename) {
                File::delete($file->getPathname());
            }
        }
    }
}
