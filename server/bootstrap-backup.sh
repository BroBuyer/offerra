#!/bin/bash
# Offerra backup box — Ubuntu 22.04 / 24.04
# Encrypted restic repo over SFTP. The box never sees the restic password.
# Idempotent. Usage:
#   BACKUP_SSH_PUBKEY='ssh-ed25519 AAAA…' bash bootstrap-backup.sh
set -euo pipefail
export DEBIAN_FRONTEND=noninteractive

log() { echo "=== $* ==="; }

if [ "$(id -u)" -ne 0 ]; then
  echo "Run as root."
  exit 1
fi

BACKUP_USER="${BACKUP_USER:-offerra-backup}"
CHROOT_DIR="${CHROOT_DIR:-/srv/offerra-backup}"
REPO_DIR="${CHROOT_DIR}/repo"
HOME_DIR="/home/${BACKUP_USER}"

log "packages"
apt-get update -y
apt-get install -y \
  openssh-server \
  ufw \
  fail2ban \
  unattended-upgrades \
  curl ca-certificates \
  python3

hostnamectl set-hostname offerra-backup 2>/dev/null || hostname offerra-backup

log "backup user ${BACKUP_USER}"
if ! id "${BACKUP_USER}" >/dev/null 2>&1; then
  useradd --system --create-home --home-dir "${HOME_DIR}" --shell /usr/sbin/nologin "${BACKUP_USER}"
fi
mkdir -p "${HOME_DIR}/.ssh" "${REPO_DIR}"
chmod 755 "${CHROOT_DIR}"
chown root:root "${CHROOT_DIR}"
chown "${BACKUP_USER}:${BACKUP_USER}" "${REPO_DIR}"
chmod 700 "${REPO_DIR}"
chown -R "${BACKUP_USER}:${BACKUP_USER}" "${HOME_DIR}"
chmod 700 "${HOME_DIR}" "${HOME_DIR}/.ssh"

if [ -n "${BACKUP_SSH_PUBKEY:-}" ]; then
  AUTH="${HOME_DIR}/.ssh/authorized_keys"
  touch "${AUTH}"
  if ! grep -qxF "${BACKUP_SSH_PUBKEY}" "${AUTH}"; then
    echo "${BACKUP_SSH_PUBKEY}" >> "${AUTH}"
  fi
  chown "${BACKUP_USER}:${BACKUP_USER}" "${AUTH}"
  chmod 600 "${AUTH}"
  log "installed ssh pubkey"
fi

log "sshd Match for ${BACKUP_USER}"
# Match must sit at the end of sshd_config. Drop-ins in sshd_config.d are
# included at the TOP on Ubuntu, so a Match there would swallow global settings.
MARKER="# offerra-backup sftp-only"
if ! grep -q "${MARKER}" /etc/ssh/sshd_config; then
  cat >> /etc/ssh/sshd_config <<EOF

${MARKER}
Match User ${BACKUP_USER}
    ChrootDirectory ${CHROOT_DIR}
    ForceCommand internal-sftp
    PasswordAuthentication no
    PubkeyAuthentication yes
    PermitTunnel no
    AllowAgentForwarding no
    AllowTcpForwarding no
    X11Forwarding no
EOF
fi
sshd -t
systemctl reload ssh 2>/dev/null || systemctl reload sshd

log "firewall"
ufw default deny incoming
ufw default allow outgoing
ufw allow OpenSSH
ufw --force enable

log "fail2ban"
systemctl enable --now fail2ban

log "unattended upgrades"
cat > /etc/apt/apt.conf.d/20auto-upgrades <<'EOF'
APT::Periodic::Update-Package-Lists "1";
APT::Periodic::Unattended-Upgrade "1";
EOF

log "done"
echo "CHROOT=${CHROOT_DIR}"
echo "REPO=${REPO_DIR}"
echo "USER=${BACKUP_USER}"
df -h / | tail -1
