<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeoMinDepositRequest;
use App\Http\Requests\UpdateGeoMinDepositRequest;
use App\Models\GeoMinDeposit;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class GeoMinDepositController extends Controller
{
    public function index(): Response
    {
        $rows = GeoMinDeposit::query()
            ->orderBy('geo')
            ->get()
            ->map->toPanelArray()
            ->values();

        return Inertia::render('Panel/MinDeposits/Index', [
            'rows' => $rows,
            'currencies' => config('offerra.currencies'),
            'geoPresets' => config('offerra.geo_presets'),
        ]);
    }

    public function store(StoreGeoMinDepositRequest $request): RedirectResponse
    {
        $data = $request->validated();

        GeoMinDeposit::query()->create([
            'geo' => $data['geo'],
            'min_deposit' => $data['min_deposit'],
            'currency' => $data['currency'],
        ]);

        return redirect()
            ->route('min-deposits.index')
            ->with('success', "Мін. деп для {$data['geo']} додано ({$data['min_deposit']} {$data['currency']}).");
    }

    public function update(UpdateGeoMinDepositRequest $request, GeoMinDeposit $geoMinDeposit): RedirectResponse
    {
        $data = $request->validated();

        $geoMinDeposit->update([
            'geo' => $data['geo'],
            'min_deposit' => $data['min_deposit'],
            'currency' => $data['currency'],
        ]);

        return redirect()
            ->route('min-deposits.index')
            ->with('success', "Мін. деп для {$data['geo']} оновлено.");
    }

    public function destroy(GeoMinDeposit $geoMinDeposit): RedirectResponse
    {
        $geo = $geoMinDeposit->geo;
        $geoMinDeposit->delete();

        return redirect()
            ->route('min-deposits.index')
            ->with('success', "Мін. деп для {$geo} видалено.");
    }
}
