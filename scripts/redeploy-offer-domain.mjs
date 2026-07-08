#!/usr/bin/env node
import { Client } from 'ssh2';

const DOMAIN = process.argv[2] || 'pura-monetorio.online';

function exec(conn, cmd) {
  return new Promise((resolve, reject) => {
    console.log(`\n>>> ${cmd}`);
    conn.exec(cmd, (err, stream) => {
      if (err) return reject(err);
      stream.on('data', (d) => process.stdout.write(d.toString()));
      stream.stderr.on('data', (d) => process.stderr.write(d.toString()));
      stream.on('close', (code) => (code === 0 ? resolve() : reject(new Error(`exit ${code}`))));
    });
  });
}

const conn = new Client();
conn.on('ready', async () => {
  await exec(conn, 'cd /var/www/offerra && git fetch origin main && git reset --hard origin/main');

  await exec(
    conn,
    `cd /var/www/offerra && php artisan tinker --execute="
\\$o = App\\\\Models\\\\Offer::with('user.settings')->where('domain', '${DOMAIN}')->first();
if (! \\$o) { echo 'NOT_FOUND'; exit(1); }
echo 'offer_id='.\\$o->id.' folder='.\\$o->folder.' template='.\\$o->template.PHP_EOL;
\\$local = rtrim(config('offerra.offers_path'), '/').'/'.\\$o->folder;
if (is_dir(\\$local)) { Illuminate\\\\Support\\\\Facades\\\\File::deleteDirectory(\\$local); echo 'purged_local=1'.PHP_EOL; }
app(\\\\App\\\\Services\\\\OfferGenerator::class)->rebuildLocalFolder(\\$o);
echo 'rebuilt_local=1'.PHP_EOL;
\\$o = app(\\\\App\\\\Services\\\\DeployService::class)->deploy(\\$o->user, \\$o);
echo 'status='.\\$o->status.PHP_EOL;
if (\\$o->deploy_error) echo 'error='.\\$o->deploy_error.PHP_EOL;
"`,
  );

  await exec(conn, `curl -s -o /dev/null -w "root:%{http_code}\\n" https://${DOMAIN}/`);
  await exec(conn, `curl -s -o /dev/null -w "cs:%{http_code}\\n" https://${DOMAIN}/cs/`);
  await exec(conn, `curl -s -o /dev/null -w "de:%{http_code}\\n" https://${DOMAIN}/de/`);

  conn.end();
  console.log('\nDONE');
}).connect({ host: '213.176.115.14', port: 22, username: 'root', password: 'dHrtrUr09BmL' });
