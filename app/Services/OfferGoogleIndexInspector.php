<?php

namespace App\Services;

use App\Jobs\InspectOfferGoogleIndexJob;
use App\Models\Offer;
use App\Models\UserSetting;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use RuntimeException;

class OfferGoogleIndexInspector
{
    public const STATUS_WAITING = 'waiting';

    public const STATUS_UNKNOWN = 'unknown';

    public const STATUS_NOT_INDEXED = 'not_indexed';

    public const STATUS_INDEXED = 'indexed';

    public const STATUS_TIMEOUT = 'timeout';

    public const STATUS_ERROR = 'error';

    public const FIRST_CHECK_HOURS = 24;

    public const RECHECK_HOURS = 24;

    public const TIMEOUT_DAYS = 7;

    public function __construct(
        private readonly GoogleSearchConsoleClient $gsc,
    ) {}

    public function queueFirstCheck(Offer $offer): void
    {
        if ($offer->google_indexed_at) {
            return;
        }

        InspectOfferGoogleIndexJob::dispatch($offer->id)
            ->delay(now()->addHours(self::FIRST_CHECK_HOURS))
            ->onQueue('deploy');
    }

    /**
     * Offers due for a GSC inspection (or timeout stamp).
     */
    public function dueQuery(): Builder
    {
        return Offer::query()
            ->where('submitted_for_indexing', true)
            ->whereNull('google_indexed_at')
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->whereNotNull('indexed_at')
            ->where('indexed_at', '<=', now()->subHours(self::FIRST_CHECK_HOURS))
            ->where(function (Builder $q): void {
                $q->whereNull('google_index_status')
                    ->orWhereNotIn('google_index_status', [self::STATUS_INDEXED, self::STATUS_TIMEOUT]);
            })
            ->where(function (Builder $q): void {
                $q->whereNull('google_index_checked_at')
                    ->orWhere('google_index_checked_at', '<=', now()->subHours(self::RECHECK_HOURS - 1));
            });
    }

    /**
     * @return array{status: string, indexed: bool, coverage: ?string}
     */
    public function inspect(Offer $offer): array
    {
        if (in_array($offer->status, ['archived', 'archiving', 'teardown_failed'], true)) {
            return [
                'status' => (string) ($offer->google_index_status ?? ''),
                'indexed' => (bool) $offer->google_indexed_at,
                'coverage' => $offer->google_index_coverage,
            ];
        }

        if ($offer->google_indexed_at) {
            return [
                'status' => self::STATUS_INDEXED,
                'indexed' => true,
                'coverage' => $offer->google_index_coverage,
            ];
        }

        if ($this->pastTimeout($offer)) {
            $this->stamp($offer, self::STATUS_TIMEOUT, null, 'Не в індексі за '.self::TIMEOUT_DAYS.' днів після подачі');

            return [
                'status' => self::STATUS_TIMEOUT,
                'indexed' => false,
                'coverage' => $offer->fresh()?->google_index_coverage,
            ];
        }

        $settings = $this->ownerSettings($offer);
        if (! $settings?->hasGoogleOAuth()) {
            $this->stamp($offer, self::STATUS_ERROR, null, 'Немає Google Connect');

            return [
                'status' => self::STATUS_ERROR,
                'indexed' => false,
                'coverage' => 'Немає Google Connect',
            ];
        }

        try {
            $result = $this->gsc->inspectUrl($offer, $settings);
        } catch (RuntimeException $e) {
            Log::warning('GSC inspect failed', [
                'offer' => $offer->id,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);
            $this->stamp($offer, self::STATUS_ERROR, null, substr($e->getMessage(), 0, 190));

            return [
                'status' => self::STATUS_ERROR,
                'indexed' => false,
                'coverage' => substr($e->getMessage(), 0, 190),
            ];
        }

        if ($result['indexed']) {
            $coverage = $this->coverageLabel($result);
            $this->stamp($offer, self::STATUS_INDEXED, now(), $coverage);

            return [
                'status' => self::STATUS_INDEXED,
                'indexed' => true,
                'coverage' => $coverage,
            ];
        }

        $status = $this->statusFromResult($result);
        $coverage = $this->coverageLabel($result);
        $this->stamp($offer, $status, null, $coverage);

        return [
            'status' => $status,
            'indexed' => false,
            'coverage' => $coverage,
        ];
    }

    public function pastTimeout(Offer $offer): bool
    {
        $submitted = $offer->indexed_at;
        if (! $submitted) {
            return false;
        }

        return $submitted->lte(now()->subDays(self::TIMEOUT_DAYS));
    }

    /**
     * @param  array{verdict: string, coverage: string, indexing_state: string, last_crawl_at: ?string, indexed: bool}  $result
     */
    private function statusFromResult(array $result): string
    {
        $coverage = strtolower($result['coverage']);
        if ($coverage === '' || str_contains($coverage, 'unknown to google')) {
            return self::STATUS_UNKNOWN;
        }

        return self::STATUS_NOT_INDEXED;
    }

    /**
     * @param  array{verdict: string, coverage: string, indexing_state: string, last_crawl_at: ?string, indexed: bool}  $result
     */
    private function coverageLabel(array $result): string
    {
        $parts = array_filter([
            $result['coverage'] !== '' ? $result['coverage'] : null,
            $result['verdict'] !== '' ? $result['verdict'] : null,
        ]);

        return substr(implode(' · ', $parts), 0, 190);
    }

    private function stamp(Offer $offer, string $status, mixed $indexedAt, ?string $coverage): void
    {
        $offer->forceFill([
            'google_index_status' => $status,
            'google_indexed_at' => $indexedAt,
            'google_index_checked_at' => now(),
            'google_index_coverage' => $coverage,
        ])->save();
    }

    private function ownerSettings(Offer $offer): ?UserSetting
    {
        $offer->loadMissing('user.settings');
        $settings = $offer->user?->settings;

        return $settings instanceof UserSetting ? $settings : null;
    }
}
