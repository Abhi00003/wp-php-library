<?php
/**
 * Hello Elementor Child Theme Functions
 * 
 * @package HelloElementorChild
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Enqueue parent and child theme styles
 */
function hello_elementor_child_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style('hello-elementor-parent-style', get_template_directory_uri() . '/style.css');
    
    // Enqueue child theme style
    wp_enqueue_style('hello-elementor-child-style', 
        get_stylesheet_directory_uri() . '/style.css',
        array('hello-elementor-parent-style'),
        wp_get_theme()->get('Version')
    );
    
    // Enqueue custom styles
    wp_enqueue_style('volatus-custom-styles',
        get_stylesheet_directory_uri() . '/assets/css/custom-styles.css',
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Enqueue custom scripts
    wp_enqueue_script('volatus-custom-scripts',
        get_stylesheet_directory_uri() . '/assets/js/custom-scripts.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles');

/**
 * Register navigation menus
 */
function volatus_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hello-elementor-child'),
        'footer' => __('Footer Menu', 'hello-elementor-child'),
    ));
}
add_action('after_setup_theme', 'volatus_register_menus');

/**
 * Register widget areas
 */
function volatus_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Column 1', 'hello-elementor-child'),
        'id' => 'footer-1',
        'description' => __('Widgets in this area will be shown in the first footer column.', 'hello-elementor-child'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Column 2', 'hello-elementor-child'),
        'id' => 'footer-2',
        'description' => __('Widgets in this area will be shown in the second footer column.', 'hello-elementor-child'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Column 3', 'hello-elementor-child'),
        'id' => 'footer-3',
        'description' => __('Widgets in this area will be shown in the third footer column.', 'hello-elementor-child'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Column 4', 'hello-elementor-child'),
        'id' => 'footer-4',
        'description' => __('Widgets in this area will be shown in the fourth footer column.', 'hello-elementor-child'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'volatus_widgets_init');

/**
 * Add theme support
 */
function volatus_theme_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add support for title tag
    add_theme_support('title-tag');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
    
    // Add support for HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'volatus_theme_setup');

/**
 * Custom navigation walker for mega menu support
 */
class Volatus_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Add custom classes and structure for mega menu
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu dropdown-menu\">\n";
    }
}

/**
 * Add custom body classes
 */
function volatus_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter('body_class', 'volatus_body_classes');

/**
 * Custom excerpt length
 */
function volatus_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'volatus_excerpt_length');

/**
 * Custom excerpt more
 */
function volatus_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'volatus_excerpt_more');

