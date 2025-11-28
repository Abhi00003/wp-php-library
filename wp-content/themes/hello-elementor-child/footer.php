<?php
/**
 * The footer template file
 *
 * @package HelloElementorChild
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-container">
            <div class="footer-widgets">
                <div class="footer-column footer-column-1">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php else : ?>
                        <h3 class="widget-title"><?php esc_html_e('About Volatus Aerospace', 'hello-elementor-child'); ?></h3>
                        <p><?php esc_html_e('Leading provider of drone solutions, services, and training across multiple industries.', 'hello-elementor-child'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="footer-column footer-column-2">
                    <?php if (is_active_sidebar('footer-2')) : ?>
                        <?php dynamic_sidebar('footer-2'); ?>
                    <?php else : ?>
                        <h3 class="widget-title"><?php esc_html_e('Quick Links', 'hello-elementor-child'); ?></h3>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_id' => 'footer-menu',
                            'menu_class' => 'footer-menu',
                            'container' => false,
                            'depth' => 1,
                            'fallback_cb' => false,
                        ));
                        ?>
                    <?php endif; ?>
                </div>

                <div class="footer-column footer-column-3">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <?php dynamic_sidebar('footer-3'); ?>
                    <?php else : ?>
                        <h3 class="widget-title"><?php esc_html_e('Services', 'hello-elementor-child'); ?></h3>
                        <ul class="footer-links">
                            <li><a href="#"><?php esc_html_e('Drone Inspections', 'hello-elementor-child'); ?></a></li>
                            <li><a href="#"><?php esc_html_e('Lidar Services', 'hello-elementor-child'); ?></a></li>
                            <li><a href="#"><?php esc_html_e('Aviation Services', 'hello-elementor-child'); ?></a></li>
                            <li><a href="#"><?php esc_html_e('Training Programs', 'hello-elementor-child'); ?></a></li>
                        </ul>
                    <?php endif; ?>
                </div>

                <div class="footer-column footer-column-4">
                    <?php if (is_active_sidebar('footer-4')) : ?>
                        <?php dynamic_sidebar('footer-4'); ?>
                    <?php else : ?>
                        <h3 class="widget-title"><?php esc_html_e('Contact Us', 'hello-elementor-child'); ?></h3>
                        <div class="contact-info">
                            <p>
                                <strong><?php esc_html_e('Phone:', 'hello-elementor-child'); ?></strong><br>
                                <a href="tel:18338652887">1-833-865-2887</a>
                            </p>
                            <p>
                                <strong><?php esc_html_e('Email:', 'hello-elementor-child'); ?></strong><br>
                                <a href="mailto:info@volatusaerospace.com">info@volatusaerospace.com</a>
                            </p>
                            <p>
                                <strong><?php esc_html_e('Address:', 'hello-elementor-child'); ?></strong><br>
                                6221 Hwy 7 #6<br>
                                Vaughan, Ontario<br>
                                L4H 0K8, Canada
                            </p>
                        </div>
                        
                        <div class="social-media">
                            <h4><?php esc_html_e('Follow Us', 'hello-elementor-child'); ?></h4>
                            <ul class="social-links">
                                <li><a href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a></li>
                                <li><a href="#" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a></li>
                                <li><a href="#" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a></li>
                                <li><a href="#" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                </a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div><!-- .footer-widgets -->

            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p class="copyright">
                        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'hello-elementor-child'); ?>
                    </p>
                    <div class="footer-legal">
                        <a href="#"><?php esc_html_e('Privacy Policy', 'hello-elementor-child'); ?></a>
                        <span class="separator">|</span>
                        <a href="#"><?php esc_html_e('Terms of Service', 'hello-elementor-child'); ?></a>
                        <span class="separator">|</span>
                        <a href="#"><?php esc_html_e('Cookie Policy', 'hello-elementor-child'); ?></a>
                    </div>
                </div>
            </div><!-- .footer-bottom -->
        </div><!-- .footer-container -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

