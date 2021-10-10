<?php

/**
 * Theme functions
 * 
 * @package brzysky-theme
 */

function scripts()
{

    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('clipboard', get_stylesheet_directory_uri() . '/dist/clipboard.js');

    wp_enqueue_script('app', get_template_directory_uri() . '/dist/app.js', [], 1, true);
    wp_enqueue_style('app');

    if( is_front_page()){
        wp_enqueue_script('app-home', get_template_directory_uri() . '/dist/animations-home.js', [], 1, true);
        wp_enqueue_style('app-home');
    }
    if( is_archive()){
        wp_enqueue_script('app-home', get_template_directory_uri() . '/dist/animations-archive.js', [], 1, true);
        wp_enqueue_style('app-home');
    }
    if( is_single() ){
        wp_enqueue_script('app-single', get_template_directory_uri() . '/dist/animations-single.js', [], 1, true);
        wp_enqueue_style('app-single');
    };
//Remove Gutenberg Block Library CSS from loading on the frontend
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' );

}

add_action('wp_enqueue_scripts', 'scripts');

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 1280, 720 );

// Menus
register_nav_menus(
    array(
        'categories' => 'Categories Menu'
    )
);