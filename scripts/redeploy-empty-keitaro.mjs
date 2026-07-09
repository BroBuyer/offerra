#!/usr/bin/env node
/** Redeploy offers where Keitaro token exists in DB but remote config is empty. */
import { Client } from 'ssh2';

const DOMAINS = [
  'bursenix-ai.org',
  'claroledovia.online',
  'filomercivolta.org',
  'lowe-kapitberg.com',
  'pura-monetorio.online',
  'tatranziskovin.org',
  'tind-kapitvik.org',
];

function exec(conn, cmd, timeoutMs = 300000) {
  return new Promise((resolve, reject) => {
    const timer = setTimeout(() => reject(new Error(`timeout ${timeoutMs}ms`)), timeoutMs);
    conn.exec(cmd, (err, stream) => {
      if (err) {
        clearTimeout(timer);
        return reject(err);
      }
      let out = '';
      stream.on('data', (d) => { out += d.toString(); process.stdout.write(d); });
      stream.stderr.on('data', (d) => { out += d.toString(); process.stderr.write(d); });
      stream.on('close', (code) => {
        clearTimeout(timer);
        if (code === 0) resolve(out);
        else reject(new Error(`exit ${code}`));
      });
    });
  });
}

const sleep = (ms) => new Promise((r) => setTimeout(r, ms));

const conn = new Client();
conn.on('ready', async () => {
  try {
    for (let i = 0; i < DOMAINS.length; i++) {
      const domain = DOMAINS[i];
      console.log(`\n===== [${i + 1}/${DOMAINS.length}] ${domain} =====`);
      await exec(
        conn,
        `cd /var/www/offerra && php artisan tinker --execute="
\\$o = App\\\\Models\\\\Offer::where('domain','${domain}')->with('user')->first();
if (!\\$o) { echo 'missing'; exit(1); }
app(App\\\\Services\\\\OfferGenerator::class)->refreshConfig(\\$o);
app(App\\\\Services\\\\DeployService::class)->deploy(\\$o->user, \\$o->fresh());
echo 'deployed';
"`,
      );
      if (i < DOMAINS.length - 1) await sleep(5000);
    }
    console.log('\nDONE');
  } catch (e) {
    console.error('ERROR:', e.message);
    process.exitCode = 1;
  } finally {
    conn.end();
  }
}).connect({ host: '213.176.115.14', port: 22, username: 'root', password: 'dHrtrUr09BmL' });
