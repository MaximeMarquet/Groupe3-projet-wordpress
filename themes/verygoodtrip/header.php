<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php

            ?>
        </title>
        <?php
            wp_head();
        ?>
    </head>
    <body>
        <div class="ui fixed inverted menu">
            <div class="ui container" style="padding: 0 !important;">
                <a href="<?php echo get_home_url(); ?>" class="header item">
                    <?php bloginfo('name'); ?>
                </a>

                <?php 
                    $categories = get_categories(array(
                            'parent' => 0
                        ));

                    foreach($categories as $category) {
                        $categoriesChilds = get_categories(array(
                            'parent' => $category->term_id
                        ));

                        if(count($categoriesChilds) != 0) {
                            echo '<div class="ui simple dropdown item">';
                                echo $category->name . '<i class="dropdown icon"></i>';
                                echo '<div class="menu">';
                                    foreach($categoriesChilds as $cat){
                                        echo '<a href="' . get_category_link($cat) . '" class="item">' . $cat->name . '</a>';
                                    }
                                echo '</div>';
                            echo '</div>';
                        } else{
                            echo '<a href="' . get_category_link($category) . '" class="item">' . $category->name . '</a>';
                        }
                    }
                ?>
            </div>
        </div>

        <div class="slider">
          <?php if( is_front_page()) { if ( function_exists( "easingslider" ) ) { easingslider( 17 ); } } ?>
        </div>
