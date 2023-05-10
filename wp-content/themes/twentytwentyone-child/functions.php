<?php

function tt_child_enqueue_parent_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'tt_child_enqueue_parent_styles');

function charger_bootstrap()
{

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), null, true);

    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    //     wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . 'bootstrap/js/bootstrap.min.js', array('jquery'), null, true);

    //     wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . 'bootstrap/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'charger_bootstrap');


function custom_stylesheet()
{
    wp_enqueue_style('globals', get_theme_file_uri() . '/styles/globals.css');
    wp_enqueue_style('navbar', get_theme_file_uri() . '/styles/navbar.css');
    wp_enqueue_style('footer', get_theme_file_uri() . '/styles/footer.css');
    wp_enqueue_style('front-page', get_theme_file_uri() . '/styles/front-page.css');
    wp_enqueue_style('divider', get_theme_file_uri() . '/styles/divider.css');
}
add_action('wp_enqueue_scripts', 'custom_stylesheet');
