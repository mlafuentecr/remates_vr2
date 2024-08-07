<?php

function create_remates_category()
{
    // Define the category name and slug
    $category_name = 'Remates';
    $category_slug = 'remates';

    // Check if the category already exists
    $term = term_exists($category_name, 'category');

    // If the category does not exist, create it
    if ($term === 0 || $term === null) {
        wp_insert_term(
          $category_name,   // The name of the category
          'category',       // The taxonomy
          [
              'description' => 'Categoría para las publicaciones de remates.',
              'slug' => $category_slug,
          ]
      );
    }
}

// Hook the function to run when the theme is activated
add_action('after_setup_theme', 'create_remates_category');
