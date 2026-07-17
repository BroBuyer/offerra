#!/usr/bin/env node
/** Repair Keitaro tokens + streams, redeploy deployed offers. */
import { Client } from 'ssh2';

const HOST = '213.176.115.14';
const USER = 'root';
const PASSWORD = 'dHrtrUr09BmL';
const LIMIT = Number(process.env.LIMIT || '0');
const DEPLOY = process.env.DEPLOY === '1';
const PUSH_CONFIG = !DEPLOY;

function exec(conn, cmd, timeoutMs = 12 * 60 * 60 * 1000) {
  return new Promise((resolve, reject) => {
    const timer = setTimeout(() => reject(new Error(`timeout ${timeoutMs}ms`)), timeoutMs);
    conn.exec(cmd, (err, stream) => {
      if (err) { clearTimeout(timer); return reject(err); }
      stream.on('data', (d) => process.stdout.write(d.toString()));
      stream.stderr.on('data', (d) => process.stderr.write(d.toString()));
      stream.on('close', (code) => {
        clearTimeout(timer);
        code === 0 ? resolve() : reject(new Error(`exit ${code}`));
      });
    });
  });
}

const limitFlag = LIMIT > 0 ? ` --limit=${LIMIT}` : '';
const deployFlag = DEPLOY ? ' --deploy' : '';
const pushFlag = PUSH_CONFIG ? ' --push-config --only-deployed' : '';

const conn = new Client();
conn.on('ready', async () => {
  try {
    console.log(`Repair Keitaro (limit=${LIMIT || 'all'}, deploy=${DEPLOY}, push_config=${PUSH_CONFIG})...`);
    await exec(conn, `cd /var/www/offerra && php -d max_execution_time=0 artisan offers:repair-keitaro${limitFlag}${deployFlag}${pushFlag}`);
    console.log('\nREPAIR_DONE');
  } catch (e) {
    console.error('ERROR:', e.message);
    process.exitCode = 1;
  } finally {
    conn.end();
  }
}).on('error', (e) => {
  console.error('SSH FAILED:', e.message);
  process.exit(1);
}).connect({ host: HOST, port: 22, username: USER, password: PASSWORD, readyTimeout: 30000 });
