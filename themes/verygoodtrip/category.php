<?php
get_header();
?>
<div class="ui two column centered grid">
  <div class="column">
      <div class="ui centered grid">
        <div class="row">
            <div class="thirteen wide column list-category">
                <h1><?php echo get_the_category()[0]->name; ?></h1>

                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                            <article>
                                <a href="<?php the_permalink() ?>" class="article-thumbnail" rel="bookmark">
                                        <?php the_post_thumbnail('medium_large', 'thumbnail'); ?>
                                </a>
                                <div class="article-content">
                                    <a href="<?php the_permalink() ?>">
                                        <h2 class="article-title">
                                            <?php
                                                the_title();
                                            ?>
                                        </h2>
                                    </a>

                                    <p class="article-extract">
                                        <?php
                                            the_excerpt();
                                        ?>
                                    </p>
                                </div>
                            </article>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php
                    global $wp_query;
                    $bignumber = 999999999;
                ?>

                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                            'base' => str_replace($bignumber, '%#%', get_pagenum_link($bignumber)),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages
                        ));
                    ?>
                </div>
            </div>

          <div class="three wide column">
              <?php dynamic_sidebar('sidebar_widget'); ?>
          </div>
        </div>
      </div>
  </div>
</div>

<?php
    get_footer();
?>
