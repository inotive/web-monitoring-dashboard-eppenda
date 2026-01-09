# 🚀 Deployment Guide ke VPS

Panduan lengkap deploy Laravel dengan Docker ke VPS menggunakan Termius atau CLI.

## 📋 Prerequisites di VPS

1. **Docker & Docker Compose** sudah terinstall
2. **Git** untuk clone repository
3. **Port 80 atau 8080** terbuka di firewall

---

## 🔧 Step 1: Install Docker di VPS (Jika Belum)

```bash
# Update system
sudo apt update && sudo apt upgrade -y

# Install Docker
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh

# Add user ke docker group (agar tidak perlu sudo)
sudo usermod -aG docker $USER

# Logout dan login lagi, atau jalankan:
newgrp docker

# Verify Docker
docker --version
docker compose version
```

---

## 🚀 Step 2: Clone & Setup Project

```bash
# Clone repository
cd /var/www
git clone <your-repo-url> web-monitoring-dashboard-eppenda
cd web-monitoring-dashboard-eppenda

# Copy environment file
cp .env.docker .env

# Edit .env jika perlu (database password, dll)
nano .env
```

---

## ⚙️ Step 3: Konfigurasi untuk Production

### Edit `.env` untuk Production:

```bash
nano .env
```

Update nilai berikut:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=http://your-domain.com

# Database (sesuaikan jika perlu)
DB_DATABASE=eppenda
DB_USERNAME=eppenda
DB_PASSWORD=YourSecurePassword123!

# Cache & Session
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
```

### Ubah Port Nginx (Opsional):

Jika ingin pakai port 80 (default HTTP):

```bash
nano docker-compose.yml
```

Ubah baris ini:

```yaml
ports:
    - "80:80" # dari "8080:80"
```

---

## 🏃 Step 4: Build & Run Docker

```bash
# Build images
docker compose build --no-cache

# Start containers
docker compose up -d

# Cek status
docker compose ps
```

---

## 🔑 Step 5: Setup Laravel

```bash
# Install dependencies
docker compose exec php composer install --optimize-autoloader --no-dev

# Generate app key
docker compose exec php php artisan key:generate

# Run migrations
docker compose exec php php artisan migrate --force

# Create storage link
docker compose exec php php artisan storage:link

# Optimize untuk production
docker compose exec php php artisan config:cache
docker compose exec php php artisan route:cache
docker compose exec php php artisan view:cache

# Set permissions
docker compose exec -u root php chown -R laravel:www-data storage bootstrap/cache
docker compose exec -u root php chmod -R 775 storage bootstrap/cache
```

---

## ✅ Step 6: Verify

```bash
# Cek logs
docker compose logs -f

# Test akses
curl http://localhost:8080
# atau
curl http://your-vps-ip:8080
```

Buka browser: `http://your-vps-ip:8080`

---

## 🔄 Update Aplikasi (Git Pull)

```bash
# Pull latest code
git pull origin main

# Rebuild containers (jika ada perubahan Dockerfile)
docker compose build

# Restart containers
docker compose up -d

# Run migrations (jika ada)
docker compose exec php php artisan migrate --force

# Clear & rebuild cache
docker compose exec php php artisan config:cache
docker compose exec php php artisan route:cache
docker compose exec php php artisan view:cache
```

---

## 🛠️ Management Commands

### Start/Stop Containers:

```bash
# Start
docker compose up -d

# Stop
docker compose down

# Restart
docker compose restart

# Restart specific service
docker compose restart nginx
```

### View Logs:

```bash
# All logs
docker compose logs -f

# Specific service
docker compose logs -f nginx
docker compose logs -f php
docker compose logs -f mysql
```

### Access Container Shell:

```bash
# PHP container
docker compose exec php bash

# MySQL
docker compose exec mysql mysql -u eppenda -p

# Root access (untuk fix permissions)
docker compose exec -u root php bash
```

### Laravel Commands:

```bash
# Artisan
docker compose exec php php artisan <command>

# Examples:
docker compose exec php php artisan migrate
docker compose exec php php artisan cache:clear
docker compose exec php php artisan queue:work
docker compose exec php php artisan tinker

# Composer
docker compose exec php composer install
docker compose exec php composer dump-autoload
```

---

## 🔒 Security Best Practices

### 1. Firewall Setup:

```bash
# Install UFW
sudo apt install ufw

# Allow SSH
sudo ufw allow 22/tcp

# Allow HTTP/HTTPS
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp

# Enable firewall
sudo ufw enable
```

### 2. Change Default Passwords:

Edit `.env` dan ubah:

-   `DB_PASSWORD` - password database yang kuat
-   Tambahkan `REDIS_PASSWORD` jika perlu

### 3. Setup SSL (Recommended):

Gunakan Nginx Proxy Manager atau Traefik untuk SSL otomatis.

---

## 🔄 Auto-Start on Boot

```bash
# Docker containers akan auto-restart karena setting:
# restart: unless-stopped

# Verify
docker compose ps
```

---

## 📊 Monitoring

### Check Resource Usage:

```bash
# Docker stats
docker stats

# Disk usage
docker system df

# Container logs size
du -sh /var/lib/docker/containers/*/*-json.log
```

### Clean Up:

```bash
# Remove unused images
docker image prune -a

# Remove unused volumes (HATI-HATI!)
docker volume prune

# Full cleanup
docker system prune -a --volumes
```

---

## 🐛 Troubleshooting

### Container tidak start:

```bash
# Cek logs
docker compose logs

# Cek status
docker compose ps

# Rebuild
docker compose down
docker compose build --no-cache
docker compose up -d
```

### Permission errors:

```bash
docker compose exec -u root php chown -R laravel:www-data storage bootstrap/cache
docker compose exec -u root php chmod -R 775 storage bootstrap/cache
```

### Database connection error:

```bash
# Cek MySQL logs
docker compose logs mysql

# Restart MySQL
docker compose restart mysql

# Wait 10 detik, lalu test
docker compose exec php php artisan migrate
```

### Port already in use:

```bash
# Cek port yang digunakan
sudo netstat -tulpn | grep :80

# Ubah port di docker-compose.yml
nano docker-compose.yml
# Ganti "80:80" jadi "8080:80"
```

---

## 📝 Quick Reference

| Task            | Command                                           |
| --------------- | ------------------------------------------------- |
| **Start**       | `docker compose up -d`                            |
| **Stop**        | `docker compose down`                             |
| **Logs**        | `docker compose logs -f`                          |
| **Shell**       | `docker compose exec php bash`                    |
| **Migrate**     | `docker compose exec php php artisan migrate`     |
| **Cache Clear** | `docker compose exec php php artisan cache:clear` |
| **Optimize**    | `docker compose exec php php artisan optimize`    |
| **Update Code** | `git pull && docker compose restart`              |

---

## 🎯 Production Checklist

-   [ ] `APP_ENV=production` di `.env`
-   [ ] `APP_DEBUG=false` di `.env`
-   [ ] Database password yang kuat
-   [ ] Firewall configured (UFW)
-   [ ] SSL certificate installed (Let's Encrypt)
-   [ ] Backup strategy in place
-   [ ] Monitoring setup
-   [ ] Log rotation configured
-   [ ] Auto-restart enabled (`restart: unless-stopped`)

---

## 🔗 Useful Links

-   Docker Docs: https://docs.docker.com/
-   Laravel Deployment: https://laravel.com/docs/deployment
-   Nginx Config: https://nginx.org/en/docs/

---

**Need Help?** Check logs first: `docker compose logs -f`
