<?php

namespace App\Http\Requests;

use App\Services\TemplateCatalog;
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
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $template = (string) $this->input('template');
        $catalog = app(TemplateCatalog::class);

        return [
            'brand' => ['required', 'string', 'max:120'],
            'domain' => ['required', 'string', 'max:120', 'regex:/^[a-z0-9][a-z0-9.-]*\.[a-z]{2,}$/i'],
            'min_deposit' => ['required', 'string', 'max:20'],
            'currency' => ['required', 'string', 'size:3'],
            'geo' => ['required', 'string', 'size:2', 'alpha:ascii'],
            'lang' => ['required', 'string', Rule::in($catalog->languageCodesFor($template))],
            'phone' => ['required', 'string', 'max:8', 'alpha:ascii'],
            'template' => ['required', 'string', Rule::in($catalog->ids())],
            'create_keitaro' => ['boolean'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'domain.regex' => 'Домен без https://, наприклад example.com',
            'lang.in' => 'Оберіть мову, доступну для обраного шаблону',
            'geo.size' => 'GEO — 2 літери, наприклад IE, IT, ZA',
        ];
    }
}
