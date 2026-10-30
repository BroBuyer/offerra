#!/bin/bash
# Restore a panel from the restic backup box onto THIS machine.
# Does not overwrite until you pass --apply.
#
# Typical recovery of a dead panel:
#   1. New Ubuntu box, install nginx/php/postgres, clone origin/main to /var/www/offerra
#   2. Copy /root/offerra-backup.env + /root/.ssh/offerra-backup from a saved copy
#      (or re-create them: you MUST have the restic password)
#   3. bash scripts/panel-backup-restore.sh            # lists snapshots
#   4. bash scripts/panel-backup-restore.sh --apply    # restore latest
#   5. composer install, npm run build, php artisan migrate --force, restart php-fpm
set -euo pipefail

ENV_FILE="${OFFERRA_BACKUP_ENV:-/root/offerra-backup.env}"
PANEL="${OFFERRA_PANEL_PATH:-/var/www/offerra}"
TARGET="${OFFERRA_RESTORE_TARGET:-/var/backups/offerra-restore}"
APPLY=0
SNAP="${OFFERRA_RESTORE_SNAPSHOT:-latest}"

for arg in "$@"; do
  case "$arg" in
    --apply) APPLY=1 ;;
    --snapshot=*) SNAP="${arg#*=}" ;;
    --list) APPLY=0 ;;
    *) echo "unknown arg: $arg"; exit 1 ;;
  esac
done

if [ ! -f "${ENV_FILE}" ]; then
  echo "Missing ${ENV_FILE} — you need the restic password and SSH key."
  exit 1
fi
# shellcheck disable=SC1090
set -a
# shellcheck source=/dev/null
. "${ENV_FILE}"
set +a

: "${RESTIC_REPOSITORY:?}"
SSH_KEY="${BACKUP_SSH_KEY:-/root/.ssh/offerra-backup}"
SFTP_ARGS="-o IdentitiesOnly=yes -o StrictHostKeyChecking=yes"
if [ -f "${SSH_KEY}" ]; then
  SFTP_ARGS="-i ${SSH_KEY} ${SFTP_ARGS}"
fi

echo "repository: ${RESTIC_REPOSITORY}"
restic snapshots -o "sftp.args=${SFTP_ARGS}" --tag offerra-panel --compact

if [ "${APPLY}" -ne 1 ]; then
  echo
  echo "Re-run with --apply to restore ${SNAP} into ${TARGET}"
  echo "Then:"
  echo "  cp ${TARGET}${PANEL}/.env ${PANEL}/.env"
  echo "  rsync -a ${TARGET}${PANEL}/storage/app/ ${PANEL}/storage/app/"
  echo "  pg_restore --clean --if-exists -d \$DB_DATABASE ${TARGET}/var/backups/offerra-work/pgsql.dump"
  exit 0
fi

mkdir -p "${TARGET}"
chmod 700 "${TARGET}"
echo "restoring ${SNAP} → ${TARGET}"
restic restore "${SNAP}" \
  -o "sftp.args=${SFTP_ARGS}" \
  --target "${TARGET}" \
  --tag offerra-panel

echo "restored files:"
find "${TARGET}" -type f | head -50
echo
echo "Next: copy .env, rsync storage/app, pg_restore the dump, chown www-data storage."
