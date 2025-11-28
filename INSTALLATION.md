# Installation Guide

Complete installation guide for the Volatus Aerospace WordPress site.

## Prerequisites

Before you begin, ensure you have the following installed:

- **Node.js** (v14 or higher) and npm
- **Docker** and **Docker Compose** (for local development)
- OR access to a **web hosting service** with:
  - PHP 7.4 or higher
  - MySQL 5.7 or higher
  - Apache/Nginx web server

## Option 1: Local Development with Docker (Recommended)

### Step 1: Clone/Download the Project

```bash
cd /path/to/project
```

### Step 2: Install Node Dependencies

```bash
npm install
```

### Step 3: Start Docker Containers

```bash
npm run start
# OR
docker-compose up -d
```

### Step 4: Access WordPress

1. Open your browser and go to `http://localhost:8080`
2. Complete the WordPress installation wizard:
   - Select your language
   - Enter site title: "Volatus Aerospace"
   - Enter admin username, password, and email
   - Click "Install WordPress"

### Step 5: Install Required Components

1. **Install Hello Elementor Theme:**
   - Go to Appearance → Themes
   - Click "Add New"
   - Search for "Hello Elementor"
   - Click "Install" then "Activate"

2. **Activate Child Theme:**
   - Go to Appearance → Themes
   - Find "Hello Elementor Child"
   - Click "Activate"

3. **Install Elementor Plugin:**
   - Go to Plugins → Add New
   - Search for "Elementor"
   - Click "Install Now" then "Activate"

### Step 6: Build Assets

```bash
npm run build
```

### Step 7: Configure Menus

1. Go to Appearance → Menus
2. Create a new menu named "Primary Menu"
3. Add menu items (see `menu-structure.md` for reference)
4. Assign to "Primary Menu" location
5. Create "Footer Menu" and assign to "Footer Menu" location

### Step 8: Configure Widgets

1. Go to Appearance → Widgets
2. Add widgets to footer areas:
   - Footer Column 1: About text
   - Footer Column 2: Quick Links menu
   - Footer Column 3: Services links
   - Footer Column 4: Contact information

## Option 2: Traditional Web Hosting

### Step 1: Upload Files

1. Upload the entire `wp-content` folder to your web server
2. Ensure WordPress core files are in the root directory

### Step 2: Set Permissions

```bash
chmod 755 wp-content/themes/hello-elementor-child
chmod 644 wp-content/themes/hello-elementor-child/*.php
```

### Step 3: Install WordPress

1. Access your domain in a browser
2. Complete WordPress installation
3. Follow Steps 5-8 from Option 1

## Development Workflow

### Watch for Changes

During development, use the watch command to automatically compile SCSS and JS:

```bash
npm run dev
```

This will:
- Watch for SCSS file changes and compile to CSS
- Watch for JS file changes and minify
- Reload browser automatically (if browser-sync is configured)

### Build for Production

Before deploying to production:

```bash
npm run build
```

This will:
- Compile and minify CSS
- Minify JavaScript
- Generate source maps

## Troubleshooting

### Theme Not Appearing

- Ensure Hello Elementor parent theme is installed first
- Check that `style.css` has correct `Template: hello-elementor`
- Verify file permissions

### Menu Not Displaying

- Go to Appearance → Menus
- Ensure menu is assigned to "Primary Menu" location
- Clear browser cache

### Styles Not Loading

- Run `npm run build` to compile SCSS
- Check browser console for 404 errors
- Verify file paths in `functions.php`

### Docker Issues

- Ensure Docker is running: `docker ps`
- Check container logs: `docker-compose logs`
- Restart containers: `docker-compose restart`

## Production Deployment Checklist

- [ ] Run `npm run build` to compile assets
- [ ] Update `wp-config.php` with production database credentials
- [ ] Set `WP_DEBUG` to `false` in `wp-config.php`
- [ ] Update site URL in WordPress settings
- [ ] Install security plugin (Wordfence, etc.)
- [ ] Set up SSL certificate
- [ ] Configure backup solution
- [ ] Test all forms and functionality
- [ ] Optimize images
- [ ] Set up caching (WP Super Cache, W3 Total Cache)

## Support

For issues or questions:
- Check WordPress Codex: https://codex.wordpress.org/
- Elementor Documentation: https://elementor.com/help/
- Hello Elementor Theme: https://elementor.com/hello-theme/

