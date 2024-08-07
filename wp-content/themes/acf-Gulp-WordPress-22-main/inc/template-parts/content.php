<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) : ?>
    <div class="entry-meta">
      <?php
                the_time('F j, Y');
                ?>
    </div><!-- .entry-meta -->
    <?php
        endif; ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
        the_content(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers. */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'textdomain'),
                    [
                        'span' => [
                            'class' => [],
                        ],
                    ]
                ),
                get_the_title()
            )
        );

        wp_link_pages(
            [
                'before' => '<div class="page-links">'.esc_html__('Pages:', 'textdomain'),
                'after' => '</div>',
            ]
        );
        ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php
        if ('post' === get_post_type()) {
            echo '<span class="cat-links">'.__('Posted in ', 'textdomain').get_the_category_list(', ').'</span>';
            echo '<span class="tags-links">'.get_the_tag_list('', ', ').'</span>';
        }
        ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
