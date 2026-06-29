<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Services\OfferScanner;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function __invoke(OfferScanner $scanner): Response
    {
        $userId = auth()->id();

        $dbOffers = Offer::query()
            ->where('user_id', $userId)
            ->orderByDesc('created_at')
            ->get();

        if ($dbOffers->isEmpty()) {
            $offers = collect($scanner->scan());
            $stats = $scanner->dashboardStats($offers->all());
            $recentOffers = $offers->take(5)->map(fn (array $offer) => [
                'brand' => $offer['brand'],
                'domain' => $offer['domain'],
                'geo' => $offer['geo'],
                'lang' => $offer['lang'],
                'keitaro_id' => $offer['keitaro_id'],
                'date' => $offer['date'],
            ]);
        } else {
            $stats = $this->statsFromDb($dbOffers);
            $recentOffers = $dbOffers->take(5)->map(fn (Offer $offer) => [
                'brand' => $offer->brand,
                'domain' => $offer->domain,
                'geo' => $offer->geo,
                'lang' => $offer->lang,
                'keitaro_id' => $offer->keitaro_campaign_id ? (string) $offer->keitaro_campaign_id : null,
                'date' => $offer->created_at->format('Y-m-d'),
            ]);
        }

        $maxGeo = max(1, ...array_values($stats['geo_breakdown'] ?: [1]));

        $geoBars = collect($stats['geo_breakdown'])
            ->take(5)
            ->map(fn (int $count, string $geo) => [
                'geo' => $geo,
                'count' => $count,
                'width' => round(($count / $maxGeo) * 100),
            ])
            ->values();

        return Inertia::render('Panel/Dashboard', [
            'stats' => $stats,
            'geoBars' => $geoBars,
            'recentOffers' => $recentOffers,
        ]);
    }

    /**
     * @param  \Illuminate\Support\Collection<int, Offer>  $offers
     * @return array<string, mixed>
     */
    private function statsFromDb($offers): array
    {
        $today = now()->toDateString();
        $geos = $offers->countBy('geo')->sortDesc()->all();
        $langs = $offers->countBy('lang')->sortDesc()->all();

        return [
            'total' => $offers->count(),
            'generated_today' => $offers->filter(fn (Offer $o) => $o->created_at->toDateString() === $today)->count(),
            'unique_geos' => count($geos),
            'unique_langs' => count($langs),
            'geo_breakdown' => $geos,
            'lang_breakdown' => $langs,
            'pending_deploy' => $offers->where('status', 'generated')->count(),
            'deployed' => $offers->where('status', 'deployed')->count(),
            'keitaro_linked' => $offers->whereNotNull('keitaro_campaign_id')->count(),
        ];
    }
}
