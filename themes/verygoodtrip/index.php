<?php

get_header();
?>

<div class="slider">
  <?php if( is_front_page()) { if ( function_exists( "easingslider" ) ) { easingslider( 17 ); } } ?>
</div>

<?php
if(have_posts()){
    while (have_posts()){
        the_post();
        echo '<h2>'.get_the_title().'</h2>';
        the_post_thumbnail('medium'); // Afficher l'image à la UNE
        the_content();
    }
} else{
    echo 'Aucun article';
}


$loop = new WP_Query(array('post_type'=>'events'));
while ( $loop->have_posts()){
	$loop->the_post();
	the_title();
	the_content();
}


get_footer();

?>
