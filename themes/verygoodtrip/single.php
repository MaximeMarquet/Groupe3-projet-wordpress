<?php
    get_header();

    the_post();
?>

<div class="ui container article-post">
  <h1 class="ui center aligned header"><?php the_title(); ?></h1>

  <div class="">
      <?php the_post_thumbnail('medium', 'thumbnail'); ?><?php the_content(); ?>
  </div>
</div>

<?php
    get_footer();
?>
