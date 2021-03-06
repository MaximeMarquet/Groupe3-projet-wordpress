<?php
/*
Template Name: Homepage
*/

    get_header();
?>


    <div class="container">

        <div class="slider">
          <?php if( is_front_page()) { if ( function_exists( "easingslider" ) ) { easingslider( 17 ); } } ?>
        </div>

		<section class="three-col three-last-article">

			<?php
			    $recentPosts = new WP_Query();
			    $recentPosts->query('showposts=3');
			?>
			<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
				<article class="col grey">
					<a href="<?php the_permalink() ?>" class="article-thumbnail" rel="bookmark">
							<?php
								the_post_thumbnail('thumbnail-medium'); // Afficher l'image à la UNE
							?>
					</a>
					<div class="article-content">
						<h2 class="article-title">
							<?php
								the_title();
							?>
						</h2>
						<p class="article-extract">
							<?php
								the_excerpt();
								// Afficher l'extrait
							?>
						</p>
						<div class="read-more">
							<a href="<?php the_permalink() ?>" class="ui right labeled icon button" >
							  <i class="right arrow icon"></i>
							  Lire la suite
							</a>
						</div>
					</div>
				</article>
			<?php endwhile; ?>

		</section>
    </div>



<?php
    get_footer();
