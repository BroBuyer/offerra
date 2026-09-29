<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Schema;

echo "offer_cols:\n";
foreach (Schema::getColumnListing('offers') as $c) {
    echo "  $c\n";
}

foreach (User::with('settings')->orderBy('id')->get() as $u) {
    $s = $u->settings;
    echo "\n=== {$u->id} {$u->name} ===\n";
    echo 'settings_dynadot='.(filled($s?->dynadot_api_key) ? 'yes' : 'no').' contact='.($s?->dynadot_contact_id ?? '')."\n";
    $names = Offer::query()
        ->where('user_id', $u->id)
        ->whereNotNull('dynadot_account_name')
        ->where('dynadot_account_name', '!=', '')
        ->selectRaw('dynadot_account_name, count(*) c')
        ->groupBy('dynadot_account_name')
        ->orderByDesc('c')
        ->get();
    echo "offer_dynadot_accounts:\n";
    foreach ($names as $r) {
        echo "  {$r->dynadot_account_name}={$r->c}\n";
    }
    $byStatus = Offer::query()->where('user_id', $u->id)->selectRaw('status, count(*) c')->groupBy('status')->get();
    foreach ($byStatus as $r) {
        echo "  status {$r->status}={$r->c}\n";
    }
    // distinct dynadot keys count on offers
    $withKey = Offer::where('user_id', $u->id)->whereNotNull('dynadot_api_key')->where('dynadot_api_key', '!=', '')->count();
    echo "offers_with_dynadot_key={$withKey}\n";
}
