<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * `dns_propagating` was a second name for "infra is done, DNS has not
     * propagated yet" — a state `infra_meta.dns = 'pending'` already records.
     * Provisioning stopped writing it, so collapse the leftovers into `ready`
     * and let the code drop the special case.
     */
    public function up(): void
    {
        DB::table('offers')
            ->where('infra_status', 'dns_propagating')
            ->update(['infra_status' => 'ready']);
    }

    public function down(): void
    {
        // Irreversible: `ready` rows are indistinguishable from the ones
        // migrated here, and nothing reads `dns_propagating` any more.
    }
};
