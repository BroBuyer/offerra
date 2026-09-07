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

        $normalized = MarketOptions::normalizePhoneFields(
            (string) $this->input('phone', ''),
            $this->input('phone_countries', []),
            (string) $this->input('geo', ''),
        );

        $this->merge([
            'phone' => $normalized['phone'],
            'phone_countries' => $normalized['phone_countries'],
            'create_keitaro' => $this->boolean('create_keitaro'),
            'vitals_enabled' => $this->boolean('vitals_enabled'),
            'auto_redeploy' => $this->boolean('auto_redeploy', true),
            'infra_cloudflare_geo_overflow' => $this->boolean('infra_cloudflare_geo_overflow'),
            'geo_overflow_hub' => \App\Support\DomainName::normalize((string) $this->input('geo_overflow_hub', '')),
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
            'currency' => ['required', 'string', 'min:2', 'max:8', Rule::in($currencyCodes)],
            'geo' => ['required', 'string', 'size:2', 'alpha:ascii'],
            'template' => ['required', 'string', Rule::in($catalog->ids())],
            'lang' => ['required', 'string', Rule::in($catalog->languageCodesFor($template))],
            'phone' => ['required', 'string', 'regex:/^(ip|[a-zA-Z]{2})$/'],
            'phone_countries' => ['required', 'array', 'min:1'],
            'phone_countries.*' => ['string', 'size:2', 'alpha:ascii'],
            'create_keitaro' => ['boolean'],
            'vitals_enabled' => ['boolean'],
            'auto_redeploy' => ['boolean'],
            'infra_cloudflare_geo_overflow' => ['boolean'],
            'geo_overflow_hub' => ['nullable', 'string', 'max:120'],
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

    public function withValidator($validator): void
    {
        $validator->after(function ($validator): void {
            if (! $this->boolean('infra_cloudflare_geo_overflow')) {
                return;
            }

            $hub = strtolower(trim((string) $this->input('geo_overflow_hub', '')));
            if ($hub === '' || ! preg_match('/^[a-z0-9][a-z0-9.-]*\.[a-z]{2,}$/i', $hub)) {
                $validator->errors()->add('geo_overflow_hub', 'Вкажіть валідний домен multilang hub.');
            }

            /** @var \App\Models\Offer|null $offer */
            $offer = $this->route('offer');
            $template = (string) $this->input('template', $offer?->template);
            $geo = strtoupper((string) $this->input('geo', $offer?->geo));
            if ($template === 'multilang' || $geo === 'ML') {
                $validator->errors()->add(
                    'infra_cloudflare_geo_overflow',
                    'На multilang hub overflow не ставиться.',
                );
            }
        });
    }
}
