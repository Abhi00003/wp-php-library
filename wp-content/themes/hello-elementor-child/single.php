<?php
/**
 * The template for displaying all single posts
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
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    <div class="entry-meta">
                        <span class="posted-on">
                            <?php echo get_the_date(); ?>
                        </span>
                        <span class="byline">
                            <?php esc_html_e('by', 'hello-elementor-child'); ?> <?php the_author(); ?>
                        </span>
                    </div>
                </header>
            <?php endif; ?>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'hello-elementor-child'),
                    'after' => '</div>',
                ));
                ?>
            </div>

            <footer class="entry-footer">
                <?php
                $categories = get_the_category_list(', ');
                $tags = get_the_tag_list('', ', ');
                if ($categories || $tags) {
                    echo '<div class="entry-taxonomies">';
                    if ($categories) {
                        echo '<span class="cat-links">' . $categories . '</span>';
                    }
                    if ($tags) {
                        echo '<span class="tags-links">' . $tags . '</span>';
                    }
                    echo '</div>';
                }
                ?>
            </footer>

        </article>

        <?php
        the_post_navigation(array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'hello-elementor-child') . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'hello-elementor-child') . '</span> <span class="nav-title">%title</span>',
        ));
        ?>

    <?php endwhile; ?>

</main><!-- #main -->

<?php
get_footer();

