<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BulkOfferActionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'ids' => ['required', 'array', 'min:1', 'max:200'],
            'ids.*' => ['integer', 'distinct'],
            'action' => ['required', 'string', Rule::in(['redeploy', 'rebind_dns', 'switch_cloudflare', 'move_server'])],
            'ip' => ['required_if:action,rebind_dns', 'nullable', 'ip:4'],
            'cloudflare_target' => ['required_if:action,switch_cloudflare', 'nullable', 'string', Rule::in(['primary', 'backup'])],
            'target_host' => ['required_if:action,move_server', 'nullable', 'string', 'max:255'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'ids.required' => 'Оберіть хоча б один оффер.',
            'ip.required_if' => 'Вкажіть IPv4 нового сервера.',
            'ip.ip' => 'IPv4 виглядає невалідним.',
            'cloudflare_target.required_if' => 'Оберіть Cloudflare-акаунт: основний або запасний.',
            'target_host.required_if' => 'Оберіть origin-сервер.',
        ];
    }
}
