<?php 

get_header();

global $wp_query;

$bignumber = 999999999; // 



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

echo paginate_links( array(
 'base' => str_replace( $bignumber, '%#%', get_pagenum_link( $bignumber ) ),
 'format' => '?paged=%#%',
 'current' => max( 1, get_query_var('paged') ),
 'total' => $wp_query->max_num_pages
 ) );

get_footer();

?>


