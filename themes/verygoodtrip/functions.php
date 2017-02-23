<?php

require 'widgets/sidebar.php';
require 'widgets/footer_widget.php';
require 'widgets/newsletter.php';
require 'widgets/social_links.php';

/* Enqueue Styles and Scripts */
function my_scripts_styles() {
    wp_enqueue_style('semantic-css', get_template_directory_uri() . '/css/semantic.min.css');



    wp_enqueue_style('reset-css', get_template_directory_uri().'/css/components/reset.css');
    wp_enqueue_style('site-css', get_template_directory_uri().'/css/components/site.css');
    wp_enqueue_style('container-css', get_template_directory_uri().'/css/components/container.css');
    wp_enqueue_style('grid-css', get_template_directory_uri().'/css/components/grid.css');
    wp_enqueue_style('image-css', get_template_directory_uri().'/css/components/image.css');
    wp_enqueue_style('menu-css', get_template_directory_uri().'/css/components/menu.css');
    wp_enqueue_style('divider-css', get_template_directory_uri().'/css/components/divider.css');
    wp_enqueue_style('dropdown-css', get_template_directory_uri().'/css/components/dropdown.css');
    wp_enqueue_style('segment-css', get_template_directory_uri().'/css/components/segment.css');
    wp_enqueue_style('button-css', get_template_directory_uri().'/css/components/button.css');
    wp_enqueue_style('list-css', get_template_directory_uri().'/css/components/list.css');
    wp_enqueue_style('icon-css', get_template_directory_uri().'/css/components/icon.css');
    wp_enqueue_style('sidebar-css', get_template_directory_uri().'/css/components/sidebar.css');
    wp_enqueue_style('transition-css', get_template_directory_uri().'/css/components/transition.css');

    wp_enqueue_style('main-style', get_template_directory_uri().'/css/customstyle.css');



    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('semantic-js', get_template_directory_uri() . '/js/semantic.min.js');
    wp_enqueue_script('visibility-js', get_template_directory_uri() . '/css/components/visibility.min.js');
    wp_enqueue_script('sidebar-js', get_template_directory_uri() . '/css/components/sidebar.min.js');
    wp_enqueue_script('transition-js', get_template_directory_uri() . '/css/components/transition.min.js');

}

add_action('wp_enqueue_scripts', 'my_scripts_styles');


/* Image à la UNE */
add_theme_support('post-thumbnails');

add_action('init', 'add_image_sizes');
function add_image_sizes() {
    add_image_size( 'thumbnail-medium', 400, 300, TRUE ); // force crop true
    add_image_size( 'thumbnail-large', 1080, 800, TRUE ); // force crop true
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
