<?php

/**
 * Register menus
 */
register_nav_menus( array('primary' => 'Primary Menu') );
register_sidebar( array('name' => 'Sidebar') );

function my_init_method() {
    if(!is_admin()) {
        wp_enqueue_script( 'jquery' );
        wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
        wp_enqueue_style( 'global' );
    }
}
add_action('init', 'my_init_method');

/*
 * Customize Login Logo Image
 */
add_action( 'login_enqueue_scripts', function() { 
    echo '<link href="'. get_template_directory_uri() .'/css/custom-admin-login.css" rel="stylesheet" />';
} );

/*
 * Customize Login Logo URL
 */
add_filter( 'login_headerurl', function() {
    return home_url();
} );

/*
 * Customize Login Logo Title
 */
add_filter( 'login_headertitle', function() {
    return 'Admin';
} );

/*
 * Register feature image in post manager
 */
add_theme_support( 'post-thumbnails');

/*
 * Register a new image size, use in category page
 */
if (function_exists('add_image_size')) {
    add_image_size('thumb', 420, 280, false); //(no cropped)
}

/**
 * Control excerpt length
 */
 add_filter('excerpt_length', function() {
    return 50;
 } );

/**
 * Change [...] string in excerpt
 */
 
 add_filter('excerpt_more', function() {
    return '...';
 } );

remove_action('wp_head', 'wp_generator');
?>