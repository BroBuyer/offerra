<?php

namespace App\Http\Requests;

use App\Models\BackupServer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpsertBackupServerRequest extends FormRequest
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
        $param = $this->route('backupServer');
        $serverId = $param instanceof BackupServer
            ? $param->id
            : (int) $param;

        return [
            'host' => ['required', 'string', 'max:255', Rule::unique('backup_servers', 'host')->ignore($serverId ?: null)],
            'port' => ['nullable', 'integer', 'min:1', 'max:65535'],
            'username' => ['nullable', 'string', 'max:255'],
            'password' => ['nullable', 'string', 'max:500'],
            'label' => ['nullable', 'string', 'max:255'],
            'hoster' => ['nullable', 'string', 'max:120'],
            'cpu' => ['nullable', 'string', 'max:120'],
            'ram' => ['nullable', 'string', 'max:80'],
            'disk' => ['nullable', 'string', 'max:80'],
            'price' => ['nullable', 'string', 'max:80'],
            'paid_until' => ['nullable', 'date'],
            'alerts_enabled' => ['sometimes', 'boolean'],
        ];
    }
}
