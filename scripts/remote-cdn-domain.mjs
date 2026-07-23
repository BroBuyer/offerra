#!/usr/bin/env node
/**
 * Attach CDN_PROBE_HOST (cdnedge.io) to the Offerra nginx + Let's Encrypt.
 * Domain A-record must already point to this server.
 */
import { Client } from 'ssh2';

const HOST = '213.176.115.14';
const USER = 'root';
const PASSWORD = 'dHrtrUr09BmL';
const APP_DIR = '/var/www/offerra';
const DOMAIN = process.env.CDN_PROBE_HOST || 'cdnedge.io';

function exec(conn, cmd, timeoutMs = 600000) {
  return new Promise((resolve, reject) => {
    console.log(`\n>>> ${cmd.slice(0, 160)}`);
    conn.exec(cmd, (err, stream) => {
      if (err) return reject(err);
      stream.on('data', (d) => process.stdout.write(d.toString()));
      stream.stderr.on('data', (d) => process.stderr.write(d.toString()));
      const t = setTimeout(() => reject(new Error('timeout')), timeoutMs);
      stream.on('close', (code) => {
        clearTimeout(t);
        if (code === 0 || code === undefined) resolve();
        else reject(new Error(`exit ${code}`));
      });
    });
  });
}

function upload(conn, content, remotePath, mode = 0o644) {
  return new Promise((resolve, reject) => {
    conn.sftp((err, sftp) => {
      if (err) return reject(err);
      const ws = sftp.createWriteStream(remotePath, { mode });
      ws.on('close', resolve);
      ws.on('error', reject);
      ws.end(content);
    });
  });
}

const nginx = `server {
    listen 80;
    listen [::]:80;
    server_name ${DOMAIN} www.${DOMAIN};

    root ${APP_DIR}/public;
    index index.php;
    client_max_body_size 8M;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \\.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
    }

    location ~ /\\.(?!well-known).* {
        deny all;
    }
}
`;

async function main() {
  const conn = new Client();
  await new Promise((resolve, reject) => {
    conn.on('ready', resolve).on('error', reject).connect({
      host: HOST, port: 22, username: USER, password: PASSWORD, readyTimeout: 30000,
    });
  });

  console.log('Connected');
  await exec(conn, `getent hosts ${DOMAIN} www.${DOMAIN} || true`);
  await exec(conn, `dig +short ${DOMAIN} A || true`);

  await upload(conn, nginx, `/etc/nginx/sites-available/${DOMAIN}`);
  await exec(conn, `ln -sfn /etc/nginx/sites-available/${DOMAIN} /etc/nginx/sites-enabled/${DOMAIN}`);
  await exec(conn, 'nginx -t && systemctl reload nginx');

  await exec(
    conn,
    `cd ${APP_DIR} && grep -q '^CDN_PROBE_HOST=' .env && sed -i 's|^CDN_PROBE_HOST=.*|CDN_PROBE_HOST=${DOMAIN}|' .env || echo 'CDN_PROBE_HOST=${DOMAIN}' >> .env`,
  );
  await exec(conn, `cd ${APP_DIR} && grep CDN_PROBE_HOST .env`);

  try {
    await exec(
      conn,
      `certbot --nginx -d ${DOMAIN} -d www.${DOMAIN} --non-interactive --agree-tos -m admin@${DOMAIN} --redirect`,
      300000,
    );
  } catch (e) {
    console.error('Certbot with www failed, trying apex only:', e.message);
    await exec(
      conn,
      `certbot --nginx -d ${DOMAIN} --non-interactive --agree-tos -m admin@${DOMAIN} --redirect || true`,
      300000,
    );
  }

  await exec(conn, `cd ${APP_DIR} && php artisan config:clear && php artisan config:cache && php artisan route:cache`);
  await exec(conn, 'systemctl reload nginx');
  await exec(conn, `curl -sI -o /dev/null -w 'http:%{http_code}\\n' http://${DOMAIN}/up || true`);
  await exec(conn, `curl -skI -o /dev/null -w 'https:%{http_code}\\n' https://${DOMAIN}/up || true`);

  conn.end();
  console.log(`\nCDN_OK: https://${DOMAIN}`);
}

main().catch((e) => {
  console.error(e);
  process.exit(1);
});
