<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFunnelAlertSettingsRequest extends FormRequest
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
            'tg_bot_token' => ['nullable', 'string', 'max:255'],
            'tg_chat_ids' => ['nullable', 'array'],
            'tg_chat_ids.*' => ['nullable', 'string', 'max:64'],
            'regenerate_webhook_token' => ['sometimes', 'boolean'],
        ];
    }
}
