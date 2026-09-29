<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use App\Services\TemplateCatalog;
use Illuminate\Support\Facades\DB;

$user = User::query()
    ->where('name', 'JEL')
    ->orWhere('email', 'like', '%jel%')
    ->first();

if (! $user) {
    fwrite(STDERR, "JEL user not found\n");
    exit(1);
}

echo "JEL: id={$user->id} name={$user->name} email={$user->email}\n";

$offers = Offer::query()->where('user_id', $user->id);
echo 'offers='.$offers->count()."\n";

$byTpl = Offer::query()
    ->where('user_id', $user->id)
    ->selectRaw("COALESCE(template, '(null)') as tpl, count(*) as c")
    ->groupBy('tpl')
    ->orderByDesc('c')
    ->get();

echo "--- templates in offers ---\n";
foreach ($byTpl as $r) {
    echo "  {$r->tpl}={$r->c}\n";
}

$byStatus = Offer::query()
    ->where('user_id', $user->id)
    ->selectRaw('status, count(*) as c')
    ->groupBy('status')
    ->get();
echo "--- status ---\n";
foreach ($byStatus as $r) {
    echo "  {$r->status}={$r->c}\n";
}

$tlds = DB::select(
    "SELECT lower(substring(domain from '\\.([^.]+)$')) as tld, count(*) c
     FROM offers WHERE user_id = ? GROUP BY 1 ORDER BY c DESC",
    [$user->id]
);
echo "--- tlds ---\n";
foreach ($tlds as $r) {
    echo "  {$r->tld}={$r->c}\n";
}

$catalog = app(TemplateCatalog::class);
$ids = $catalog->ids();
echo "--- catalog ---\n";
foreach ($ids as $id) {
    echo "  {$id} => ".$catalog->label($id)."\n";
}

echo "--- sample offers ---\n";
foreach (
    Offer::query()->where('user_id', $user->id)->orderBy('id')->limit(20)
        ->get(['id', 'domain', 'geo', 'brand', 'tag', 'template', 'status', 'name']) as $o
) {
    echo "{$o->id}|{$o->domain}|{$o->geo}|{$o->brand}|{$o->tag}|{$o->template}|{$o->status}|{$o->name}\n";
}
