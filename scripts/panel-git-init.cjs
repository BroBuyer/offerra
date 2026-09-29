/**
 * One-time: turn the panel directory into a git checkout that tracks origin/main,
 * so deploys become `git pull` instead of file uploads.
 *
 *   $env:PANEL_HOST="..."; $env:PANEL_PASS="..."
 *   node scripts/panel-git-init.cjs                # inspect + report drift only
 *   node scripts/panel-git-init.cjs --align        # also reset tracked files to git
 *   node scripts/panel-git-init.cjs --deploy-key   # generate an SSH deploy key
 *
 * Safe by default: it fetches and attaches the checkout to origin/main but leaves
 * the working tree alone, then prints how prod differs from git. Nothing is
 * overwritten until you pass --align. Ignored paths (.env, storage, offers,
 * vendor, node_modules, public/build) are never touched either way.
 */
const { Client } = require("ssh2");

const HOST = process.env.PANEL_HOST;
const PASS = process.env.PANEL_PASS;
const USER = process.env.PANEL_USER || "root";
const PORT = Number(process.env.PANEL_PORT || 22);
const REMOTE = process.env.PANEL_PATH || "/var/www/offerra";
const REPO_HTTPS = process.env.REPO_URL || "https://github.com/BroBuyer/offerra.git";
const REPO_SSH = process.env.REPO_SSH || "git@github.com:BroBuyer/offerra.git";

const args = process.argv.slice(2);
const ALIGN = args.includes("--align");
const DEPLOY_KEY = args.includes("--deploy-key");
const BRANCH = (args.find((a) => a.startsWith("--branch=")) || "--branch=main").split("=")[1];

if (!HOST || !PASS) {
  console.error("PANEL_HOST / PANEL_PASS required");
  process.exit(1);
}

function exec(conn, cmd, { timeoutMs = 240000, allowFail = true } = {}) {
  return new Promise((resolve, reject) => {
    conn.exec(cmd, { pty: true }, (err, stream) => {
      if (err) return reject(err);
      let out = "";
      const t = setTimeout(() => reject(new Error("timeout: " + cmd.slice(0, 90))), timeoutMs);
      stream.on("data", (d) => {
        out += d;
        process.stdout.write(d);
      });
      stream.stderr.on("data", (d) => {
        out += d;
        process.stderr.write(d);
      });
      stream.on("close", (code) => {
        clearTimeout(t);
        if (code !== 0 && !allowFail) {
          reject(new Error(`exit ${code} for: ${cmd.slice(0, 90)}`));
        } else {
          resolve({ code, out });
        }
      });
    });
  });
}

function step(label) {
  console.log(`\n=== ${label} ===`);
}

async function main() {
  const conn = new Client();
  await new Promise((r, j) =>
    conn.on("ready", r).on("error", j).connect({
      host: HOST,
      port: PORT,
      username: USER,
      password: PASS,
      readyTimeout: 30000,
    }),
  );

  if (DEPLOY_KEY) {
    step("deploy key");
    await exec(
      conn,
      `test -f /root/.ssh/id_ed25519 || ssh-keygen -t ed25519 -N '' -C 'offerra-panel-deploy' -f /root/.ssh/id_ed25519`,
    );
    console.log("\n--- PUBLIC KEY: add this as a Deploy Key on GitHub (read-only) ---");
    await exec(conn, `cat /root/.ssh/id_ed25519.pub`);
    await exec(conn, `ssh-keyscan -t ed25519 github.com >> /root/.ssh/known_hosts 2>/dev/null; sort -u -o /root/.ssh/known_hosts /root/.ssh/known_hosts`);
    console.log("\n--- testing ssh auth to github (expect 'successfully authenticated') ---");
    await exec(conn, `timeout 20 ssh -o StrictHostKeyChecking=accept-new -T git@github.com 2>&1 | head -n 3`);
    conn.end();
    return;
  }

  step("current state");
  const isRepo = await exec(conn, `test -d ${REMOTE}/.git && echo yes || echo no`, { timeoutMs: 30000 });
  const fresh = isRepo.out.includes("no");

  if (fresh) {
    step("git init + remote");
    await exec(conn, `cd ${REMOTE} && git init -q -b ${BRANCH}`, { allowFail: false });
    await exec(conn, `cd ${REMOTE} && git remote add origin ${REPO_HTTPS}`, { allowFail: false });
    // Prod only ever reads; never let it try to push.
    await exec(conn, `cd ${REMOTE} && git remote set-url --push origin DISABLED`);
    await exec(conn, `cd ${REMOTE} && git config core.fileMode false`);
  } else {
    console.log("already a git checkout, reusing it");
  }

  step(`fetch origin/${BRANCH}`);
  await exec(conn, `cd ${REMOTE} && git fetch --depth=1 origin ${BRANCH}`, {
    timeoutMs: 300000,
    allowFail: false,
  });

  step("attach HEAD without touching files");
  // --mixed moves HEAD + index only, so the working tree survives and the next
  // status shows exactly how prod drifted from git.
  await exec(conn, `cd ${REMOTE} && git reset --mixed FETCH_HEAD`, { allowFail: false });
  await exec(
    conn,
    `cd ${REMOTE} && git symbolic-ref HEAD refs/heads/${BRANCH} && git branch --set-upstream-to=origin/${BRANCH} ${BRANCH} 2>/dev/null || true`,
  );

  step("drift: prod vs git (tracked files only)");
  const status = await exec(conn, `cd ${REMOTE} && git status --porcelain`, { timeoutMs: 120000 });
  const lines = status.out.split("\n").map((l) => l.trimEnd()).filter((l) => l.trim());
  const modified = lines.filter((l) => l.startsWith(" M") || l.startsWith("M "));
  const deleted = lines.filter((l) => l.includes("D "));
  const untracked = lines.filter((l) => l.startsWith("??"));

  console.log(`\nmodified vs git: ${modified.length}`);
  modified.slice(0, 40).forEach((l) => console.log("  " + l));
  console.log(`missing on prod: ${deleted.length}`);
  deleted.slice(0, 40).forEach((l) => console.log("  " + l));
  console.log(`untracked on prod: ${untracked.length}`);
  untracked.slice(0, 40).forEach((l) => console.log("  " + l));

  if (!ALIGN) {
    console.log(
      "\nInspect only. Rerun with --align to reset tracked files to git " +
        "(ignored paths like .env, storage, offers, vendor are left alone).",
    );
    conn.end();
    return;
  }

  step(`align tracked files to origin/${BRANCH}`);
  await exec(conn, `cd ${REMOTE} && git reset --hard FETCH_HEAD`, { allowFail: false });
  await exec(conn, `cd ${REMOTE} && git log --oneline -3`);
  await exec(conn, `cd ${REMOTE} && git status --porcelain | head -n 20`);

  conn.end();
  console.log("\nPanel is now a git checkout. Deploys: node scripts/deploy.cjs");
}

main().catch((e) => {
  console.error("\nFAILED:", e.message);
  process.exit(1);
});
