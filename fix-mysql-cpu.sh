#!/bin/bash

# Fix MySQL CPU Compatibility Issue
# Downgrade MySQL 8.0 to 5.7 for older CPU support

set -e

echo "🔧 Fixing MySQL CPU compatibility issue..."
echo ""

# Colors
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m'

# Stop all containers
echo -e "${YELLOW}🛑 Stopping all containers...${NC}"
docker compose down

# Remove old MySQL container and volume
echo -e "${YELLOW}🗑️  Removing old MySQL container...${NC}"
docker compose rm -f mysql || true

# Optional: Remove old MySQL 8.0 image
echo -e "${YELLOW}🗑️  Removing old MySQL 8.0 image...${NC}"
docker rmi mysql:8.0 2>/dev/null || echo "MySQL 8.0 image not found (OK)"

# Pull MySQL 5.7 image
echo -e "${YELLOW}📥 Pulling MySQL 5.7 image...${NC}"
docker compose pull mysql

# Start all containers
echo -e "${YELLOW}🚀 Starting containers with MySQL 5.7...${NC}"
docker compose up -d

# Wait for MySQL to be ready
echo -e "${YELLOW}⏳ Waiting for MySQL to be ready (40 seconds)...${NC}"
sleep 40

# Check MySQL version
echo -e "${YELLOW}📊 Checking MySQL version...${NC}"
docker compose exec mysql mysql -V || echo "Cannot check version yet"

# Test MySQL connection
echo -e "${YELLOW}🔍 Testing MySQL connection...${NC}"
if docker compose exec mysql mysql -u eppenda -psecret -e "SELECT 1;" &>/dev/null; then
    echo -e "${GREEN}✅ MySQL Connected Successfully!${NC}"
else
    echo -e "${RED}❌ MySQL Connection Failed${NC}"
    echo "Checking logs..."
    docker compose logs mysql | tail -30
    exit 1
fi

# Fix permissions
echo -e "${YELLOW}🔐 Fixing permissions...${NC}"
docker compose exec -u root php chown -R laravel:www-data /var/www/html || true
docker compose exec -u root php chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache || true

# Create directories
echo -e "${YELLOW}📁 Creating directories...${NC}"
docker compose exec -u root php mkdir -p /var/www/html/storage/framework/{sessions,views,cache} || true
docker compose exec -u root php mkdir -p /var/www/html/storage/logs || true
docker compose exec -u root php mkdir -p /var/www/html/bootstrap/cache || true

# Install composer if needed
if ! docker compose exec php test -d /var/www/html/vendor; then
    echo -e "${YELLOW}📦 Installing Composer dependencies...${NC}"
    docker compose exec php composer install --no-interaction --optimize-autoloader --no-dev || \
        docker compose exec php composer install --no-interaction --optimize-autoloader --no-dev --ignore-platform-reqs
fi

# Generate key if needed
echo -e "${YELLOW}🔑 Generating application key...${NC}"
docker compose exec php php artisan key:generate --force || true

# Clear cache
echo -e "${YELLOW}🧹 Clearing cache...${NC}"
docker compose exec php php artisan config:clear || true
docker compose exec php php artisan cache:clear || true

# Run migrations
echo -e "${YELLOW}🗄️  Running migrations...${NC}"
if docker compose exec php php artisan migrate --force; then
    echo -e "${GREEN}✅ Migrations completed!${NC}"
else
    echo -e "${RED}❌ Migration failed${NC}"
    echo "This might be normal if migrations already ran"
fi

# Storage link
echo -e "${YELLOW}🔗 Creating storage link...${NC}"
docker compose exec php php artisan storage:link || true

# Cache for production
echo -e "${YELLOW}⚡ Caching configuration...${NC}"
docker compose exec php php artisan config:cache || true
docker compose exec php php artisan route:cache || true
docker compose exec php php artisan view:cache || true

# Final permission fix
echo -e "${YELLOW}🔐 Final permission fix...${NC}"
docker compose exec -u root php chown -R laravel:www-data /var/www/html/storage || true
docker compose exec -u root php chmod -R 775 /var/www/html/storage || true

# Show status
echo ""
echo -e "${GREEN}✅ MySQL CPU compatibility fix completed!${NC}"
echo ""
echo -e "${YELLOW}📊 Container Status:${NC}"
docker compose ps
echo ""
echo -e "${YELLOW}🔍 MySQL Version:${NC}"
docker compose exec mysql mysql -V
echo ""
echo -e "${GREEN}🎉 All done!${NC}"
echo ""
echo -e "${YELLOW}Access your services:${NC}"
echo "  - Laravel App: http://$(hostname -I | awk '{print $1}'):8080"
echo "  - phpMyAdmin:  http://$(hostname -I | awk '{print $1}'):8081"
echo ""
