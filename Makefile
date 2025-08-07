# Laravel Project Makefile

.PHONY: dev install update test migrate fresh seed cache-clear route-clear config-clear view-clear optimize help

# Default target
.DEFAULT_GOAL := help

# Development server
dev:
	composer run dev

# Install dependencies
install:
	composer install
	npm install

# Update dependencies
update:
	composer update
	npm update

# Run tests
test:
	php artisan test

# Database migrations
migrate:
	php artisan migrate

# Fresh migration with seeding
fresh:
	php artisan migrate:fresh --seed

# Run seeders
seed:
	php artisan db:seed

# Clear application cache
cache-clear:
	php artisan cache:clear

# Clear route cache
route-clear:
	php artisan route:clear

# Clear config cache
config-clear:
	php artisan config:clear

# Clear view cache
view-clear:
	php artisan view:clear

# Optimize application
optimize:
	php artisan optimize

# Show available commands
help:
	@echo "Available commands:"
	@echo "  make dev          - Run development server (composer run dev)"
	@echo "  make install      - Install composer and npm dependencies"
	@echo "  make update       - Update composer and npm dependencies"
	@echo "  make test         - Run Laravel tests"
	@echo "  make migrate      - Run database migrations"
	@echo "  make fresh        - Fresh migration with seeding"
	@echo "  make seed         - Run database seeders"
	@echo "  make cache-clear  - Clear application cache"
	@echo "  make route-clear  - Clear route cache"
	@echo "  make config-clear - Clear config cache"
	@echo "  make view-clear   - Clear view cache"
	@echo "  make optimize     - Optimize application"
	@echo "  make help         - Show this help message"
