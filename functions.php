<?php

include 'inc/addPostType.php';
include 'extensions/Tweets.php';

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

        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.js');
        wp_enqueue_script('boostrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), false, false);

        wp_enqueue_script('mainJs', get_stylesheet_directory_uri('/js/main.js'), array('boostrap-js'), false, false);

        wp_enqueue_style('boostrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
        wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css');
    }

    add_action('wp_enqueue_scripts', 'base_theme_enqueue_styles');
}

$instTweets = new Tweets();
//$tweets = $instTweets->generate(50, 'getbootstrap');
