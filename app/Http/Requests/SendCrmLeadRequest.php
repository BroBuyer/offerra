<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendCrmLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    /**
     * @return array<string, list<string>>
     */
    public function rules(): array
    {
        return [
            'dump' => ['nullable', 'string', 'max:8000'],
            'first_name' => ['nullable', 'string', 'max:80'],
            'last_name' => ['nullable', 'string', 'max:80'],
            'email' => ['nullable', 'string', 'max:190'],
            'phone' => ['nullable', 'string', 'max:40'],
            'affiliate' => ['nullable', 'string', 'max:40'],
            'funnel' => ['nullable', 'string', 'max:120'],
            'offer' => ['nullable', 'string', 'max:120'],
            'domain' => ['nullable', 'string', 'max:190'],
            'country' => ['nullable', 'string', 'max:8'],
            'ip' => ['nullable', 'string', 'max:64'],
            'language' => ['nullable', 'string', 'max:8'],
            'subid' => ['nullable', 'string', 'max:190'],
        ];
    }
}
