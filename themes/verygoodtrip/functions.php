<?php

/* Enqueue Styles and Scripts */
function my_scripts_styles() {
	wp_enqueue_style('main-style', get_template_directory_uri().'/css/customstyle.css');
    wp_enqueue_style('semantic-css', get_template_directory_uri() . '/css/semantic.min.css');
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('semantic-js', get_template_directory_uri() . '/js/semantic.min.js');
}

add_action('wp_enqueue_scripts', 'my_scripts_styles');


/* Image à la UNE */
add_theme_support('post-thumbnails');

add_action('init', 'add_image_sizes');
function add_image_sizes() {
    add_image_size( 'thumbnail-medium', 400, 300, TRUE ); // force crop true
}// end



/* Modifie la taille des extraits (nb mots)  */
function new_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');


/**
Custom Post Type
*/
add_action('init','custom_post_type');

function custom_post_type(){
    register_post_type('tutoriel',
        array(
            'labels' => array(
                'name' => __('Tutoriel'),
                'singular_name' => __('tutoriel')
            ),
            'public' => true,
        )
    );
}