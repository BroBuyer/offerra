<?php

namespace App\Http\Controllers;

use App\Models\MirrorDomain;
use App\Models\Offer;
use App\Models\User;
use App\Services\MirrorProbeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Inertia\Response;

class MirrorDomainController extends Controller
{
    public function index(Request $request, MirrorProbeService $probeService): Response
    {
        /** @var User $user */
        $user = $request->user();
        $settings = $user->settings()->firstOrCreate([]);

        $query = MirrorDomain::query()
            ->with(['redirectOffer:id,domain,brand', 'user:id,email'])
            ->orderByDesc('last_seen_at')
            ->orderByDesc('id');

        if (! $user->isAdmin()) {
            $query->where('user_id', $user->id);
        } elseif ($request->filled('user_id')) {
            $query->where('user_id', (int) $request->input('user_id'));
        }

        if ($request->filled('status')) {
            $query->where('status', (string) $request->input('status'));
        }

        $mirrors = $query->paginate(30)->withQueryString();

        $offersQuery = Offer::query()
            ->whereIn('status', ['deployed', 'generated', 'failed'])
            ->orderBy('domain');

        if (! $user->isAdmin()) {
            $offersQuery->where('user_id', $user->id);
        }

        $offers = $offersQuery->get(['id', 'domain', 'brand', 'user_id'])
            ->map(fn (Offer $o) => [
                'id' => $o->id,
                'domain' => $o->domain,
                'brand' => $o->brand,
                'label' => $o->brand.' · '.$o->domain,
            ])
            ->values();

        $users = $user->isAdmin()
            ? User::query()->orderBy('email')->get(['id', 'email'])->map(fn (User $u) => [
                'id' => $u->id,
                'email' => $u->email,
            ])->values()
            : [];

        return Inertia::render('Panel/Mirrors/Index', [
            'mirrors' => [
                'data' => $mirrors->getCollection()->map->toPanelArray()->values(),
                'current_page' => $mirrors->currentPage(),
                'last_page' => $mirrors->lastPage(),
                'total' => $mirrors->total(),
            ],
            'filters' => [
                'status' => $request->input('status', ''),
                'user_id' => $request->input('user_id', ''),
            ],
            'offers' => $offers,
            'users' => $users,
            'showUserColumn' => $user->isAdmin(),
            'stats' => [
                'total' => MirrorDomain::query()->when(! $user->isAdmin(), fn ($q) => $q->where('user_id', $user->id))->count(),
                'redirecting' => MirrorDomain::query()
                    ->when(! $user->isAdmin(), fn ($q) => $q->where('user_id', $user->id))
                    ->where('redirect_enabled', true)
                    ->count(),
                'new' => MirrorDomain::query()
                    ->when(! $user->isAdmin(), fn ($q) => $q->where('user_id', $user->id))
                    ->where('status', MirrorDomain::STATUS_NEW)
                    ->count(),
            ],
            'probe' => $probeService->panelProbe($settings),
        ]);
    }

    public function update(Request $request, MirrorDomain $mirror): RedirectResponse
    {
        $this->authorizeMirror($request, $mirror);

        $data = $request->validate([
            'redirect_enabled' => ['required', 'boolean'],
            'redirect_offer_id' => ['nullable', 'integer', Rule::exists('offers', 'id')],
            'redirect_url' => ['nullable', 'string', 'max:512'],
            'status' => ['nullable', 'string', Rule::in([
                MirrorDomain::STATUS_NEW,
                MirrorDomain::STATUS_WATCHING,
                MirrorDomain::STATUS_REDIRECTING,
                MirrorDomain::STATUS_IGNORED,
            ])],
            'notes' => ['nullable', 'string', 'max:2000'],
        ]);

        $redirectUrl = trim((string) ($data['redirect_url'] ?? ''));
        $offerId = $data['redirect_offer_id'] ?? null;

        if ($offerId) {
            $offer = Offer::query()->find($offerId);
            if ($offer && ($request->user()->isAdmin() || (int) $offer->user_id === (int) $request->user()->id)) {
                $redirectUrl = 'https://'.$offer->domain.'/';
            } else {
                $offerId = null;
            }
        }

        if ($redirectUrl !== '' && ! preg_match('#^https?://#i', $redirectUrl)) {
            $redirectUrl = 'https://'.$redirectUrl;
        }

        $enabled = (bool) $data['redirect_enabled'];
        $status = $data['status'] ?? $mirror->status;

        // Destination + "redirecting" status (or chosen offer) means enable,
        // even if the checkbox was left unchecked by mistake.
        if (
            ! $enabled
            && $redirectUrl !== ''
            && ($status === MirrorDomain::STATUS_REDIRECTING || $offerId)
        ) {
            $enabled = true;
        }

        if ($enabled && $redirectUrl === '') {
            return back()->withErrors(['redirect_url' => 'Вкажи URL або обери свій офер для редіректу.']);
        }

        if ($enabled) {
            $status = MirrorDomain::STATUS_REDIRECTING;
        } elseif ($status === MirrorDomain::STATUS_REDIRECTING) {
            $status = MirrorDomain::STATUS_WATCHING;
        }

        $mirror->update([
            'redirect_enabled' => $enabled,
            'redirect_offer_id' => $offerId,
            'redirect_url' => $redirectUrl !== '' ? $redirectUrl : null,
            'status' => $status,
            'notes' => $data['notes'] ?? $mirror->notes,
        ]);

        return back()->with('success', $enabled
            ? "Редірект увімкнено: {$mirror->host} → {$redirectUrl}"
            : "Оновлено: {$mirror->host}");
    }

    public function destroy(Request $request, MirrorDomain $mirror): RedirectResponse
    {
        $this->authorizeMirror($request, $mirror);
        $host = $mirror->host;
        $mirror->delete();

        return back()->with('success', "Видалено: {$host}");
    }

    private function authorizeMirror(Request $request, MirrorDomain $mirror): void
    {
        $user = $request->user();

        if ($user->isAdmin() || (int) $mirror->user_id === (int) $user->id) {
            return;
        }

        abort(403);
    }
}
