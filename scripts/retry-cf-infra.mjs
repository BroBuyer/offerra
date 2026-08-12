#!/usr/bin/env node
/**
 * Retry infra for domains that failed with Cloudflare header errors.
 *
 *   node scripts/retry-cf-infra.mjs [domain ...]
 */
import { Client } from 'ssh2';

const HOST = '213.176.115.14';
const USER = 'root';
const PASSWORD = 'dHrtrUr09BmL';
const DOMAINS = process.argv.slice(2).length
  ? process.argv.slice(2)
  : ['stakelispro07.online', 'kelddigitholm-fi.org'];

function exec(conn, cmd, ms = 300000) {
  return new Promise((resolve, reject) => {
    const t = setTimeout(() => reject(new Error('timeout')), ms);
    conn.exec(cmd, (err, stream) => {
      if (err) {
        clearTimeout(t);
        return reject(err);
      }
      let out = '';
      stream.on('data', (d) => {
        out += d;
        process.stdout.write(d);
      });
      stream.stderr.on('data', (d) => process.stderr.write(d));
      stream.on('close', (code) => {
        clearTimeout(t);
        code === 0 ? resolve(out) : reject(new Error(out));
      });
    });
  });
}

const conn = new Client();
conn.on('ready', async () => {
  for (const domain of DOMAINS) {
    console.log(`\n===== ${domain} =====`);
    await exec(
      conn,
      `cd /var/www/offerra && php artisan tinker --execute="
\\$o = App\\\\Models\\\\Offer::where('domain', '${domain}')->with('user.settings')->first();
if (!\\$o) { echo 'missing'; exit(1); }
echo 'before infra=' . \\$o->infra_status . ' err=' . (\\$o->infra_error ?? '—') . PHP_EOL;
\\$o->update(['infra_status' => 'pending', 'infra_error' => null]);
try {
  app(App\\\\Services\\\\InfrastructureProvisioner::class)->provision(\\$o->fresh());
  \\$o->refresh();
  echo 'after infra=' . \\$o->infra_status . ' err=' . (\\$o->infra_error ?? '—') . PHP_EOL;
} catch (Throwable \\$e) {
  echo 'fail: ' . \\$e->getMessage() . PHP_EOL;
}
"`,
    );
  }
  conn.end();
}).connect({ host: HOST, port: 22, username: USER, password: PASSWORD, readyTimeout: 30000 });
