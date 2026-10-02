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
    public function inspect(Offer $offer, bool $force = false): array
    {
        if (in_array($offer->status, ['archived', 'archiving', 'teardown_failed'], true)) {
            return [
                'status' => (string) ($offer->google_index_status ?? ''),
                'indexed' => (bool) $offer->google_indexed_at,
                'coverage' => $offer->google_index_coverage,
            ];
        }

        if (! $force && $offer->google_indexed_at) {
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
        $unverified = [];
        $tried = 0;
        $storedSiteUrl = $this->storedSiteUrl($offer);

        foreach ($accounts as $account) {
            $tried++;
            $found = null;
            try {
                $found = $this->gsc->findSiteOnAccount($account, (string) $offer->domain, $storedSiteUrl);
            } catch (RuntimeException $e) {
                Log::warning('GSC sites.list failed', [
                    'offer' => $offer->id,
                    'domain' => $offer->domain,
                    'email' => $account->email,
                    'error' => $e->getMessage(),
                ]);
                $errors[] = $account->email.': '.$this->shortAccountError($e);
                continue;
            }

            if (! $found) {
                $errors[] = $account->email.': немає property';
                continue;
            }

            if (! GoogleSearchConsoleClient::canInspectPermission($found['permission'])) {
                $unverified[] = $account->email;
                continue;
            }

            $siteUrl = $found['site_url'];

            try {
                $result = $this->gsc->inspectUrl($offer, $account, $siteUrl);
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

                $errors[] = $account->email.': '.$this->shortAccountError($e);
                continue;
            }

            if ($result['indexed']) {
                $coverage = $this->coverageLabel($result, $account);
                $this->stamp($offer, self::STATUS_INDEXED, now(), $coverage, $account, $result['site_url'] ?? $siteUrl);

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
            $siteUrl = (string) ($ownedResult['site_url'] ?? '');
            if ($this->pastTimeout($offer)) {
                $this->stamp(
                    $offer,
                    self::STATUS_TIMEOUT,
                    null,
                    'Не в індексі за '.self::TIMEOUT_DAYS.' днів після подачі',
                    $ownedAccount,
                    $siteUrl !== '' ? $siteUrl : null,
                );

                return [
                    'status' => self::STATUS_TIMEOUT,
                    'indexed' => false,
                    'coverage' => 'Не в індексі за '.self::TIMEOUT_DAYS.' днів після подачі',
                ];
            }

            $status = $this->statusFromResult($ownedResult);
            $coverage = $this->coverageLabel($ownedResult, $ownedAccount);
            $this->stamp($offer, $status, null, $coverage, $ownedAccount, $siteUrl !== '' ? $siteUrl : null);

            return [
                'status' => $status,
                'indexed' => false,
                'coverage' => $coverage,
            ];
        }

        if ($unverified !== []) {
            $who = $this->shortEmailList($unverified);
            $coverage = 'Сайт у GSC не підтверджений ('.$who.'). Підключіть Google, який верифікував.';
            $this->stamp($offer, self::STATUS_ERROR, null, substr($coverage, 0, 190));

            return [
                'status' => self::STATUS_ERROR,
                'indexed' => false,
                'coverage' => substr($coverage, 0, 190),
            ];
        }

        $coverage = $tried > 0
            ? 'Жоден з '.$tried.' Google не має цей сайт у Search Console'
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
     * @param  array{verdict: string, coverage: string, indexing_state: string, last_crawl_at: ?string, indexed: bool, site_url?: string}  $result
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

    private function stamp(Offer $offer, string $status, mixed $indexedAt, ?string $coverage, ?GoogleAccount $account = null, ?string $siteUrl = null): void
    {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        if ($account) {
            $gsc = is_array($meta['gsc'] ?? null) ? $meta['gsc'] : [];
            $gsc['email'] = $account->email;
            $gsc['google_account_id'] = $account->id;
            if (is_string($siteUrl) && $siteUrl !== '') {
                $gsc['site_url'] = $siteUrl;
            }
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

    private function storedSiteUrl(Offer $offer): ?string
    {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $gsc = is_array($meta['gsc'] ?? null) ? $meta['gsc'] : [];
        $siteUrl = trim((string) ($gsc['site_url'] ?? ''));

        return $siteUrl !== '' ? $siteUrl : null;
    }

    private function shortAccountError(RuntimeException $e): string
    {
        return substr($e->getMessage(), 0, 80);
    }

    /**
     * @param  list<string>  $emails
     */
    private function shortEmailList(array $emails): string
    {
        $short = array_map(function (string $email): string {
            $at = strpos($email, '@');

            return $at === false ? $email : substr($email, 0, $at);
        }, $emails);

        return substr(implode(', ', $short), 0, 80);
    }

    /**
     * Owner accounts first (pinned / primary), then every other connected Google
     * in the panel — offers are often verified in Admin GSC even when the row is EGO.
     *
     * @return Collection<int, GoogleAccount>
     */
    private function inspectAccounts(Offer $offer): Collection
    {
        $offer->loadMissing(['user.googleAccounts', 'user.settings']);
        $owned = $this->sortOwnerAccounts($offer, $offer->user?->googleAccounts ?? collect());
        if ($owned->isEmpty()) {
            $settings = $offer->user?->settings;
            $primary = $settings instanceof UserSetting ? $settings->primaryGoogleAccount() : null;
            $owned = $primary ? collect([$primary]) : collect();
        }

        $extra = GoogleAccount::query()
            ->whereNotNull('refresh_token')
            ->when($owned->isNotEmpty(), fn ($query) => $query->whereNotIn('id', $owned->pluck('id')->all()))
            ->orderBy('user_id')
            ->orderBy('id')
            ->get()
            ->filter(fn (GoogleAccount $account) => filled($account->refresh_token));

        return $owned->concat($extra)->values();
    }

    /**
     * @param  Collection<int, GoogleAccount>|iterable<int, GoogleAccount>  $accounts
     * @return Collection<int, GoogleAccount>
     */
    private function sortOwnerAccounts(Offer $offer, mixed $accounts): Collection
    {
        $collection = $accounts instanceof Collection ? $accounts : collect($accounts);
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $gsc = is_array($meta['gsc'] ?? null) ? $meta['gsc'] : [];
        $pinnedId = (int) ($gsc['google_account_id'] ?? 0);
        $pinnedEmail = strtolower(trim((string) ($gsc['email'] ?? '')));

        return $collection
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
}
