#!/usr/bin/env node
/**
 * Push only integration/LeadProcessor.php to all deployed offers (admin fallback).
 * Much faster than full redeploy.
 *
 *   node scripts/push-leadprocessor-origin-drop.mjs
 *   node scripts/push-leadprocessor-origin-drop-status.mjs
 */
import { readFileSync, writeFileSync, unlinkSync } from 'fs';
import { tmpdir } from 'os';
import { dirname, join } from 'path';
import { fileURLToPath } from 'url';
import { Client } from 'ssh2';

const __dirname = dirname(fileURLToPath(import.meta.url));
const HOST = '213.176.115.14';
const USER = 'root';
const PASSWORD = 'dHrtrUr09BmL';
const APP = '/var/www/offerra';
const LOG = `${APP}/storage/logs/push-leadprocessor.log`;
const PID = `${APP}/storage/logs/push-leadprocessor.pid`;
const REMOTE_JOB = `${APP}/storage/logs/push-leadprocessor-job.php`;

const templateRoots = ['default', 'multilang', 'lumen', 'noctra', 'velora'];
const uploads = templateRoots.map((tpl) => ({
  local: join(__dirname, `../templates/${tpl}/integration/LeadProcessor.php`),
  remote: `${APP}/templates/${tpl}/integration/LeadProcessor.php`,
}));

const phpBody = `<?php
require "${APP}/vendor/autoload.php";
$app = require "${APP}/bootstrap/app.php";
$app->make(Illuminate\\Contracts\\Console\\Kernel::class)->bootstrap();

$admin = App\\Models\\User::query()->where("role", "admin")->orderBy("id")->first()
  ?? App\\Models\\User::query()->where("email", "admin@offerra.local")->first();
if (!$admin || !$admin->settings) {
  fwrite(STDERR, "admin_missing\\n");
  exit(1);
}

$offers = App\\Models\\Offer::with("user.settings")
  ->where("status", "deployed")
  ->orderBy("id")
  ->get();

echo "count=".$offers->count().PHP_EOL;

$deploy = app(App\\Services\\DeployService::class);
$conn = app(App\\Services\\DeployConnection::class);
$ok = 0;
$okOwner = 0;
$okAdmin = 0;
$fail = 0;
$failed = [];

$sources = [
  "default" => "${APP}/templates/default/integration/LeadProcessor.php",
  "multilang" => "${APP}/templates/multilang/integration/LeadProcessor.php",
  "lumen" => "${APP}/templates/lumen/integration/LeadProcessor.php",
  "noctra" => "${APP}/templates/noctra/integration/LeadProcessor.php",
  "velora" => "${APP}/templates/velora/integration/LeadProcessor.php",
];

foreach ($offers as $o) {
  $domain = (string) $o->domain;
  $tplKey = (string) ($o->template ?: "default");
  $tpl = array_key_exists($tplKey, $sources) ? $tplKey : "default";
  $src = $sources[$tpl];
  $owner = $o->user?->name ?? "?";
  echo "[".date("H:i:s")."] push LeadProcessor {$domain} (id {$o->id}, {$owner}, {$tpl})... ";
  flush();

  if (!is_file($src)) {
    echo "FAIL: missing template file\\n";
    $fail++;
    $failed[] = $domain.": missing ".$src;
    continue;
  }
  $body = file_get_contents($src);

  $tryPush = function ($user) use ($o, $body, $conn, $deploy) {
    $settings = $user->settings;
    if (!$deploy->settingsReady($settings)) {
      throw new RuntimeException("SFTP settings incomplete");
    }
    $config = [
      "host" => $settings->deploy_host,
      "port" => (int) ($settings->deploy_port ?: 22),
      "username" => $settings->deploy_username,
      "password" => $settings->deploy_password,
      "path_template" => $settings->deploy_path_template,
    ];
    $fs = $conn->connect($config, 60);
    $remotePath = filled($o->remote_path)
      ? rtrim((string) $o->remote_path, "/")
      : $conn->resolveExistingRemotePath(
          $fs,
          $config["path_template"],
          $config["username"],
          $o->domain,
        );
    if ($remotePath === null) {
      $tried = $conn->resolveRemotePathCandidates(
        $config["path_template"],
        $config["username"],
        $o->domain,
      );
      throw new RuntimeException("folder not found: ".implode(", ", $tried));
    }
    $remoteFile = rtrim($remotePath, "/")."/integration/LeadProcessor.php";
    $fs->write($remoteFile, $body);
    if (!$o->remote_path) {
      $o->update(["remote_path" => $remotePath]);
    }
  };

  try {
    if (!$o->user) {
      throw new RuntimeException("no user");
    }
    try {
      $tryPush($o->user);
      echo "OK\\n";
      $ok++;
      $okOwner++;
    } catch (Throwable $e1) {
      echo "FAIL_OWNER: ".$e1->getMessage()." → admin... ";
      flush();
      $tryPush($admin);
      echo "OK_ADMIN\\n";
      $ok++;
      $okAdmin++;
    }
  } catch (Throwable $e) {
    echo "FAIL: ".$e->getMessage()."\\n";
    $fail++;
    $failed[] = $domain.": ".$e->getMessage();
  }
  usleep(200000);
}

echo "done ok={$ok} (owner={$okOwner} admin_fallback={$okAdmin}) fail={$fail}".PHP_EOL;
if ($failed) {
  echo "FAILED_LIST:".PHP_EOL;
  foreach ($failed as $line) {
    echo " - ".$line.PHP_EOL;
  }
}
`;

function exec(conn, cmd, timeoutMs = 30000) {
  return new Promise((resolve, reject) => {
    const timer = setTimeout(() => reject(new Error(`timeout ${timeoutMs}ms`)), timeoutMs);
    conn.exec(cmd, (err, stream) => {
      if (err) {
        clearTimeout(timer);
        return reject(err);
      }
      let out = '';
      stream.on('data', (d) => {
        const s = d.toString();
        out += s;
        process.stdout.write(s);
      });
      stream.stderr.on('data', (d) => {
        const s = d.toString();
        out += s;
        process.stderr.write(s);
      });
      stream.on('close', (code) => {
        clearTimeout(timer);
        code === 0 ? resolve(out) : reject(new Error(`exit ${code}\n${out}`));
      });
    });
  });
}

function upload(conn, localPath, remotePath) {
  return new Promise((resolve, reject) => {
    conn.sftp((err, sftp) => {
      if (err) return reject(err);
      const data = readFileSync(localPath);
      sftp.writeFile(remotePath, data, (wErr) => {
        sftp.end();
        wErr ? reject(wErr) : resolve();
      });
    });
  });
}

const localJob = join(tmpdir(), `push-leadprocessor-${Date.now()}.php`);
writeFileSync(localJob, phpBody);

const conn = new Client();
conn
  .on('ready', async () => {
    try {
      for (const f of uploads) {
        console.log(`Upload ${f.remote}`);
        await upload(conn, f.local, f.remote);
      }
      console.log(`Upload job → ${REMOTE_JOB}`);
      await upload(conn, localJob, REMOTE_JOB);
      console.log('Start background...');
      await exec(
        conn,
        `nohup php -d max_execution_time=0 ${REMOTE_JOB} > ${LOG} 2>&1 & echo $! > ${PID}; sleep 2; cat ${PID}; echo; head -n 20 ${LOG}`,
        20000,
      );
      console.log(`\nBG started. Log: ${LOG}`);
      console.log('Status: node scripts/push-leadprocessor-origin-drop-status.mjs');
    } catch (e) {
      console.error('ERROR:', e.message);
      process.exitCode = 1;
    } finally {
      try {
        unlinkSync(localJob);
      } catch {}
      conn.end();
    }
  })
  .on('error', (e) => {
    console.error(e.message);
    process.exit(1);
  })
  .connect({ host: HOST, port: 22, username: USER, password: PASSWORD, readyTimeout: 30000 });
