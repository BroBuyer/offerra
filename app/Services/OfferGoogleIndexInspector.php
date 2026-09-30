<?php

namespace App\Services;

use App\Jobs\InspectOfferGoogleIndexJob;
use App\Models\GoogleAccount;
use App\Models\Offer;
use App\Models\UserSetting;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
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
                    ->orWhereNotIn('google_index_status', [self::STATUS_INDEXED, self::STATUS_TIMEOUT])
                    ->orWhere(function (Builder $retry): void {
                        $retry->where('google_index_status', self::STATUS_TIMEOUT)
                            ->whereExists(function ($sub): void {
                                $sub->from('google_accounts')
                                    ->whereColumn('google_accounts.user_id', 'offers.user_id')
                                    ->where(function ($when): void {
                                        $when->whereNull('offers.google_index_checked_at')
                                            ->orWhereColumn('google_accounts.connected_at', '>', 'offers.google_index_checked_at');
                                    });
                            });
                    });
            })
            ->where(function (Builder $q): void {
                $q->whereNull('google_index_checked_at')
                    ->orWhere('google_index_checked_at', '<=', now()->subHours(self::RECHECK_HOURS - 1))
                    ->orWhereExists(function ($sub): void {
                        $sub->from('google_accounts')
                            ->whereColumn('google_accounts.user_id', 'offers.user_id')
                            ->where(function ($when): void {
                                $when->whereNull('offers.google_index_checked_at')
                                    ->orWhereColumn('google_accounts.connected_at', '>', 'offers.google_index_checked_at');
                            });
                    });
            });
    }

    /**
     * Timed-out offers that were submitted but never confirmed in the index.
     */
    public function timeoutQuery(): Builder
    {
        return Offer::query()
            ->where('submitted_for_indexing', true)
            ->whereNull('google_indexed_at')
            ->where('google_index_status', self::STATUS_TIMEOUT)
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed']);
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

        $accounts = $this->inspectAccounts($offer);
        if ($accounts->isEmpty()) {
            $this->stamp($offer, self::STATUS_ERROR, null, 'Немає Google Connect');

            return [
                'status' => self::STATUS_ERROR,
                'indexed' => false,
                'coverage' => 'Немає Google Connect',
            ];
        }

        $ownedResult = null;
        $ownedAccount = null;
        $errors = [];

        foreach ($accounts as $account) {
            try {
                $result = $this->gsc->inspectUrl($offer, $account);
            } catch (RuntimeException $e) {
                Log::warning('GSC inspect failed', [
                    'offer' => $offer->id,
                    'domain' => $offer->domain,
                    'email' => $account->email,
                    'error' => $e->getMessage(),
                ]);

                if ($this->gsc->isNotOwnerError($e)) {
                    $errors[] = $account->email.': не власник property';
                    continue;
                }

                $errors[] = $account->email.': '.substr($e->getMessage(), 0, 120);
                continue;
            }

            if ($result['indexed']) {
                $coverage = $this->coverageLabel($result, $account);
                $this->stamp($offer, self::STATUS_INDEXED, now(), $coverage, $account);

                return [
                    'status' => self::STATUS_INDEXED,
                    'indexed' => true,
                    'coverage' => $coverage,
                ];
            }

            if (! $ownedResult) {
                $ownedResult = $result;
                $ownedAccount = $account;
            }
        }

        if ($ownedResult && $ownedAccount) {
            if ($this->pastTimeout($offer)) {
                $this->stamp(
                    $offer,
                    self::STATUS_TIMEOUT,
                    null,
                    'Не в індексі за '.self::TIMEOUT_DAYS.' днів після подачі',
                    $ownedAccount,
                );

                return [
                    'status' => self::STATUS_TIMEOUT,
                    'indexed' => false,
                    'coverage' => 'Не в індексі за '.self::TIMEOUT_DAYS.' днів після подачі',
                ];
            }

            $status = $this->statusFromResult($ownedResult);
            $coverage = $this->coverageLabel($ownedResult, $ownedAccount);
            $this->stamp($offer, $status, null, $coverage, $ownedAccount);

            return [
                'status' => $status,
                'indexed' => false,
                'coverage' => $coverage,
            ];
        }

        $coverage = $errors !== []
            ? substr(implode('; ', $errors), 0, 190)
            : 'Жоден підключений Google не бачить цей домен';
        $this->stamp($offer, self::STATUS_ERROR, null, $coverage);

        return [
            'status' => self::STATUS_ERROR,
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
    private function coverageLabel(array $result, ?GoogleAccount $account = null): string
    {
        $parts = array_filter([
            $result['coverage'] !== '' ? $result['coverage'] : null,
            $result['verdict'] !== '' ? $result['verdict'] : null,
            $account?->email,
        ]);

        return substr(implode(' · ', $parts), 0, 190);
    }

    private function stamp(Offer $offer, string $status, mixed $indexedAt, ?string $coverage, ?GoogleAccount $account = null): void
    {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        if ($account) {
            $gsc = is_array($meta['gsc'] ?? null) ? $meta['gsc'] : [];
            $gsc['email'] = $account->email;
            $gsc['google_account_id'] = $account->id;
            $meta['gsc'] = $gsc;
        }

        $offer->forceFill([
            'google_index_status' => $status,
            'google_indexed_at' => $indexedAt,
            'google_index_checked_at' => now(),
            'google_index_coverage' => $coverage,
            'infra_meta' => $meta,
        ])->save();
    }

    /**
     * @return Collection<int, GoogleAccount>
     */
    private function inspectAccounts(Offer $offer): Collection
    {
        $offer->loadMissing(['user.googleAccounts', 'user.settings']);
        $accounts = $offer->user?->googleAccounts ?? collect();
        if ($accounts instanceof Collection && $accounts->isNotEmpty()) {
            $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
            $gsc = is_array($meta['gsc'] ?? null) ? $meta['gsc'] : [];
            $pinnedId = (int) ($gsc['google_account_id'] ?? 0);
            $pinnedEmail = strtolower(trim((string) ($gsc['email'] ?? '')));

            return $accounts
                ->filter(fn (GoogleAccount $account) => filled($account->refresh_token))
                ->sortBy(function (GoogleAccount $account) use ($pinnedId, $pinnedEmail) {
                    if ($pinnedId > 0 && $account->id === $pinnedId) {
                        return 0;
                    }
                    if ($pinnedEmail !== '' && strtolower((string) $account->email) === $pinnedEmail) {
                        return 1;
                    }
                    if ($account->is_primary) {
                        return 2;
                    }

                    return 3;
                })
                ->values();
        }

        $settings = $offer->user?->settings;
        $primary = $settings instanceof UserSetting ? $settings->primaryGoogleAccount() : null;

        return $primary ? collect([$primary]) : collect();
    }
}
