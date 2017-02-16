<?php

add_action('widgets_init', 'footer_widget');
function footer_widget(){
    register_sidebar(array(
        'id' => 'footer_widget',
        'name' => 'Footer',
        'description' => '',
        'before_widget' => '<footer>',
        'after_widget' => '</footer>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}
