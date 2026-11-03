<?php

namespace App\Services;

use App\Models\BackupServer;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;

class BackupStatusProbe
{
    public const STALE_AFTER_HOURS = 36;

    public ?string $statusFile = null;

    public ?string $logFile = null;

    public ?string $envFile = null;

    /**
     * @return array<string, mixed>
     */
    public function refresh(?BackupServer $server = null): array
    {
        $result = $this->probe();

        if ($server !== null) {
            $server->update(['last_status' => $result]);
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function probe(): array
    {
        $fromFile = $this->readStatusFile();
        $fromLog = $this->readLog();
        $fromRestic = $this->readRestic();

        $latest = $fromRestic['latest_snapshot_at']
            ?? $fromFile['latest_snapshot_at']
            ?? $fromLog['latest_snapshot_at']
            ?? $fromFile['finished_at']
            ?? $fromLog['finished_at']
            ?? null;

        $lastOk = null;
        foreach ([$fromRestic, $fromFile, $fromLog] as $chunk) {
            if (($chunk['ok'] ?? false) && filled($chunk['finished_at'] ?? $chunk['latest_snapshot_at'] ?? null)) {
                $lastOk = $chunk['finished_at'] ?? $chunk['latest_snapshot_at'];
                break;
            }
        }
        if ($lastOk === null && ($fromFile['ok'] ?? false)) {
            $lastOk = $fromFile['finished_at'] ?? $latest;
        }
        if ($lastOk === null && ($fromLog['ok'] ?? false)) {
            $lastOk = $fromLog['finished_at'] ?? $latest;
        }

        $snapshots = (int) ($fromRestic['snapshots'] ?? $fromFile['snapshots'] ?? 0);
        $size = $fromRestic['size'] ?? $fromFile['size'] ?? null;
        $message = $fromRestic['message'] ?? $fromFile['message'] ?? $fromLog['message'] ?? null;

        $state = $this->classify($latest, $lastOk, $message);

        return [
            'state' => $state,
            'checked_at' => now()->toIso8601String(),
            'last_ok_at' => $lastOk,
            'latest_snapshot_at' => $latest,
            'snapshots' => $snapshots,
            'keep_daily' => (int) ($fromFile['keep_daily'] ?? 14),
            'size' => $size,
            'message' => $message ?: $this->defaultMessage($state, $latest),
            'cron' => 'щодня о 03:15 (Київ)',
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function readStatusFile(): array
    {
        $path = $this->statusFile ?? storage_path('app/backup-status.json');
        if (! is_readable($path)) {
            return [];
        }

        $raw = file_get_contents($path);
        $data = json_decode((string) $raw, true);

        return is_array($data) ? $data : [];
    }

    /**
     * @return array<string, mixed>
     */
    private function readLog(): array
    {
        $path = $this->logFile ?? '/var/log/offerra-backup.log';
        if (! is_readable($path)) {
            return [];
        }

        $lines = @file($path, FILE_IGNORE_NEW_LINES);
        if (! is_array($lines) || $lines === []) {
            return [];
        }

        $tail = array_slice($lines, -80);
        $finishedAt = null;
        $ok = false;
        $message = null;

        foreach (array_reverse($tail) as $line) {
            if (preg_match('/^\[([^\]]+)\]\s+(ok|refusing:.*|backup already running|.*)$/i', $line, $m) !== 1) {
                continue;
            }
            $finishedAt = $m[1];
            $body = trim($m[2]);
            if (strcasecmp($body, 'ok') === 0) {
                $ok = true;
                $message = 'ok';
            } else {
                $ok = false;
                $message = $body;
            }
            break;
        }

        return array_filter([
            'ok' => $ok,
            'finished_at' => $finishedAt,
            'latest_snapshot_at' => $ok ? $finishedAt : null,
            'message' => $message,
        ], fn ($value) => $value !== null && $value !== '');
    }

    /**
     * @return array<string, mixed>
     */
    private function readRestic(): array
    {
        $envPath = $this->envFile ?? '/root/offerra-backup.env';
        if (! is_readable($envPath)) {
            return [];
        }

        $env = $this->parseEnvFile($envPath);
        $repo = trim((string) ($env['RESTIC_REPOSITORY'] ?? ''));
        if ($repo === '') {
            return [];
        }

        $sshKey = trim((string) ($env['BACKUP_SSH_KEY'] ?? '/root/.ssh/offerra-backup'));
        $processEnv = [
            'RESTIC_REPOSITORY' => $repo,
            'RESTIC_PASSWORD_FILE' => trim((string) ($env['RESTIC_PASSWORD_FILE'] ?? '/root/offerra-backup.password')),
        ];
        if (filled($env['RESTIC_PASSWORD'] ?? null)) {
            $processEnv['RESTIC_PASSWORD'] = (string) $env['RESTIC_PASSWORD'];
        }

        $process = new Process([
            'restic',
            'snapshots',
            '--json',
            '--tag',
            'offerra-panel',
            '-o',
            'sftp.args=-i '.$sshKey.' -o IdentitiesOnly=yes -o StrictHostKeyChecking=yes',
        ]);
        $process->setEnv($processEnv + $_ENV + getenv());
        $process->setTimeout(60);

        try {
            $process->run();
        } catch (\Throwable $e) {
            Log::warning('Backup restic probe failed', ['error' => $e->getMessage()]);

            return ['ok' => false, 'message' => 'restic: '.$e->getMessage()];
        }

        if (! $process->isSuccessful()) {
            return ['ok' => false, 'message' => 'restic: '.trim($process->getErrorOutput() ?: $process->getOutput())];
        }

        $rows = json_decode($process->getOutput(), true);
        if (! is_array($rows)) {
            return [];
        }

        $latest = null;
        $size = null;
        foreach ($rows as $row) {
            if (! is_array($row)) {
                continue;
            }
            $time = (string) ($row['time'] ?? '');
            if ($time !== '' && ($latest === null || strcmp($time, $latest) > 0)) {
                $latest = $time;
                $summary = is_array($row['summary'] ?? null) ? $row['summary'] : [];
                $bytes = $summary['total_bytes_processed'] ?? $row['size'] ?? null;
                $size = is_numeric($bytes) ? $this->formatBytes((int) $bytes) : null;
            }
        }

        return array_filter([
            'ok' => $latest !== null,
            'snapshots' => count($rows),
            'latest_snapshot_at' => $latest,
            'size' => $size,
            'message' => $latest !== null ? 'restic ok' : 'немає знімків',
        ], fn ($value) => $value !== null && $value !== '');
    }

    /**
     * @return array<string, string>
     */
    private function parseEnvFile(string $path): array
    {
        $out = [];
        foreach (file($path, FILE_IGNORE_NEW_LINES) ?: [] as $line) {
            $line = trim($line);
            if ($line === '' || str_starts_with($line, '#') || ! str_contains($line, '=')) {
                continue;
            }
            [$key, $value] = explode('=', $line, 2);
            $value = trim($value);
            if (strlen($value) >= 2 && $value[0] === $value[-1] && in_array($value[0], ['"', "'"], true)) {
                $value = substr($value, 1, -1);
            }
            $out[trim($key)] = $value;
        }

        return $out;
    }

    private function classify(?string $latest, ?string $lastOk, ?string $message): string
    {
        if (filled($message) && ! in_array($message, ['ok', 'restic ok'], true) && $lastOk === null && $latest === null) {
            return 'down';
        }

        $anchor = $lastOk ?: $latest;
        if (! filled($anchor)) {
            return 'unchecked';
        }

        try {
            $at = \Illuminate\Support\Carbon::parse($anchor);
        } catch (\Throwable) {
            return 'unchecked';
        }

        $hours = $at->diffInHours(now(), false);
        if ($hours > self::STALE_AFTER_HOURS) {
            return 'down';
        }
        if ($hours > 26) {
            return 'degraded';
        }

        return 'ok';
    }

    private function defaultMessage(string $state, ?string $latest): string
    {
        return match ($state) {
            'ok' => $latest ? 'Останній знімок: '.$latest : 'Бекап проходить',
            'degraded' => 'Знімок застарів — чекаємо нічний прогін',
            'down' => 'Немає свіжого бекапу',
            default => 'Ще не перевіряли',
        };
    }

    private function formatBytes(int $bytes): string
    {
        if ($bytes >= 1073741824) {
            return round($bytes / 1073741824, 1).' GiB';
        }
        if ($bytes >= 1048576) {
            return round($bytes / 1048576, 1).' MiB';
        }

        return $bytes.' B';
    }
}
