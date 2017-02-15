<?php

add_action('widgets_init', 'sidebar_widget');
function sidebar_widget(){
    register_sidebar(array(
        'id' => 'sidebar_widget',
        'name' => 'Sidebar',
        'description' => '',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}
