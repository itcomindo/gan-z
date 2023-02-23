<?php
defined('ABSPATH') || exit;
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}
add_filter('carbon_fields_map_field_api_key', 'crb_get_gmaps_api_key');
function crb_get_gmaps_api_key($key)
{
    $google_map_api_key = carbon_get_theme_option('google_map_api_key');
    return $google_map_api_key;
}
remove_action('wp_head', '_wp_render_title_tag', 1);


/**
 * Load theme supports
 */
// Add support for menus
add_theme_support('menus');
// Add support for post thumbnails
add_theme_support('post-thumbnails');
// add support for title tag
add_theme_support('title-tag');
// add support widgets
add_theme_support('widgets');