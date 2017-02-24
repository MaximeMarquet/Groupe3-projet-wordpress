<?php
    get_header();
?>

<div class="slider">
  <?php if( is_front_page()) { if ( function_exists( "easingslider" ) ) { easingslider( 17 ); } } ?>
</div>
<div class="container">
<?php
if(have_posts()){
    while (have_posts()){
        the_post();
        echo '<div class="post-header">
                <h1 class="post-title">'.get_the_title().'</h1>
                <span class="title-divider"></span>
                <span class="post-date">publié le '.get_the_date().'</span>
              </div>
              <div class="post-content">' ;
        the_post_thumbnail('thumbnail-large'); // Afficher l'image à la UNE
        the_content();

        echo '</div>
              <div class="post-box">
                <h4 class="post-box-title"><span>Autres articles à lire</span>
                </h4>
              </div>

              <div class="other-post" style="display:flex">';

        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=3');
         while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <article class="">
                    <a href="<?php the_permalink() ?>" class="article-thumbnail" rel="bookmark">
                            <?php
                                the_post_thumbnail('thumbnail-medium'); // Afficher l'image à la UNE
                            ?>
                    </a>
                    <div class="">
                        <h3 class="">
                            <?php
                                the_title();
                            ?>
                        </h3>


                    </div>
                </article>

        <?php endwhile;

        echo '</div>';
    }
} else{
    echo 'Aucun article';
}


?>

</div>

<?php
get_footer();
?>
