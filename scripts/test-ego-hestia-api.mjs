#!/usr/bin/env node
import { Client } from 'ssh2';

const OFFER = { host: '213.176.115.14', user: 'root', pass: 'dHrtrUr09BmL' };

function exec(conn, cmd) {
  return new Promise((resolve, reject) => {
    conn.exec(cmd, (err, stream) => {
      if (err) return reject(err);
      let out = '';
      stream.on('data', (d) => { out += d.toString(); });
      stream.stderr.on('data', (d) => { out += d.toString(); });
      stream.on('close', (code) => resolve({ code, out }));
    });
  });
}

const php = `cd /var/www/offerra && php artisan tinker --execute="
\\$s = App\\\\Models\\\\UserSetting::where('user_id', 2)->first();
if (!\\$s) { echo 'no settings'; exit; }
\\$h = app(App\\\\Services\\\\HestiaClient::class);
echo json_encode([
  'host' => \\$s->deploy_host,
  'user' => \\$s->deploy_username,
  'access_len' => strlen((string)\\$s->deploy_api_access_key),
  'access' => \\$s->deploy_api_access_key,
  'secret_len' => strlen((string)\\$s->deploy_api_secret_key),
  'has_password' => filled(\\$s->deploy_password),
  'test' => \\$h->testConnection(\\$s),
], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
"`;

const conn = new Client();
conn.on('ready', async () => {
  const { out } = await exec(conn, php);
  console.log(out.trim());
  conn.end();
});
conn.connect({ ...OFFER, port: 22, username: OFFER.user, password: OFFER.pass, readyTimeout: 15000 });
