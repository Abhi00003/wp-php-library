#!/bin/bash

# WordPress Installation Script for Volatus Aerospace Site
# This script helps set up WordPress locally

echo "=========================================="
echo "Volatus Aerospace WordPress Setup"
echo "=========================================="
echo ""

# Check if Docker is installed
if ! command -v docker &> /dev/null; then
    echo "Error: Docker is not installed. Please install Docker first."
    exit 1
fi

# Check if Docker Compose is installed
if ! command -v docker-compose &> /dev/null; then
    echo "Error: Docker Compose is not installed. Please install Docker Compose first."
    exit 1
fi

echo "Starting Docker containers..."
docker-compose up -d

echo ""
echo "Waiting for WordPress to be ready..."
sleep 10

echo ""
echo "=========================================="
echo "WordPress is now running!"
echo "=========================================="
echo ""
echo "WordPress URL: http://localhost:8080"
echo "phpMyAdmin URL: http://localhost:8081"
echo ""
echo "Database Details:"
echo "  Host: db"
echo "  Database: wordpress"
echo "  Username: wordpress"
echo "  Password: wordpress"
echo ""
echo "Next Steps:"
echo "1. Visit http://localhost:8080"
echo "2. Complete WordPress installation"
echo "3. Install Hello Elementor theme"
echo "4. Activate Hello Elementor Child theme"
echo "5. Install Elementor plugin"
echo "6. Configure menus in Appearance > Menus"
echo ""
echo "To stop the containers, run: docker-compose down"
echo ""

