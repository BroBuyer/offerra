#!/bin/bash
# Nightly encrypted panel backup → restic repo on the backup VPS (SFTP).
# Secrets live in /root/offerra-backup.env (not git). Safe to re-run.
set -euo pipefail

ENV_FILE="${OFFERRA_BACKUP_ENV:-/root/offerra-backup.env}"
PANEL="${OFFERRA_PANEL_PATH:-/var/www/offerra}"
WORK="${OFFERRA_BACKUP_WORK:-/var/backups/offerra-work}"
LOCK=/var/lock/offerra-backup.lock
KEEP_DAILY="${OFFERRA_BACKUP_KEEP_DAILY:-14}"

if [ "$(id -u)" -ne 0 ]; then
  echo "Run as root."
  exit 1
fi

if [ ! -f "${ENV_FILE}" ]; then
  echo "Missing ${ENV_FILE}"
  exit 1
fi
# shellcheck disable=SC1090
set -a
# shellcheck source=/dev/null
. "${ENV_FILE}"
set +a

: "${RESTIC_REPOSITORY:?RESTIC_REPOSITORY missing}"
if [ -z "${RESTIC_PASSWORD:-}" ] && [ -z "${RESTIC_PASSWORD_FILE:-}" ]; then
  echo "RESTIC_PASSWORD or RESTIC_PASSWORD_FILE required"
  exit 1
fi

exec 9>"${LOCK}"
if ! flock -n 9; then
  echo "backup already running"
  exit 0
fi

log() { echo "[$(date -Is)] $*"; }

need() { command -v "$1" >/dev/null || { echo "missing $1"; exit 1; }; }
need restic
need pg_dump
need flock

mkdir -p "${WORK}"
chmod 700 "${WORK}"

free_kb=$(df -Pk / | awk 'NR==2 {print $4}')
if [ "${free_kb}" -lt 1048576 ]; then
  log "refusing: less than 1GiB free on /"
  exit 1
fi

get_env() {
  local key="$1"
  python3 - "$PANEL/.env" "$key" <<'PY'
import sys
path, key = sys.argv[1], sys.argv[2]
for raw in open(path, encoding="utf-8"):
    line = raw.strip()
    if not line or line.startswith("#") or "=" not in line:
        continue
    k, _, v = line.partition("=")
    if k != key:
        continue
    v = v.strip()
    if len(v) >= 2 and v[0] == v[-1] and v[0] in ("'", '"'):
        v = v[1:-1]
    print(v, end="")
    break
PY
}

DB_CONNECTION="$(get_env DB_CONNECTION)"
DB_HOST="$(get_env DB_HOST)"
DB_PORT="$(get_env DB_PORT)"
DB_DATABASE="$(get_env DB_DATABASE)"
DB_USERNAME="$(get_env DB_USERNAME)"
DB_PASSWORD="$(get_env DB_PASSWORD)"

if [ "${DB_CONNECTION}" != "pgsql" ]; then
  log "expected pgsql, got ${DB_CONNECTION:-empty}"
  exit 1
fi

DUMP="${WORK}/pgsql.dump"
log "pg_dump ${DB_DATABASE} @ ${DB_HOST:-127.0.0.1}:${DB_PORT:-5432}"
export PGPASSWORD="${DB_PASSWORD}"
pg_dump \
  --host="${DB_HOST:-127.0.0.1}" \
  --port="${DB_PORT:-5432}" \
  --username="${DB_USERNAME}" \
  --dbname="${DB_DATABASE}" \
  --format=custom \
  --file="${DUMP}" \
  --no-password
unset PGPASSWORD
chmod 600 "${DUMP}"

log "restic backup"
export RESTIC_REPOSITORY
if [ -n "${RESTIC_PASSWORD_FILE:-}" ]; then
  export RESTIC_PASSWORD_FILE
else
  export RESTIC_PASSWORD
fi
export RESTIC_COMPRESSION="${RESTIC_COMPRESSION:-auto}"

SSH_KEY="${BACKUP_SSH_KEY:-/root/.ssh/offerra-backup}"
SFTP_ARGS="-o IdentitiesOnly=yes -o StrictHostKeyChecking=yes"
if [ -f "${SSH_KEY}" ]; then
  SFTP_ARGS="-i ${SSH_KEY} ${SFTP_ARGS}"
fi

restic backup \
  --one-file-system \
  -o "sftp.args=${SFTP_ARGS}" \
  --tag offerra-panel \
  "${DUMP}" \
  "${PANEL}/.env" \
  "${PANEL}/storage/app"

log "restic forget keep-daily ${KEEP_DAILY}"
restic forget \
  -o "sftp.args=${SFTP_ARGS}" \
  --tag offerra-panel \
  --keep-daily "${KEEP_DAILY}" \
  --prune

log "snapshots"
restic snapshots -o "sftp.args=${SFTP_ARGS}" --tag offerra-panel --compact | tail -20

rm -f "${DUMP}"
log "ok"
