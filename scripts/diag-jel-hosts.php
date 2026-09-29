<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;

$user = User::query()->with('settings')
    ->where('email', 'jellyfish.tdt@gmail.com')
    ->orWhere('name', 'JEL')
    ->firstOrFail();

echo "user#{$user->id} {$user->name} {$user->email}\n";
$s = $user->settings;
echo 'settings.deploy_host='.($s->deploy_host ?? '').' panel='.($s->deploy_panel_name ?? '')."\n";

$offers = Offer::query()
    ->where('user_id', $user->id)
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
    ->get(['id', 'domain', 'status', 'template', 'infra_meta', 'deploy_panel_name']);

$byHost = [];
foreach ($offers as $o) {
    $meta = is_array($o->infra_meta) ? $o->infra_meta : [];
    $h = trim((string) ($meta['deploy_host'] ?? ''));
    if ($h === '') {
        $h = trim((string) ($o->deploy_panel_name ?? ''));
    }
    if ($h === '') {
        $h = '(empty)';
    }
    $byHost[$h] = ($byHost[$h] ?? 0) + 1;
}

echo 'live_total='.$offers->count()."\n";
foreach ($byHost as $h => $n) {
    echo "host={$h} count={$n}\n";
}

$pendingTpl = $offers->filter(fn ($o) => ! filled($o->template) || $o->template === 'pending')->count();
echo "pending_template={$pendingTpl}\n";

echo "\n=== origin_servers (JEL-related) ===\n";
foreach (OriginServer::query()->orderBy('id')->get() as $o) {
    $related = (int) $o->owner_user_id === (int) $user->id
        || stripos((string) $o->label, 'JEL') !== false
        || isset($byHost[$o->host]);
    if (! $related) {
        continue;
    }
    echo "#{$o->id} {$o->host} active=".(int) $o->is_active.' owner='.$o->owner_user_id.' label='.$o->label.' ssh='.($o->hasSshCredentials() ? 'yes' : 'no')."\n";
}
