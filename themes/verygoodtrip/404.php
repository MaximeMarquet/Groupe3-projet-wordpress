<!--
<style>

.error_404 {
  background: url('https://static.pexels.com/photos/818/sea-sunny-beach-holiday.jpg');
  background-size: cover;
  background-position: bottom;
  height: 100%;

  font-family: 'Montserrat', sans-serif;
  color: #fff;
  background-color: rgba(80, 80, 80, 0.8);
  overflow: hidden;
  padding: 0;
  margin: 0;
  width: 100%;
  height: 100%;
}

.error_404 .msg{
  text-align: center;
  padding: 16px;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
}

h1 {
  margin: -10px 0 -30px;
  font-size: calc(17vw + 40px);
  opacity: .8;
  letter-spacing: -17px;
}

p {
  opacity: .8;
  font-size: 20px;
  margin: 8px 0 38px 0;
  font-weight: bold
}

</style>

<div class="error_404">
  <div class="msg">
      <h1>404</h1>
      <p>La page demandée n'existe pas.</p>
  </div>
</div>
-->

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title">Page non trouvée</h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'verygoodtrip' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>