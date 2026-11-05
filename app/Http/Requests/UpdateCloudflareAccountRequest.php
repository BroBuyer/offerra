<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCloudflareAccountRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() ?? false;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:80'],
            'api_token' => ['nullable', 'string', 'max:255'],
            'account_id' => ['required', 'string', 'max:40'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
