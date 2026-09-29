<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

$u = User::query()->where('name', 'EGO')->orWhere('email', 'like', '%ego%')->firstOrFail();
echo "EGO id={$u->id} {$u->email}\n";
echo 'offers='.Offer::where('user_id', $u->id)->count()."\n";
echo 'pending='.Offer::where('user_id', $u->id)->where('template', 'pending')->count()."\n";

echo "--- origin_servers cols ---\n";
echo implode(',', Schema::getColumnListing('origin_servers'))."\n";
foreach (OriginServer::orderBy('id')->get() as $s) {
    echo json_encode($s->toArray(), JSON_UNESCAPED_UNICODE)."\n";
}

echo "--- offer relevant cols ---\n";
$oc = Schema::getColumnListing('offers');
$rel = array_values(array_filter($oc, fn ($c) => in_array($c, ['id', 'domain', 'template', 'status', 'folder', 'user_id'], true)
    || str_contains($c, 'origin')
    || str_contains($c, 'server')
    || str_contains($c, 'host')));
echo implode(',', $rel)."\n";
foreach (Offer::where('user_id', $u->id)->limit(5)->get($rel) as $o) {
    echo json_encode($o->toArray(), JSON_UNESCAPED_UNICODE)."\n";
}

echo "--- by status ---\n";
foreach (Offer::where('user_id', $u->id)->selectRaw('status, count(*) c')->groupBy('status')->get() as $r) {
    echo "  {$r->status}={$r->c}\n";
}
