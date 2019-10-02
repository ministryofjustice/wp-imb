<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
</head>

<header class="banner" role="banner">
	<div class="container navbar-expand-md navbar navbar-default navbar-static-top flex-wrap">
		<div id="branding" class="flex-fill">
			<a href="<?php echo home_url(); ?>">
				<img alt="IMB Logo" src="<?php bloginfo('template_directory'); ?>/assets/img/IMBLogo_2X.png" />
			</a>
		</div>

		<div id="search" class="align-self-start flex-fill flex-shrink-0">
			<?php get_search_form(); ?>
		</div>

		<div class="navbar-header">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
					aria-controls=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<nav class="collapse navbar-collapse col-sm-12" role="navigation">
			<?php
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
			endif;
			?>
		</nav>
	</div>
</header>
