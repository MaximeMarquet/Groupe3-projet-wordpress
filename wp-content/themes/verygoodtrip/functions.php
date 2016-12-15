<?php

/* Enqueue Styles and Scripts */
function my_scripts_styles() {
    wp_enqueue_style('semantic-css', get_template_directory_uri() . '/css/semantic.min.css');
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('semantic-js', get_template_directory_uri() . '/js/semantic.min.js');
}

add_action('wp_enqueue_scripts', 'my_scripts_styles');
