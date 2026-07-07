<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'phone' => ['required', 'string', 'size:2', 'alpha:ascii'],
            'phone_countries' => ['required', 'array', 'min:1'],
            'phone_countries.*' => ['string', 'size:2', 'alpha:ascii'],
            'create_keitaro' => ['boolean'],
        ];
    }
}
