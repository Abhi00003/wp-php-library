<?php
/**
 * The template for displaying all pages
 *
 * @package HelloElementorChild
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<main id="main" class="site-main" role="main">

    <?php
    while (have_posts()) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php if (!elementor_location_exits('single', true)) : ?>
                <header class="page-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>
            <?php endif; ?>

            <div class="page-content">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'hello-elementor-child'),
                    'after' => '</div>',
                ));
                ?>
            </div>

        </article>

    <?php endwhile; ?>

</main><!-- #main -->

<?php
get_footer();

