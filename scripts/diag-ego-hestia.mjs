#!/usr/bin/env node
import { Client } from 'ssh2';

const HOST = '85.155.190.150';
const PASS = 'KeTSNwJsq7j27';
const ACCESS_KEY = 'zkAe65sNVqV1kzqNtmhE';
const HBIN = '/usr/local/hestia/bin';

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

const conn = new Client();
conn.on('ready', async () => {
  const cmds = [
    'hostname; hestia version 2>/dev/null || echo no-hestia',
    `${HBIN}/v-list-users json 2>&1 | head -c 800`,
    `${HBIN}/v-list-access-keys user json 2>&1`,
    `grep -E 'API_ALLOWED_IP|API_SYSTEM|API=' /usr/local/hestia/conf/hestia.conf 2>/dev/null`,
    `ss -tlnp | grep 8083 || netstat -tlnp 2>/dev/null | grep 8083`,
    `curl -sk --connect-timeout 8 -w '\\nHTTP:%{http_code}\\n' -X POST 'https://127.0.0.1:8083/api/' -d 'access_key=${ACCESS_KEY}' -d 'secret_key=WRONG' -d 'returncode=yes' -d 'cmd=v-list-web-domains' -d 'arg1=user' -d 'arg2=json'`,
    `fail2ban-client status 2>/dev/null | head -5; fail2ban-client status hestia-iptables 2>/dev/null | tail -5`,
  ];

  for (const cmd of cmds) {
    const { code, out } = await exec(conn, cmd);
    console.log(`\n>>> ${cmd}\nexit=${code}\n${out.trim()}`);
  }

  conn.end();
});
conn.on('error', (e) => console.error('SSH_ERROR', e.message));
conn.connect({ host: HOST, port: 22, username: 'root', password: PASS, readyTimeout: 20000 });
