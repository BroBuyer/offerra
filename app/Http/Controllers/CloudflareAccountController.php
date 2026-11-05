<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCloudflareAccountRequest;
use App\Http\Requests\UpdateCloudflareAccountRequest;
use App\Models\CloudflareAccount;
use App\Models\UserSetting;
use App\Services\CloudflareClient;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class CloudflareAccountController extends Controller
{
    public function index(): Response
    {
        $counts = CloudflareAccount::offerCountsByAccountId();

        return Inertia::render('Panel/CloudflareAccounts/Index', [
            'accounts' => CloudflareAccount::query()
                ->orderBy('id')
                ->get()
                ->map(fn (CloudflareAccount $account) => $account->toPanelArray($counts))
                ->values(),
        ]);
    }

    public function store(StoreCloudflareAccountRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $token = CloudflareClient::normalizeApiToken($data['api_token'] ?? null);
        $accountId = trim((string) ($data['account_id'] ?? ''));

        CloudflareAccount::query()->create([
            'name' => trim((string) $data['name']),
            'api_token' => $token,
            'account_id' => $accountId,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()
            ->route('cloudflare-accounts.index')
            ->with('success', 'Запасний Cloudflare додано.');
    }

    public function update(UpdateCloudflareAccountRequest $request, CloudflareAccount $cloudflareAccount): RedirectResponse
    {
        $data = $request->validated();
        $token = CloudflareClient::normalizeApiToken($data['api_token'] ?? null);

        $cloudflareAccount->name = trim((string) $data['name']);
        $cloudflareAccount->account_id = trim((string) $data['account_id']);
        if ($request->has('is_active')) {
            $cloudflareAccount->is_active = $request->boolean('is_active');
        }
        if ($token !== '') {
            $cloudflareAccount->api_token = $token;
        }
        $cloudflareAccount->save();

        return redirect()
            ->route('cloudflare-accounts.index')
            ->with('success', 'Запасний Cloudflare оновлено.');
    }

    public function destroy(CloudflareAccount $cloudflareAccount): RedirectResponse
    {
        $name = $cloudflareAccount->displayName();
        $cloudflareAccount->delete();

        return redirect()
            ->route('cloudflare-accounts.index')
            ->with('success', "{$name} видалено з пулу. Офери на цьому акаунті лишаються, поки їх не перекинеш.");
    }

    public function check(CloudflareAccount $cloudflareAccount, CloudflareClient $cloudflare): RedirectResponse
    {
        $probe = new UserSetting;
        $probe->cloudflare_api_token = $cloudflareAccount->credentials()['token'];
        $probe->cloudflare_account_id = $cloudflareAccount->account_id;

        $result = $cloudflare->testConnection($probe);

        $cloudflareAccount->forceFill([
            'last_checked_at' => now(),
            'last_check_ok' => (bool) ($result['ok'] ?? false),
            'last_check_message' => substr((string) ($result['message'] ?? ''), 0, 400),
        ])->save();

        return redirect()
            ->route('cloudflare-accounts.index')
            ->with(
                ($result['ok'] ?? false) ? 'success' : 'warning',
                $cloudflareAccount->displayName().': '.($result['message'] ?? 'немає відповіді'),
            );
    }
}
