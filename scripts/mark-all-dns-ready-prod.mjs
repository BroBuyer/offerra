#!/usr/bin/env node
import { Client } from 'ssh2';

const HOST = '213.176.115.14';
const USER = 'root';
const PASSWORD = 'dHrtrUr09BmL';
const APP_DIR = '/var/www/offerra';

const php = `cd ${APP_DIR} && php -r "
require 'vendor/autoload.php';
\\$app = require 'bootstrap/app.php';
\\$app->make('Illuminate\\\\Contracts\\\\Console\\\\Kernel')->bootstrap();

use App\\\\Models\\\\Offer;
use App\\\\Support\\\\InfrastructureOptions;

\\$offers = Offer::query()->orderBy('id')->get();
\\$updated = 0;

foreach (\\$offers as \\$offer) {
    \\$before = \\$offer->dnsStatus();
    \\$meta = is_array(\\$offer->infra_meta) ? \\$offer->infra_meta : [];
    \\$meta['dns'] = 'done';
    unset(\\$meta['dns_error']);

    \\$updates = [
        'infra_meta' => \\$meta,
        'infra_error' => null,
    ];

    if (in_array(\\$offer->infra_status, ['dns_propagating', 'failed', 'pending', 'provisioning'], true)) {
        \\$updates['infra_status'] = 'ready';
    }

    \\$offer->update(\\$updates);
    \\$offer->refresh();

    if (\\$before !== \\$offer->dnsStatus()) {
        \\$updated++;
    }
}

echo json_encode([
    'total' => \\$offers->count(),
    'updated' => \\$updated,
    'rows' => Offer::query()->orderBy('id')->get()->map(fn (\\$o) => [
        'id' => \\$o->id,
        'domain' => \\$o->domain,
        'provision_infrastructure' => (bool) \\$o->provision_infrastructure,
        'infra_status' => \\$o->infra_status,
        'dns_status' => \\$o->dnsStatus(),
        'dns_meta' => (\\$o->infra_meta ?? [])['dns'] ?? null,
    ])->values()->all(),
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
"`;

const conn = new Client();
conn.on('ready', () => {
    conn.exec(php, (err, stream) => {
        if (err) {
            console.error(err);
            conn.end();
            return;
        }
        stream.on('data', (d) => process.stdout.write(d));
        stream.stderr.on('data', (d) => process.stderr.write(d));
        stream.on('close', () => conn.end());
    });
});
conn.on('error', (e) => console.error('SSH_ERROR', e.message));
conn.connect({ host: HOST, port: 22, username: USER, password: PASSWORD, readyTimeout: 15000 });
