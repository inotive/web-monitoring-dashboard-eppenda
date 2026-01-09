# Makefile for Docker commands
# Usage: make <command>

.PHONY: help build up down restart logs shell composer artisan npm migrate fresh seed test

# Default target
help:
	@echo "Available commands:"
	@echo "  make build         - Build Docker images"
	@echo "  make up            - Start all containers"
	@echo "  make down          - Stop all containers"
	@echo "  make restart       - Restart all containers"
	@echo "  make logs          - View container logs"
	@echo "  make shell         - Access PHP container shell"
	@echo "  make shell-root    - Access PHP container shell as root"
	@echo "  make composer      - Run composer commands (usage: make composer c='install')"
	@echo "  make artisan       - Run artisan commands (usage: make artisan c='migrate')"
	@echo "  make npm           - Run npm commands (usage: make npm c='install')"
	@echo "  make migrate       - Run database migrations"
	@echo "  make fresh         - Fresh migrate with seed"
	@echo "  make seed          - Run database seeders"
	@echo "  make test          - Run tests"
	@echo "  make setup         - Initial setup (install, migrate, key:generate)"
	@echo "  make queue         - Start queue worker"
	@echo "  make schedule      - Start scheduler"

# Build Docker images
build:
	docker compose build --no-cache

# Start containers
up:
	docker compose up -d

# Stop containers
down:
	docker compose down

# Restart containers
restart:
	docker compose restart

# View logs
logs:
	docker compose logs -f

# Access PHP shell
shell:
	docker compose exec php bash

# Access PHP shell as root
shell-root:
	docker compose exec -u root php bash

# Run composer command
composer:
	docker compose exec php composer $(c)

# Run artisan command
artisan:
	docker compose exec php php artisan $(c)

# Run npm command (requires node profile)
npm:
	docker compose run --rm node npm $(c)

# Database migrations
migrate:
	docker compose exec php php artisan migrate

# Fresh migrate with seed
fresh:
	docker compose exec php php artisan migrate:fresh --seed

# Run seeders
seed:
	docker compose exec php php artisan db:seed

# Run tests
test:
	docker compose exec php php artisan test

# Initial setup
setup:
	@echo "Setting up Laravel application in Docker..."
	@cp .env.docker .env
	docker compose up -d
	@sleep 10
	docker compose exec php composer install
	docker compose exec php php artisan key:generate
	docker compose exec php php artisan migrate
	docker compose exec php php artisan storage:link
	docker compose exec php chmod -R 775 storage bootstrap/cache
	@echo "Setup complete! Access the app at http://localhost:8080"

# Start queue worker
queue:
	docker compose --profile queue up -d queue

# Start scheduler
schedule:
	docker compose --profile scheduler up -d scheduler

# Compile assets
assets:
	docker compose run --rm node npm install
	docker compose run --rm node npm run prod

# Clear all caches
cache-clear:
	docker compose exec php php artisan cache:clear
	docker compose exec php php artisan config:clear
	docker compose exec php php artisan route:clear
	docker compose exec php php artisan view:clear

# Optimize for production
optimize:
	docker compose exec php php artisan config:cache
	docker compose exec php php artisan route:cache
	docker compose exec php php artisan view:cache

# Full rebuild
rebuild:
	docker compose down -v
	docker compose build --no-cache
	docker compose up -d
