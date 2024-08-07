<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
/*-----------------------------------------------------------------------------------*/
/* GET GLOBAL ACF
/*-----------------------------------------------------------------------------------*/
// $footer = get_field('footer', 'options') ?? array();
// $privacy = $footer['privacy'] ?? array('url' => '/privacy-policy', 'title' => 'Privacy');

//First Column
// $first_col = get_field('first_column', 'options');
// $first_col_logo_url = $first_col['logo']['url'] ?? get_template_directory_uri() . '/inc/images/logo-director-icon-gray.svg';
// $first_col_logo_alt = $first_col['logo']['alt'] ?? 'The Grain Elevator Processing Society Logo';
// $first_col_title = $first_col['title'] ?? 'The Grain Elevator Processing Society';
// $first_col_description = $first_col['description'] ?? 'The Knowledge Resource for the world of grain handling and processing industry operations.';
// $first_col_description_2 = $first_col['description_2'] ?? 'director global network of industry professionals includes more than 2,800 individual members from about 1,150 companies';
// $first_col_link_target = $first_col['link']['target'] ?? '';
// $first_col_link_url = $first_col['link']['url'] ?? '/about';
// $first_col_link_title = $first_col['link']['title'] ?? 'About director';

//second Column

?>
</div><!-- #page -->
<footer class="bg-gray-800 text-white py-6">
  <div class="container mx-auto px-4">
    <div class="flex  flex-col lg:flex-row my-3">
      <!-- First Column -->
      <div class="w-full lg:w-1/3 mb-6 lg:mb-0">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center mb-4">
          LOGO
        </a>
        <h3 class="text-sm font-bold mb-2">TITLE</h3>
        <p class="mb-4 text-sm ">description</p>
        <p class="mb-4 text-sm ">description</p>
        <a href="#" target="_blank" class="text-blue-400 hover:text-blue-600">link_title</a>
      </div>

    </div>
    <div class="text-center mt-6">
      <a href="#" class="text-gray-400 hover:text-gray-200">privacy</a>
    </div>
  </div>
</footer>



<?php wp_footer(); ?>

</body>

</html>
