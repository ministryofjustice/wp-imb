<?php get_header(); ?>

  <!--[if lt IE 8]>
	<div class="alert alert-warning">
		<?php _e( 'You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots' ); ?>
	</div>
  <![endif]-->

  <div class="wrap container" role="document">
		<div class="content row">
			<main class="main" role="main">
			<?php require roots_template_path(); ?>
			</main><!-- /.main -->
			<?php if ( roots_display_sidebar() ) : ?>
			<?php endif; ?>
		</div><!-- /.content -->
  </div><!-- /.wrap -->

	<?php get_footer(); ?>

	</div><!-- /.ccfw-banner-background class set in header -->

</body>
</html>
