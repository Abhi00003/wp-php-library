# Deployment Guide

This guide covers deploying the Volatus Aerospace WordPress site to a production environment.

## Pre-Deployment Checklist

- [ ] All code is tested locally
- [ ] Assets are built (`npm run build`)
- [ ] Database backup created
- [ ] Environment variables configured
- [ ] Security keys generated
- [ ] SSL certificate ready
- [ ] Domain DNS configured

## Deployment Steps

### 1. Prepare Files

```bash
# Build production assets
npm run build

# Remove development files
rm -rf node_modules
rm -f .env
rm -f docker-compose.yml
```

### 2. Upload to Server

Upload the following to your web server:
- `wp-content/themes/hello-elementor-child/` → `/wp-content/themes/hello-elementor-child/`
- Ensure WordPress core files are in place

### 3. Set Permissions

```bash
# Set correct permissions
find wp-content/themes/hello-elementor-child -type d -exec chmod 755 {} \;
find wp-content/themes/hello-elementor-child -type f -exec chmod 644 {} \;
```

### 4. Configure WordPress

1. Update `wp-config.php`:
   - Database credentials
   - Security keys
   - Set `WP_DEBUG` to `false`
   - Update site URLs

2. Update site URL in WordPress admin:
   - Settings → General
   - WordPress Address (URL)
   - Site Address (URL)

### 5. Install Required Components

1. **Hello Elementor Theme**
   - Appearance → Themes → Add New
   - Search "Hello Elementor" → Install → Activate

2. **Child Theme**
   - Appearance → Themes
   - Activate "Hello Elementor Child"

3. **Elementor Plugin**
   - Plugins → Add New
   - Search "Elementor" → Install → Activate

### 6. Configure Site

1. **Menus**
   - Appearance → Menus
   - Create and assign menus (see menu-structure.md)

2. **Widgets**
   - Appearance → Widgets
   - Configure footer widgets

3. **Customizer**
   - Appearance → Customize
   - Upload logo
   - Set site identity
   - Configure colors if needed

### 7. Security Hardening

1. **Install Security Plugin**
   - Wordfence Security
   - iThemes Security
   - Or similar

2. **Update .htaccess**
   ```apache
   # Protect wp-config.php
   <files wp-config.php>
       order allow,deny
       deny from all
   </files>
   
   # Disable directory browsing
   Options -Indexes
   ```

3. **Limit Login Attempts**
   - Use security plugin feature
   - Or install Limit Login Attempts plugin

### 8. Performance Optimization

1. **Caching**
   - Install WP Super Cache or W3 Total Cache
   - Configure caching rules
   - Enable page caching

2. **Image Optimization**
   - Install Smush or similar plugin
   - Optimize existing images
   - Enable lazy loading

3. **CDN Setup** (Optional)
   - Configure Cloudflare or similar
   - Update CDN URLs in WordPress

4. **Database Optimization**
   - Run WP-Optimize plugin
   - Clean up revisions, spam, etc.

### 9. SSL Configuration

1. **Install SSL Certificate**
   - Use Let's Encrypt (free)
   - Or purchase from provider

2. **Force HTTPS**
   - Update site URLs to https://
   - Install Really Simple SSL plugin
   - Or manually update .htaccess

### 10. Backup Setup

1. **Automated Backups**
   - Install UpdraftPlus or similar
   - Configure daily backups
   - Store off-site (Dropbox, Google Drive, etc.)

2. **Database Backups**
   - Set up automated database exports
   - Store securely

### 11. Monitoring

1. **Uptime Monitoring**
   - Set up UptimeRobot or similar
   - Monitor site availability

2. **Error Logging**
   - Configure error logging
   - Set up email alerts

3. **Analytics**
   - Install Google Analytics
   - Or use WordPress analytics plugin

## Post-Deployment

### Testing

- [ ] Test all navigation links
- [ ] Test contact forms
- [ ] Test on mobile devices
- [ ] Test on different browsers
- [ ] Check page load speeds
- [ ] Verify SSL certificate
- [ ] Test backup/restore process

### Documentation

- Document server credentials (securely)
- Document database credentials (securely)
- Document custom configurations
- Create runbook for common issues

## Rollback Plan

If issues occur:

1. **Quick Rollback**
   - Restore from backup
   - Or revert to previous version

2. **Database Rollback**
   - Restore database backup
   - Update file permissions if needed

3. **File Rollback**
   - Restore theme files from backup
   - Clear cache

## Maintenance Schedule

### Daily
- Monitor error logs
- Check site uptime

### Weekly
- Review security logs
- Check for WordPress updates
- Review analytics

### Monthly
- Update WordPress core
- Update plugins
- Update themes
- Review and optimize database
- Test backups

### Quarterly
- Security audit
- Performance review
- Content audit
- SEO review

## Troubleshooting

### Site Not Loading
- Check file permissions
- Check .htaccess file
- Check database connection
- Check error logs

### Styles Not Loading
- Clear cache
- Check file paths
- Verify assets are uploaded
- Check browser console

### Database Errors
- Check database credentials
- Verify database exists
- Check database user permissions
- Review error logs

## Support Contacts

- **Hosting Provider**: [Your hosting support]
- **Domain Registrar**: [Your registrar]
- **Developer**: [Your contact info]

---

**Note**: Always test in a staging environment before deploying to production.

