<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
        // Start the Loop.
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;

            // If no content, include the "No posts found" template.
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
// The footer.php file is included at the bottom of the page.
get_footer();
?>
