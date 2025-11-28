/**
 * Custom JavaScript for Volatus Aerospace WordPress Site
 */

(function($) {
    'use strict';

    // Document Ready
    $(document).ready(function() {
        initMobileMenu();
        initSearchOverlay();
        initSmoothScroll();
        initStickyHeader();
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = $('.menu-toggle');
        const navMenu = $('#primary-menu');
        const body = $('body');

        menuToggle.on('click', function() {
            const isExpanded = $(this).attr('aria-expanded') === 'true';
            
            $(this).attr('aria-expanded', !isExpanded);
            navMenu.toggleClass('active');
            body.toggleClass('menu-open');
        });

        // Close menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.main-navigation').length) {
                menuToggle.attr('aria-expanded', 'false');
                navMenu.removeClass('active');
                body.removeClass('menu-open');
            }
        });

        // Close menu when clicking on a link
        navMenu.find('a').on('click', function() {
            if ($(window).width() <= 768) {
                menuToggle.attr('aria-expanded', 'false');
                navMenu.removeClass('active');
                body.removeClass('menu-open');
            }
        });
    }

    /**
     * Search Overlay
     */
    function initSearchOverlay() {
        const searchToggle = $('.search-toggle');
        const searchOverlay = $('.search-overlay');
        const searchClose = $('.search-close');
        const searchField = $('.search-field');

        // Open search overlay
        searchToggle.on('click', function() {
            searchOverlay.addClass('active');
            searchField.focus();
            $('body').css('overflow', 'hidden');
        });

        // Close search overlay
        searchClose.on('click', function() {
            closeSearchOverlay();
        });

        // Close on escape key
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && searchOverlay.hasClass('active')) {
                closeSearchOverlay();
            }
        });

        // Close on overlay click
        searchOverlay.on('click', function(e) {
            if ($(e.target).is('.search-overlay')) {
                closeSearchOverlay();
            }
        });

        function closeSearchOverlay() {
            searchOverlay.removeClass('active');
            $('body').css('overflow', '');
        }
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        $('a[href^="#"]').on('click', function(e) {
            const target = $(this.getAttribute('href'));
            
            if (target.length) {
                e.preventDefault();
                const offset = $('.site-header').outerHeight() || 0;
                const targetPosition = target.offset().top - offset;

                $('html, body').animate({
                    scrollTop: targetPosition
                }, 600);
            }
        });
    }

    /**
     * Sticky Header Enhancement
     */
    function initStickyHeader() {
        const header = $('.site-header');
        let lastScroll = 0;

        $(window).on('scroll', function() {
            const currentScroll = $(this).scrollTop();

            if (currentScroll > 100) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }

            // Hide/show header on scroll (optional)
            if (currentScroll > lastScroll && currentScroll > 200) {
                header.addClass('header-hidden');
            } else {
                header.removeClass('header-hidden');
            }

            lastScroll = currentScroll;
        });
    }

    /**
     * Dropdown Menu Enhancement for Touch Devices
     */
    if ('ontouchstart' in window) {
        $('.nav-menu li').on('touchstart', function(e) {
            const $this = $(this);
            const $subMenu = $this.find('.sub-menu');

            if ($subMenu.length) {
                e.preventDefault();
                $this.toggleClass('sub-menu-open');
            }
        });
    }

    /**
     * Lazy Load Images (if needed)
     */
    function initLazyLoad() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img.lazy').forEach(function(img) {
                imageObserver.observe(img);
            });
        }
    }

    // Initialize lazy load if images with .lazy class exist
    if ($('img.lazy').length) {
        initLazyLoad();
    }

    /**
     * Form Validation Enhancement
     */
    $('form').on('submit', function(e) {
        const $form = $(this);
        const $requiredFields = $form.find('[required]');
        let isValid = true;

        $requiredFields.each(function() {
            const $field = $(this);
            if (!$field.val().trim()) {
                isValid = false;
                $field.addClass('error');
            } else {
                $field.removeClass('error');
            }
        });

        if (!isValid) {
            e.preventDefault();
            // Show error message
            if (!$form.find('.form-error').length) {
                $form.prepend('<div class="form-error">Please fill in all required fields.</div>');
            }
        }
    });

    /**
     * Remove error class on input
     */
    $('input, textarea').on('input', function() {
        $(this).removeClass('error');
    });

})(jQuery);

