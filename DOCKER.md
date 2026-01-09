# Docker Setup for Web Monitoring Dashboard Eppenda

## 📦 Prerequisites

-   [Docker](https://www.docker.com/get-started) (v20.10 or higher)
-   [Docker Compose](https://docs.docker.com/compose/install/) (v2.0 or higher)

## 🚀 Quick Start

### Option 1: Using Makefile (Recommended)

```bash
# Initial setup (first time only)
make setup

# Start the application
make up

# Stop the application
make down
```

### Option 2: Manual Setup

```bash
# 1. Copy environment file
cp .env.docker .env

# 2. Build and start containers
docker compose up -d --build

# 3. Install dependencies
docker compose exec php composer install

# 4. Generate application key
docker compose exec php php artisan key:generate

# 5. Run migrations
docker compose exec php php artisan migrate

# 6. Create storage link
docker compose exec php php artisan storage:link

# 7. Set permissions
docker compose exec php chmod -R 775 storage bootstrap/cache
```

## 🌐 Access the Application

| Service         | URL                   | Description                            |
| --------------- | --------------------- | -------------------------------------- |
| **Application** | http://localhost:8080 | Main Laravel application               |
| **MySQL**       | localhost:3306        | Database (user: eppenda, pass: secret) |
| **Redis**       | localhost:6379        | Cache & Session storage                |

## 📋 Available Commands

### Docker Management

```bash
make build       # Build Docker images
make up          # Start all containers
make down        # Stop all containers
make restart     # Restart all containers
make logs        # View container logs
make shell       # Access PHP container shell
make shell-root  # Access PHP container shell as root
```

### Laravel Commands

```bash
# Run artisan commands
make artisan c='migrate'
make artisan c='tinker'
make artisan c='queue:work'

# Run composer commands
make composer c='install'
make composer c='dump-autoload'

# Database
make migrate     # Run migrations
make fresh       # Fresh migrate with seed
make seed        # Run seeders
```

### Asset Compilation

```bash
make assets      # Install npm and compile assets
make npm c='run dev'   # Development build
make npm c='run prod'  # Production build
```

### Cache & Optimization

```bash
make cache-clear   # Clear all caches
make optimize      # Optimize for production
```

### Queue & Scheduler

```bash
make queue         # Start queue worker
make schedule      # Start scheduler
```

## 📁 Docker Structure

```
project/
├── docker/
│   ├── nginx/
│   │   └── default.conf    # Nginx configuration
│   └── php/
│       ├── Dockerfile      # PHP-FPM image
│       └── php.ini         # PHP configuration
├── docker-compose.yml      # Docker services
├── .dockerignore           # Docker ignore file
├── .env.docker             # Docker environment
└── Makefile                # Shortcut commands
```

## 🔧 Services

| Service       | Image                | Purpose                         |
| ------------- | -------------------- | ------------------------------- |
| **php**       | php:8.2-fpm (custom) | PHP-FPM with Laravel extensions |
| **nginx**     | nginx:alpine         | Web server                      |
| **mysql**     | mysql:8.0            | Database                        |
| **redis**     | redis:alpine         | Cache, Session, Queue           |
| **node**      | node:20-alpine       | Asset compilation (on-demand)   |
| **queue**     | php:8.2-fpm (custom) | Queue worker (optional)         |
| **scheduler** | php:8.2-fpm (custom) | Task scheduler (optional)       |

## 🔒 Production Deployment

For production, update `.env` with:

```env
APP_ENV=production
APP_DEBUG=false
```

Then run:

```bash
# Optimize application
make optimize

# Compile assets for production
make assets

# Restart containers
make restart
```

## 🛠️ Troubleshooting

### Permission Issues

```bash
# Fix storage permissions
make shell-root
chmod -R 775 storage bootstrap/cache
chown -R laravel:www-data storage bootstrap/cache
```

### Database Connection Issues

```bash
# Check if MySQL is running
docker compose ps

# View MySQL logs
docker compose logs mysql

# Wait for MySQL to be ready (first run)
docker compose exec php php artisan migrate --force
```

### Clear Everything and Rebuild

```bash
make rebuild     # Full rebuild with fresh volumes
```

## 📝 Notes

-   The application runs on port **8080** to avoid conflicts with local services
-   MySQL data is persisted in a Docker volume (`mysql_data`)
-   Redis data is persisted in a Docker volume (`redis_data`)
-   Node.js service runs on-demand for asset compilation only

## 🔄 Updating

```bash
# Pull latest changes
git pull origin main

# Rebuild and restart
make build
make restart

# Run migrations if needed
make migrate
```
