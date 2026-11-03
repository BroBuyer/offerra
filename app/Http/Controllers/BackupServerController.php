<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertBackupServerRequest;
use App\Jobs\RefreshBackupStatusJob;
use App\Models\BackupServer;
use App\Services\BackupStatusProbe;
use App\Support\SecretValue;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class BackupServerController extends Controller
{
    public function index(BackupStatusProbe $probe): Response
    {
        $server = BackupServer::query()->orderBy('id')->first();
        if ($server && ($server->last_status['state'] ?? '') === '') {
            $probe->refresh($server);
            $server->refresh();
        }

        return Inertia::render('Panel/Backup/Index', [
            'server' => $server?->toPanelArray(),
        ]);
    }

    public function store(UpsertBackupServerRequest $request, BackupStatusProbe $probe): RedirectResponse
    {
        if (BackupServer::query()->exists()) {
            return redirect()
                ->route('backup.index')
                ->withErrors(['host' => 'Бекап-сервер уже додано — відредагуй існуючий.']);
        }

        $server = $this->fill(new BackupServer, $request->validated(), true);
        $server->save();
        $probe->refresh($server);

        return redirect()
            ->route('backup.index')
            ->with('success', "Бекап-сервер {$server->host} збережено.");
    }

    public function update(
        UpsertBackupServerRequest $request,
        BackupServer $backupServer,
    ): RedirectResponse {
        $this->fill($backupServer, $request->validated(), false)->save();

        return redirect()
            ->route('backup.index')
            ->with('success', "Бекап-сервер {$backupServer->host} оновлено.");
    }

    public function check(BackupServer $backupServer): RedirectResponse
    {
        RefreshBackupStatusJob::dispatch($backupServer->id);

        return redirect()
            ->route('backup.index')
            ->with('success', 'Перевірка бекапу поставлена в чергу.');
    }

    /**
     * @param  array<string, mixed>  $data
     */
    private function fill(BackupServer $server, array $data, bool $creating): BackupServer
    {
        $password = SecretValue::normalize((string) ($data['password'] ?? ''));

        $server->fill([
            'host' => trim((string) $data['host']),
            'port' => (int) ($data['port'] ?? 22) ?: 22,
            'username' => filled($data['username'] ?? null) ? trim((string) $data['username']) : 'root',
            'label' => filled($data['label'] ?? null) ? trim((string) $data['label']) : null,
            'hoster' => filled($data['hoster'] ?? null) ? trim((string) $data['hoster']) : null,
            'cpu' => filled($data['cpu'] ?? null) ? trim((string) $data['cpu']) : null,
            'ram' => filled($data['ram'] ?? null) ? trim((string) $data['ram']) : null,
            'disk' => filled($data['disk'] ?? null) ? trim((string) $data['disk']) : null,
            'price' => filled($data['price'] ?? null) ? trim((string) $data['price']) : null,
            'paid_until' => filled($data['paid_until'] ?? null) ? $data['paid_until'] : null,
            'alerts_enabled' => array_key_exists('alerts_enabled', $data)
                ? (bool) $data['alerts_enabled']
                : ($server->alerts_enabled ?? true),
        ]);

        if ($creating || $password !== '') {
            $server->password = $password !== '' ? $password : $server->password;
        }

        return $server;
    }
}
