<?php

namespace App\Http\Requests;

use App\Services\TemplateCatalog;
use App\Support\DomainName;
use App\Support\MarketOptions;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOfferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation(): void
    {
        if ($this->has('geo')) {
            $this->merge([
                'geo' => MarketOptions::normalizeGeo((string) $this->input('geo')),
            ]);
        }

        if ($this->has('domain')) {
            $this->merge([
                'domain' => DomainName::normalize((string) $this->input('domain')),
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
            'domain' => ['required', 'string', 'max:120', 'regex:/^[a-z0-9][a-z0-9.-]*\.[a-z]{2,}$/i'],
            'min_deposit' => ['required', 'string', 'max:20'],
            'currency' => ['required', 'string', 'size:3', Rule::in($currencyCodes)],
            'geo' => ['required', 'string', 'size:2', 'alpha:ascii'],
            'lang' => ['required', 'string', Rule::in($catalog->languageCodesFor($template))],
            'phone' => ['required', 'string', 'size:2', 'alpha:ascii'],
            'phone_countries' => ['required', 'array', 'min:1'],
            'phone_countries.*' => ['string', 'size:2', 'alpha:ascii'],
            'template' => ['required', 'string', Rule::in($catalog->ids())],
            'create_keitaro' => ['boolean'],
            'provision_infrastructure' => ['boolean'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'domain.regex' => 'Домен без https://, наприклад example.com (IDN з ń, ö тощо — теж можна)',
            'lang.in' => 'Оберіть мову, доступну для обраного шаблону',
            'currency.in' => 'Оберіть валюту зі списку',
            'geo.size' => 'GEO — 2 літери, наприклад IE, IT, ZA',
        ];
    }
}
