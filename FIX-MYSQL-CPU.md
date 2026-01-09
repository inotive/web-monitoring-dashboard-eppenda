# 🔧 Fix MySQL CPU Compatibility Issue

## 🚨 Problem

Error saat start MySQL container:

```
Fatal glibc error: CPU does not support x86-64-v2
```

**Penyebab:** VPS menggunakan CPU lama yang tidak support instruction set x86-64-v2 yang diperlukan MySQL 8.0.

---

## ✅ Solution

Downgrade MySQL dari **8.0** ke **5.7** yang support CPU lama.

### **Perubahan di docker-compose.yml:**

```yaml
# BEFORE (MySQL 8.0 - tidak jalan di CPU lama)
mysql:
    image: mysql:8.0

# AFTER (MySQL 5.7 - support CPU lama)
mysql:
    image: mysql:5.7
```

---

## 🚀 Cara Fix di VPS

### **1. Pull Latest Code**

```bash
# Di VPS
cd /var/www/web-monitoring-dashboard-eppenda
git pull origin main
```

### **2. Stop & Remove Old MySQL Container**

```bash
# Stop semua containers
docker compose down

# PENTING: Hapus MySQL container lama
docker compose rm -f mysql

# Optional: Hapus old image
docker rmi mysql:8.0
```

### **3. Start dengan MySQL 5.7**

```bash
# Pull MySQL 5.7 image
docker compose pull mysql

# Start semua containers
docker compose up -d

# Tunggu MySQL ready
sleep 30
```

### **4. Verify MySQL Running**

```bash
# Cek status
docker compose ps

# Cek logs MySQL (harusnya tidak ada error)
docker compose logs mysql | tail -20

# Test connection
docker compose exec mysql mysql -u eppenda -psecret -e "SELECT VERSION();"
```

Harusnya muncul:

```
+-----------+
| VERSION() |
+-----------+
| 5.7.x     |
+-----------+
```

### **5. Run Migration**

```bash
# Clear config cache
docker compose exec php php artisan config:clear

# Run migration
docker compose exec php php artisan migrate --force
```

---

## 🔍 Verify Fix

### **1. Cek phpMyAdmin**

Buka: `http://103.181.129.35:8081`

Harusnya bisa login dan lihat database.

### **2. Cek Laravel App**

Buka: `http://103.181.129.35:8080`

Harusnya aplikasi jalan normal.

### **3. Cek MySQL Version**

```bash
docker compose exec mysql mysql -V
```

---

## 📋 Complete Fix Script

Copy-paste ini di VPS:

```bash
#!/bin/bash

echo "🔧 Fixing MySQL CPU compatibility issue..."

# Stop containers
docker compose down

# Remove old MySQL container
docker compose rm -f mysql

# Pull new MySQL 5.7 image
docker compose pull mysql

# Start containers
docker compose up -d

# Wait for MySQL
echo "⏳ Waiting for MySQL to be ready (30 seconds)..."
sleep 30

# Check MySQL version
echo "📊 MySQL Version:"
docker compose exec mysql mysql -V

# Test connection
echo "🔍 Testing MySQL connection..."
docker compose exec mysql mysql -u eppenda -psecret -e "SELECT 1;" && echo "✅ MySQL Connected!" || echo "❌ Connection Failed"

# Clear cache
docker compose exec php php artisan config:clear

# Run migration
echo "🗄️  Running migrations..."
docker compose exec php php artisan migrate --force

# Check status
echo "📊 Container Status:"
docker compose ps

echo ""
echo "✅ Fix completed!"
echo "🌐 Access phpMyAdmin: http://103.181.129.35:8081"
echo "🌐 Access Laravel App: http://103.181.129.35:8080"
```

---

## ⚠️ Important Notes

### **Data Migration**

Jika sebelumnya sudah ada data di MySQL 8.0:

1. **Export data** dari MySQL 8.0 (jika masih bisa akses)
2. **Import** ke MySQL 5.7 setelah fix

### **MySQL 5.7 vs 8.0**

| Feature              | MySQL 5.7    | MySQL 8.0               |
| -------------------- | ------------ | ----------------------- |
| **CPU Support**      | ✅ Old & New | ❌ New only (x86-64-v2) |
| **Performance**      | Good         | Better                  |
| **Laravel Support**  | ✅ Full      | ✅ Full                 |
| **Production Ready** | ✅ Yes       | ✅ Yes                  |

**Kesimpulan:** MySQL 5.7 masih sangat bagus untuk production dan fully supported oleh Laravel!

---

## 🎯 Alternative Solutions

### **Option 1: Upgrade VPS CPU**

Jika mau tetap pakai MySQL 8.0, upgrade VPS ke CPU yang lebih baru.

### **Option 2: Use MariaDB**

MariaDB 10.x juga support CPU lama:

```yaml
mysql:
    image: mariadb:10.11
```

### **Option 3: Use PostgreSQL**

PostgreSQL juga option bagus:

```yaml
postgres:
    image: postgres:14-alpine
```

---

## 📞 Quick Reference

| Issue                     | Solution                                |
| ------------------------- | --------------------------------------- |
| CPU not support x86-64-v2 | Use MySQL 5.7                           |
| MySQL container crash     | Check logs: `docker compose logs mysql` |
| phpMyAdmin can't connect  | Restart: `docker compose restart`       |
| Migration failed          | Wait 30s after start, then retry        |

---

**Status:** ✅ Fixed with MySQL 5.7
