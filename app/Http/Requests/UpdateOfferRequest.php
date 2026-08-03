<?php

namespace App\Http\Requests;

use App\Services\TemplateCatalog;
use App\Support\MarketOptions;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOfferRequest extends FormRequest
{
    public function authorize(): bool
    {
        $offer = $this->route('offer');

        if (! $offer) {
            return false;
        }

        $user = $this->user();

        return $offer->user_id === $user->id || $user->isAdmin();
    }

    public function prepareForValidation(): void
    {
        if ($this->has('geo')) {
            $this->merge([
                'geo' => MarketOptions::normalizeGeo((string) $this->input('geo')),
            ]);
        }

        if ($this->has('brand')) {
            $this->merge([
                'brand' => trim((string) $this->input('brand')),
            ]);
        }

        if ($this->has('lang')) {
            $this->merge([
                'lang' => strtolower(trim((string) $this->input('lang'))),
            ]);
        }

        if ($this->has('template')) {
            $this->merge([
                'template' => trim((string) $this->input('template')),
            ]);
        }

        if ($this->has('currency')) {
            $this->merge([
                'currency' => strtoupper(trim((string) $this->input('currency'))),
            ]);
        }

        if ($this->has('min_deposit')) {
            $this->merge([
                'min_deposit' => trim((string) $this->input('min_deposit')),
            ]);
        }

        $phone = strtolower(trim((string) $this->input('phone', '')));
        $rawCountries = $this->input('phone_countries', []);
        if (is_string($rawCountries)) {
            $rawCountries = explode(',', strtolower($rawCountries));
        }
        $countries = collect(is_array($rawCountries) ? $rawCountries : [])
            ->map(static fn ($code) => strtolower(trim((string) $code)))
            ->filter(static fn (string $code) => strlen($code) === 2 && ctype_alpha($code))
            ->unique()
            ->values()
            ->all();

        if ($phone !== '' && ! in_array($phone, $countries, true)) {
            array_unshift($countries, $phone);
        }

        if ($countries === [] && $phone !== '') {
            $countries = [$phone];
        }

        if ($phone === '' && $countries !== []) {
            $phone = $countries[0];
        }

        $this->merge([
            'phone' => $phone,
            'phone_countries' => $countries,
            'create_keitaro' => $this->boolean('create_keitaro'),
            'vitals_enabled' => $this->boolean('vitals_enabled'),
            'auto_redeploy' => $this->boolean('auto_redeploy', true),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $template = (string) $this->input('template');
        $catalog = app(TemplateCatalog::class);
        $currencyCodes = array_column(config('offerra.currencies', []), 'code');

        return [
            'brand' => ['required', 'string', 'max:120'],
            'min_deposit' => ['required', 'string', 'max:20'],
            'currency' => ['required', 'string', 'size:3', Rule::in($currencyCodes)],
            'geo' => ['required', 'string', 'size:2', 'alpha:ascii'],
            'template' => ['required', 'string', Rule::in($catalog->ids())],
            'lang' => ['required', 'string', Rule::in($catalog->languageCodesFor($template))],
            'phone' => ['required', 'string', 'size:2', 'alpha:ascii'],
            'phone_countries' => ['required', 'array', 'min:1'],
            'phone_countries.*' => ['string', 'size:2', 'alpha:ascii'],
            'create_keitaro' => ['boolean'],
            'vitals_enabled' => ['boolean'],
            'auto_redeploy' => ['boolean'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'lang.in' => 'Оберіть мову, доступну для обраного шаблону',
            'currency.in' => 'Оберіть валюту зі списку',
            'geo.size' => 'GEO — 2 літери, наприклад IE, IT, ZA',
        ];
    }
}
