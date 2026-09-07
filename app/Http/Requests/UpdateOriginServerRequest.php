<?php

namespace App\Http\Requests;

use App\Models\OriginServer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOriginServerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() ?? false;
    }

    protected function prepareForValidation(): void
    {
        $owner = $this->input('owner_user_id');
        if ($owner === '' || $owner === false) {
            $owner = null;
        }

        $this->merge([
            'host' => trim((string) $this->input('host', '')),
            'username' => trim((string) $this->input('username', '')),
            'label' => trim((string) $this->input('label', '')),
            'owner_user_id' => $owner,
            'port' => (int) ($this->input('port') ?: 22),
            'is_active' => $this->boolean('is_active'),
            'alerts_enabled' => $this->boolean('alerts_enabled'),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $param = $this->route('originServer');
        $serverId = $param instanceof OriginServer
            ? $param->id
            : (int) $param;

        return [
            'host' => ['required', 'string', 'max:255', Rule::unique('origin_servers', 'host')->ignore($serverId)],
            'port' => ['nullable', 'integer', 'min:1', 'max:65535'],
            'username' => ['nullable', 'string', 'max:255'],
            'password' => ['nullable', 'string', 'max:500'],
            'label' => ['nullable', 'string', 'max:255'],
            'deploy_path_template' => ['nullable', 'string', 'max:255'],
            'is_active' => ['required', 'boolean'],
            'alerts_enabled' => ['required', 'boolean'],
            'owner_user_id' => ['nullable', 'integer', Rule::exists('users', 'id')],
        ];
    }
}
