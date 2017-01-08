<?php

include 'inc/addPostType.php';
include 'widgets/textBloc.php';
include 'widgets/custom.php';

register_nav_menus(array(
    'main-menu' => __('Menu primaire', 'menu-primaire')
));

if (!function_exists('base_theme_enqueue_styles')) {

	/**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
    function base_theme_enqueue_styles()
    {
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/vendor/jquery/jquery-2.2.4.js', array(), false, true);
        wp_enqueue_script('boostrap-js', get_stylesheet_directory_uri().'/vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/js/main.js', array('boostrap-js'), false, true);

        wp_enqueue_style('boostrap-css', get_stylesheet_directory_uri() . '/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css');
        wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.min.css');
    }

    add_action('wp_enqueue_scripts', 'base_theme_enqueue_styles');
}