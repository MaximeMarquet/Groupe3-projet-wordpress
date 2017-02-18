<div class="social_networks">
    <?php echo $args['before_title'] . 'Follow us' . $args['after_title']; ?>

    <?php if(isset($instance['twitter'])): ?>
        <a href="<?php echo $instance['twitter']; ?>">
            <img src="https://upload.wikimedia.org/wikipedia/en/archive/9/9f/20161107041729!Twitter_bird_logo_2012.svg" alt="Logo twitter">
        </a>
    <?php endif; ?>
    <?php if(isset($instance['instagram'])): ?>
        <a href="<?php echo $instance['instagram']; ?>">
            <img src="https://images.seeklogo.net/2016/06/Instagram-logo.png" alt="Logo instagram">
        </a>
    <?php endif; ?>
</div>
