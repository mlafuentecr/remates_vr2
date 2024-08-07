<?php
defined('ABSPATH') || exit;
get_header();
?>

<main id="front-page" class="container mx-auto py-8 ">
  <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('mb-8 p-6 bg-white rounded-lg shadow-lg'); ?>>
    <header class="entry-header mb-4">
      <?php
                    if (is_singular()) :
                        the_title('<h1 class="entry-title text-3xl font-bold mb-4">', '</h1>');
                    else :
                        the_title('<h2 class="entry-title text-2xl font-bold mb-4"><a href="'.esc_url(get_permalink()).'" class="text-blue-600 hover:text-blue-800">', '</a></h2>');
                    endif;
                    ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer mt-4">
      <?php
                    if ('post' === get_post_type()) :
                        echo '<div class="text-sm text-gray-600">';
                        echo '<span class="cat-links">'.__('Posted in ', 'textdomain').get_the_category_list(', ').'</span>';
                        echo '<span class="tags-links">'.get_the_tag_list('<span class="mr-2">', ', ', '</span>').'</span>';
                        echo '</div>';
                    endif;
                    ?>
    </footer><!-- .entry-footer -->
  </article><!-- #post-<?php the_ID(); ?> -->
  <?php
        endwhile;
    else :
        get_template_part('template-parts/content', 'none');
    endif;
    ?>
</main><!-- #main -->

<?php
get_footer();
?>
