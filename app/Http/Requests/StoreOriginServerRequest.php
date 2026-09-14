<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOriginServerRequest extends FormRequest
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
            'host' => ['required', 'string', 'max:255', 'unique:origin_servers,host'],
            'port' => ['nullable', 'integer', 'min:1', 'max:65535'],
            'username' => ['nullable', 'string', 'max:255'],
            'password' => ['nullable', 'string', 'max:500'],
            'label' => ['nullable', 'string', 'max:255'],
            'hoster' => ['nullable', 'string', 'max:120'],
            'cpu' => ['nullable', 'string', 'max:120'],
            'ram' => ['nullable', 'string', 'max:80'],
            'disk' => ['nullable', 'string', 'max:80'],
            'price' => ['nullable', 'string', 'max:80'],
            'deploy_path_template' => ['nullable', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
            'alerts_enabled' => ['sometimes', 'boolean'],
            'owner_user_id' => ['nullable', 'integer', Rule::exists('users', 'id')],
        ];
    }
}
