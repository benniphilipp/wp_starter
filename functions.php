<?php

// Basic Style
function my_theme_enqueue_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri(),[], '1.0.0', 'all' );
    wp_register_style('app-style', get_template_directory_uri() . '/dist/css/app.css', [], 1.2, 'all');
    wp_enqueue_style('app-style');
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );


//Thumbnail
add_theme_support( 'post-thumbnails' );

//Menu
function add_nav_menus() {
    register_nav_menus( array(
        'top-menu'=>'Navigation Bar',
        'footer menu'=> 'Footer Bar',
    ));
}
add_action('init', 'add_nav_menus');


//Post Type Automobile
require get_template_directory() . '/inc/posttype-automobile.php';

// Remove Body Support
add_action('admin_bar_menu', function() {
    remove_action('wp_before_admin_bar_render', 'wp_customize_support_script');
}, 50);

