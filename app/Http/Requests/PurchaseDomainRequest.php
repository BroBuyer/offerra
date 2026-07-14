<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseDomainRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'domain' => ['required', 'string', 'min:4', 'max:120'],
            'years' => ['nullable', 'integer', 'min:1', 'max:10'],
        ];
    }
}
