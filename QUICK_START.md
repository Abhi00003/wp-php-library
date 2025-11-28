# Quick Start Guide

Get your Volatus Aerospace WordPress site up and running in minutes!

## 🚀 Quick Start (5 Minutes)

### Option 1: Docker (Easiest)

```bash
# 1. Install dependencies
npm install

# 2. Start WordPress
npm run start

# 3. Build assets
npm run build

# 4. Visit http://localhost:8080
# Complete WordPress installation wizard
```

### Option 2: Traditional Hosting

1. Upload `wp-content/themes/hello-elementor-child/` to your server
2. Install WordPress
3. Install Hello Elementor theme
4. Activate child theme
5. Install Elementor plugin
6. Run `npm run build` locally and upload compiled CSS

## 📋 Next Steps

1. **Install Hello Elementor Theme**
   - WordPress Admin → Appearance → Themes → Add New
   - Search "Hello Elementor" → Install → Activate

2. **Activate Child Theme**
   - Appearance → Themes → Activate "Hello Elementor Child"

3. **Install Elementor**
   - Plugins → Add New → Search "Elementor" → Install → Activate

4. **Create Menus**
   - Appearance → Menus → Create "Primary Menu"
   - Add items (see `menu-structure.md`)
   - Assign to "Primary Menu" location

5. **Configure Footer**
   - Appearance → Widgets
   - Add widgets to footer areas

## 🎨 Customization

- **Colors**: Edit CSS variables in `assets/css/main.scss`
- **Styles**: Modify `assets/css/custom-styles.css`
- **JavaScript**: Edit `assets/js/custom-scripts.js`
- **Templates**: Modify PHP files in theme directory

## 📚 Documentation

- **README.md** - Overview
- **INSTALLATION.md** - Detailed installation
- **DOCUMENTATION.md** - Design approach
- **DEPLOYMENT.md** - Production deployment
- **menu-structure.md** - Menu configuration

## 🛠️ Development

```bash
# Watch for changes (auto-compile)
npm run dev

# Build for production
npm run build

# Stop Docker
npm run stop
```

## ✅ Checklist

- [ ] WordPress installed
- [ ] Hello Elementor theme installed
- [ ] Child theme activated
- [ ] Elementor plugin installed
- [ ] Menus configured
- [ ] Footer widgets set up
- [ ] Logo uploaded
- [ ] Pages created with Elementor
- [ ] Content added
- [ ] Tested on mobile

## 🆘 Need Help?

- Check `INSTALLATION.md` for detailed steps
- Review `DOCUMENTATION.md` for design decisions
- See `DEPLOYMENT.md` for production setup

---

**Ready to build something amazing!** 🎉

