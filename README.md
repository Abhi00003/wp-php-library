# Volatus Aerospace WordPress Site

A WordPress website built with Hello Elementor theme, featuring improved navigation and UI/UX for Volatus Aerospace business divisions.

## Project Structure

```
volatusaerospace-wordpress/
├── wp-content/
│   ├── themes/
│   │   └── hello-elementor-child/
│   │       ├── style.css
│   │       ├── functions.php
│   │       ├── header.php
│   │       ├── footer.php
│   │       ├── index.php
│   │       ├── single.php
│   │       ├── page.php
│   │       ├── template-parts/
│   │       │   ├── header-navigation.php
│   │       │   └── footer-widgets.php
│   │       └── assets/
│   │           ├── css/
│   │           │   ├── custom-styles.css
│   │           │   └── main.scss
│   │           └── js/
│   │               └── custom-scripts.js
│   └── plugins/
├── docker-compose.yml
├── Dockerfile
├── package.json
├── gulpfile.js
└── README.md
```

## Setup Instructions

### Prerequisites
- Node.js and npm installed
- Docker and Docker Compose (for local development)
- Or access to a web hosting service with PHP 7.4+ and MySQL

### Local Development Setup

1. **Install Node Dependencies**
   ```bash
   npm install
   ```

2. **Start Docker Environment** (if using Docker)
   ```bash
   npm run start
   ```
   WordPress will be available at `http://localhost:8080`

3. **Install WordPress** (if not using Docker)
   - Upload files to your web server
   - Create a MySQL database
   - Run WordPress installation wizard
   - Install Hello Elementor theme
   - Activate Hello Elementor Child theme

4. **Install Elementor Plugin**
   - Go to WordPress Admin → Plugins → Add New
   - Search for "Elementor" and install
   - Activate the plugin

5. **Build Assets**
   ```bash
   npm run build
   ```

6. **Watch for Changes** (development)
   ```bash
   npm run dev
   ```

## Features

### Navigation Structure
- **Home**: Main landing page
- **About Us**: Company information
- **Services**: 
  - Drone Inspections
  - Lidar Services
  - Aviation Services
- **Industries**: 
  - Energy & Utilities
  - Oil & Gas
  - Defense
  - Forestry & Conservation
  - Government & Public Agencies
  - Infrastructure & Transportation
  - Construction & Engineering
  - Mining & Aggregates
  - Precision Agriculture
  - Property Development & Maintenance
  - Public Safety
- **Equipment**:
  - Drone Store
  - Platforms
  - Volatus Engineering
- **Training**:
  - Canada Training Courses
  - UK Training Courses
  - Drones in Ed
  - The Drone Mentor
- **Investors**: Investor relations
- **Contact Us**: Contact information and form

### UI/UX Improvements
- Fixed header navigation for easy access
- Responsive mobile menu
- Smooth scrolling
- Improved footer with quick links and contact info
- Social media integration
- Newsletter signup form
- Modern, clean design aligned with aerospace industry

## Documentation

See `DOCUMENTATION.md` for detailed explanation of the approach, analysis, and improvements.

## License

MIT License

