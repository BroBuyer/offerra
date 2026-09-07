<?php

namespace App\Http\Requests;

use App\Models\GeoMinDeposit;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGeoMinDepositRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() ?? false;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'geo' => strtoupper(preg_replace('/[^a-zA-Z]/', '', (string) $this->input('geo', '')) ?? ''),
            'min_deposit' => trim((string) $this->input('min_deposit', '')),
            'currency' => strtoupper(trim((string) $this->input('currency', ''))),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $param = $this->route('geoMinDeposit');
        $id = $param instanceof GeoMinDeposit ? $param->id : (int) $param;
        $currencyCodes = array_column(config('offerra.currencies', []), 'code');

        return [
            'geo' => ['required', 'string', 'size:2', Rule::unique('geo_min_deposits', 'geo')->ignore($id)],
            'min_deposit' => ['required', 'string', 'max:32'],
            'currency' => ['required', 'string', 'max:8', Rule::in($currencyCodes)],
        ];
    }
}
