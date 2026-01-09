#!/bin/bash

# Deploy Script untuk VPS
# Usage: ./deploy.sh

set -e

echo "🚀 Starting deployment..."

# Colors
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

# Check if .env exists
if [ ! -f .env ]; then
    echo -e "${YELLOW}⚠️  .env not found. Copying from .env.docker...${NC}"
    cp .env.docker .env
    echo -e "${GREEN}✅ .env created. Please edit it with your production settings.${NC}"
    echo -e "${YELLOW}Run: nano .env${NC}"
    exit 1
fi

# Pull latest code
echo -e "${YELLOW}📥 Pulling latest code...${NC}"
git pull origin main || git pull origin master

# Build containers
echo -e "${YELLOW}🔨 Building Docker images...${NC}"
docker compose build --no-cache

# Stop old containers
echo -e "${YELLOW}🛑 Stopping old containers...${NC}"
docker compose down

# Start new containers
echo -e "${YELLOW}🚀 Starting containers...${NC}"
docker compose up -d

# Wait for MySQL to be ready
echo -e "${YELLOW}⏳ Waiting for MySQL to be ready...${NC}"
sleep 10

# Install/Update dependencies
echo -e "${YELLOW}📦 Installing dependencies...${NC}"
docker compose exec -T php composer install --optimize-autoloader --no-dev

# Run migrations
echo -e "${YELLOW}🗄️  Running migrations...${NC}"
docker compose exec -T php php artisan migrate --force

# Create storage link
echo -e "${YELLOW}🔗 Creating storage link...${NC}"
docker compose exec -T php php artisan storage:link || true

# Clear and cache config
echo -e "${YELLOW}🧹 Clearing caches...${NC}"
docker compose exec -T php php artisan config:clear
docker compose exec -T php php artisan cache:clear
docker compose exec -T php php artisan view:clear
docker compose exec -T php php artisan route:clear

echo -e "${YELLOW}⚡ Optimizing for production...${NC}"
docker compose exec -T php php artisan config:cache
docker compose exec -T php php artisan route:cache
docker compose exec -T php php artisan view:cache

# Fix permissions
echo -e "${YELLOW}🔐 Fixing permissions...${NC}"
docker compose exec -u root -T php chown -R laravel:www-data storage bootstrap/cache
docker compose exec -u root -T php chmod -R 775 storage bootstrap/cache

# Show status
echo -e "${GREEN}✅ Deployment completed!${NC}"
echo ""
echo -e "${YELLOW}📊 Container Status:${NC}"
docker compose ps

echo ""
echo -e "${GREEN}🎉 Application is running!${NC}"
echo -e "${YELLOW}Access at: http://$(hostname -I | awk '{print $1}'):8080${NC}"
echo ""
echo -e "${YELLOW}💡 Useful commands:${NC}"
echo "  - View logs: docker compose logs -f"
echo "  - Stop: docker compose down"
echo "  - Restart: docker compose restart"
