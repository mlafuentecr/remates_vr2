<?php
/**
 * director functions and definitions.
 *
 * @see https://developer.wordpress.org/themes/basics/theme-functions/
 */

/*-----------------------------------------------------------------------------------*/
//     VERSION
/*-----------------------------------------------------------------------------------*/
if (!defined('_S_VERSION')) {
    define('_S_VERSION', '0.0.3');
}

define('THEME_PATH', get_template_directory_uri());

/*-----------------------------------------------------------------------------------*/
//     Variables LOCAL OR DIST
/*-----------------------------------------------------------------------------------*/
// Get the hostname
$http_host = $_SERVER['HTTP_HOST'];
$ENV = '';
$local = 'localhost:10018';
$staging = 'localhost:10018';
$production = 'remates.com';

$environments = [
    'local' => $local,
    'staging' => $staging,
    'production' => $production,
];

/*-----------------------------------------------------------------------------------*/
//     defines
/*-----------------------------------------------------------------------------------*/
if (!defined('ENVIROMENT')) {
    foreach ($environments as $environment => $hostname) {
        if (stripos($http_host, $hostname) !== false) {
            //     Set Enviroment
            if ($environment === 'local') {
                define('ENVIROMENT', 'src');
            } else {
                define('ENVIROMENT', 'dist');
            }
            break;
        }
    }
}

/*-----------------------------------------------------------------------------------*/
//     1) Array of files to include.
/*-----------------------------------------------------------------------------------*/

// UnderStrap's includes directory.
$director_inc_dir = get_template_directory().'/inc/functions/';

$director_includes = [
   'enqueue.php',
   'add-menus.php',
    'add-ajaxFetch.php',
    'add-cateory-remates.php',
    // 'theme-support.php',
    // 'add_acf_theme_options.php',
    // 'add_custom_post_type.php',
    // 'add_taxonomy.php',
    // 'add-breadcrumb.php',
    // 'add_helpers.php', //Any othe function we need
    // 'add_richText.php',
    // 'add_blocks.php',
];

foreach ($director_includes as $file) {
    require_once $director_inc_dir.$file;
}

if (!function_exists('get_field')) {
    define('MY_ACF_PATH', 'inc/acf/');
    define('MY_ACF_URL', 'inc/acf/');

    include_once MY_ACF_PATH.'acf.php';

    add_filter('acf/settings/url', 'my_acf_settings_url');
    function my_acf_settings_url($url)
    {
        return MY_ACF_URL;
    }

    add_filter('acf/settings/show_updates', '__return_false', 100);
} else {
    // $acf_loader = new load_acf_and_json();
    // $this->loader->add_action('init', $acf_loader, 'check_for_acf');
}
