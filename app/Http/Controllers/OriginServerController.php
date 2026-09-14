<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOriginServerRequest;
use App\Http\Requests\UpdateOriginServerRequest;
use App\Models\OriginServer;
use App\Models\User;
use App\Services\OriginHealthMonitor;
use App\Services\OriginServerSync;
use App\Support\DeployDriver;
use App\Support\SecretValue;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class OriginServerController extends Controller
{
    public function index(OriginServerSync $sync): Response
    {
        $counts = $sync->offerCountsByHost();

        $servers = OriginServer::query()
            ->with('owner:id,name,email')
            ->orderByDesc('is_active')
            ->orderBy('host')
            ->get()
            ->map(function (OriginServer $server) use ($sync, $counts) {
                $host = $sync->normalizeHost((string) $server->host);

                return $server->toPanelArray((int) ($counts[$host] ?? 0));
            })
            ->values();

        return Inertia::render('Panel/OriginServers/Index', [
            'servers' => $servers,
            'orphans' => $sync->orphanOfferHosts(),
            'users' => User::query()->orderBy('name')->get(['id', 'name', 'email']),
            'defaultPath' => DeployDriver::UBUNTU_PATH,
        ]);
    }

    public function store(StoreOriginServerRequest $request, OriginServerSync $sync): RedirectResponse
    {
        $data = $request->validated();
        $host = $sync->normalizeHost((string) $data['host']);

        OriginServer::query()->create([
            'host' => $host,
            'port' => (int) ($data['port'] ?? 22),
            'username' => $data['username'] ?? null,
            'password' => filled($data['password'] ?? null) ? $data['password'] : null,
            'label' => $data['label'] ?? null,
            'hoster' => filled($data['hoster'] ?? null) ? trim((string) $data['hoster']) : null,
            'cpu' => filled($data['cpu'] ?? null) ? trim((string) $data['cpu']) : null,
            'ram' => filled($data['ram'] ?? null) ? trim((string) $data['ram']) : null,
            'disk' => filled($data['disk'] ?? null) ? trim((string) $data['disk']) : null,
            'price' => filled($data['price'] ?? null) ? trim((string) $data['price']) : null,
            'deploy_driver' => DeployDriver::UBUNTU,
            'deploy_path_template' => $data['deploy_path_template'] ?? DeployDriver::UBUNTU_PATH,
            'is_active' => $request->boolean('is_active', true),
            'alerts_enabled' => $request->boolean('alerts_enabled', true),
            'owner_user_id' => $data['owner_user_id'] ?? null,
        ]);

        return redirect()
            ->route('origin-servers.index')
            ->with('success', "Сервер {$host} додано до реєстру.");
    }

    public function update(
        UpdateOriginServerRequest $request,
        OriginServer $originServer,
        OriginServerSync $sync,
    ): RedirectResponse {
        $data = $request->validated();
        $host = $sync->normalizeHost((string) $data['host']);
        $password = SecretValue::normalize((string) ($data['password'] ?? ''));

        $originServer->fill([
            'host' => $host,
            'port' => (int) ($data['port'] ?? 22),
            'username' => $data['username'] ?? null,
            'label' => $data['label'] ?? null,
            'hoster' => filled($data['hoster'] ?? null) ? trim((string) $data['hoster']) : null,
            'cpu' => filled($data['cpu'] ?? null) ? trim((string) $data['cpu']) : null,
            'ram' => filled($data['ram'] ?? null) ? trim((string) $data['ram']) : null,
            'disk' => filled($data['disk'] ?? null) ? trim((string) $data['disk']) : null,
            'price' => filled($data['price'] ?? null) ? trim((string) $data['price']) : null,
            'deploy_path_template' => $data['deploy_path_template'] ?? DeployDriver::UBUNTU_PATH,
            'is_active' => (bool) ($data['is_active'] ?? $request->boolean('is_active')),
            'alerts_enabled' => (bool) ($data['alerts_enabled'] ?? $request->boolean('alerts_enabled')),
            'owner_user_id' => $data['owner_user_id'] ?? null,
        ]);

        if ($password !== '') {
            $originServer->password = $password;
        }

        $originServer->save();

        return redirect()
            ->route('origin-servers.index')
            ->with('success', "Сервер {$host} оновлено.");
    }

    public function destroy(OriginServer $originServer): RedirectResponse
    {
        $host = $originServer->host;
        $originServer->delete();

        return redirect()
            ->route('origin-servers.index')
            ->with('success', "Сервер {$host} видалено з реєстру.");
    }

    public function check(OriginServer $originServer, OriginHealthMonitor $monitor): RedirectResponse
    {
        $result = $monitor->checkServer($originServer, false);
        $status = $result['status'] ?? 'unchecked';
        $message = $result['message'] ?? '';

        return redirect()
            ->route('origin-servers.index')
            ->with('success', "{$originServer->host}: {$status}".($message !== '' ? " — {$message}" : ''));
    }

    public function sync(OriginServerSync $sync): RedirectResponse
    {
        $result = $sync->sync();

        return redirect()
            ->route('origin-servers.index')
            ->with('success', "Синхронізовано: +{$result['created']} / ~{$result['updated']}, orphan hosts: ".count($result['orphans']));
    }

    public function checkAll(Request $request, OriginHealthMonitor $monitor, OriginServerSync $sync): RedirectResponse
    {
        $counts = $sync->offerCountsByHost();
        $n = 0;

        foreach (OriginServer::query()->orderBy('host')->get() as $server) {
            $host = $sync->normalizeHost((string) $server->host);
            $offers = (int) ($counts[$host] ?? 0);
            if (! $server->is_active && $offers === 0) {
                continue;
            }
            $monitor->checkServer($server, true);
            $n++;
        }

        return redirect()
            ->route('origin-servers.index')
            ->with('success', "Перевірено серверів: {$n}");
    }
}
