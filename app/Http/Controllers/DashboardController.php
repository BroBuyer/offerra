<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $user = $request->user();
        $isAdmin = $user->isAdmin();
        $selectedUserId = $isAdmin && $request->filled('user')
            ? (int) $request->integer('user')
            : null;

        $query = Offer::query()
            ->with('user:id,name,email')
            ->whereNotIn('status', ['archived', 'archiving'])
            ->orderByDesc('created_at');

        if (! $isAdmin) {
            $query->where('user_id', $user->id);
        } elseif ($selectedUserId) {
            $query->where('user_id', $selectedUserId);
        }

        $dbOffers = $query->get();
        $stats = $this->statsFromDb($dbOffers);

        $selectedUser = $selectedUserId
            ? User::query()->find($selectedUserId, ['id', 'name', 'email'])
            : null;

        $scopeLabel = $this->scopeLabel($isAdmin, $selectedUser);

        $recentOffers = $dbOffers->take(8)->map(fn (Offer $offer) => [
            'brand' => $offer->brand,
            'domain' => $offer->domain,
            'geo' => $offer->geo,
            'lang' => $offer->lang,
            'user_name' => $offer->user?->name,
            'keitaro_id' => $offer->keitaro_campaign_id ? (string) $offer->keitaro_campaign_id : null,
            'date' => $offer->created_at->format('Y-m-d'),
        ]);

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
            'isAdmin' => $isAdmin,
            'users' => $isAdmin
                ? User::query()->orderBy('name')->get(['id', 'name', 'email'])
                : [],
            'filters' => [
                'user' => $selectedUserId ? (string) $selectedUserId : '',
            ],
            'scopeLabel' => $scopeLabel,
        ]);
    }

    private function scopeLabel(bool $isAdmin, ?User $selectedUser): string
    {
        if (! $isAdmin) {
            return 'Статистика ваших офферів';
        }

        if ($selectedUser) {
            return 'Статистика: '.$selectedUser->name;
        }

        return 'Статистика всіх користувачів';
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
