<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
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
        $canonicalName = $this->validatedVerificationFile($file);

        $this->deleteStoredFile($offer);

        $directory = $this->storageDirectory($offer);
        File::ensureDirectoryExists($directory);
        File::put($directory.DIRECTORY_SEPARATOR.$canonicalName, $this->readVerificationContents($file));

        $offer->update(['verification_filename' => $canonicalName]);
        $offer->refresh();

        $this->syncToOfferFolder($offer);

        return $canonicalName;
    }

    public function userStorageDirectory(User $user): string
    {
        return storage_path('app/user-verification/'.$user->id);
    }

    public function userStoragePath(UserSetting $settings): ?string
    {
        $filename = trim((string) $settings->gsc_verification_filename);

        if ($filename === '') {
            return null;
        }

        return $this->userStorageDirectory($settings->user).DIRECTORY_SEPARATOR.$filename;
    }

    public function storeForUser(UserSetting $settings, UploadedFile $file): string
    {
        $canonicalName = $this->validatedVerificationFile($file);
        $settings->loadMissing('user');

        $directory = $this->userStorageDirectory($settings->user);
        File::deleteDirectory($directory);
        File::ensureDirectoryExists($directory);
        File::put($directory.DIRECTORY_SEPARATOR.$canonicalName, $this->readVerificationContents($file));

        $settings->update(['gsc_verification_filename' => $canonicalName]);

        return $canonicalName;
    }

    public function deleteForUser(UserSetting $settings): void
    {
        $settings->loadMissing('user');
        $directory = $this->userStorageDirectory($settings->user);

        if (File::isDirectory($directory)) {
            File::deleteDirectory($directory);
        }

        $settings->update(['gsc_verification_filename' => null]);
    }

    public function applyFromUserSettings(Offer $offer): void
    {
        $offer->loadMissing('user.settings');
        $settings = $offer->user?->settings;
        $userPath = $settings ? $this->userStoragePath($settings) : null;

        if ($userPath === null || ! File::isFile($userPath)) {
            return;
        }

        $filename = trim((string) $settings->gsc_verification_filename);

        if ($filename === '') {
            return;
        }

        $this->deleteStoredFile($offer);

        $directory = $this->storageDirectory($offer);
        File::ensureDirectoryExists($directory);
        File::copy($userPath, $directory.DIRECTORY_SEPARATOR.$filename);

        if ($offer->verification_filename !== $filename) {
            $offer->update(['verification_filename' => $filename]);
            $offer->refresh();
        }
    }

    public function delete(Offer $offer): void
    {
        $this->deleteStoredFile($offer);
        $this->deleteFromOfferFolder($offer);

        $offer->update(['verification_filename' => null]);
    }

    public function syncToOfferFolder(Offer $offer): void
    {
        $this->applyFromUserSettings($offer);

        $storagePath = $this->storagePath($offer);

        if ($storagePath === null || ! File::isFile($storagePath)) {
            return;
        }

        $offerRoot = rtrim($this->offersPath, DIRECTORY_SEPARATOR)
            .DIRECTORY_SEPARATOR.$offer->folder;

        if (! File::isDirectory($offerRoot)) {
            try {
                $offerRoot = app(OfferGenerator::class)->ensureLocalFolder($offer);
            } catch (\Throwable) {
                return;
            }
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

    private function validatedVerificationFile(UploadedFile $file): string
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

        $contents = $this->readVerificationContents($file);

        if ($contents === '' || ! str_contains($contents, 'google-site-verification')) {
            throw new InvalidArgumentException('Файл не схожий на HTML-верифікацію Google Search Console.');
        }

        return $canonicalName;
    }

    private function readVerificationContents(UploadedFile $file): string
    {
        return (string) file_get_contents($file->getRealPath());
    }
}
