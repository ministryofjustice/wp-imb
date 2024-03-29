<?php get_template_part( 'head' ); ?>

<body <?php body_class(); ?>>

<?php
if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Open the body tag, pull in any hooked triggers.
	 **/
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
wp_body_open();
?>
<?php
include "lib/emergency-banner.php";
?>
<div class="ccfw-banner-background">
	<header class="banner" role="banner">
		<div class="container navbar-expand-md navbar navbar-default navbar-static-top flex-wrap">
			<div id="branding" class="flex-fill">
				<a href="<?php echo home_url(); ?>">
					<img alt="IMB Logo" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/IMBLogo_2X.png" />
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
				if ( has_nav_menu( 'primary_navigation' ) ) :
					wp_nav_menu(
						array(
							'theme_location' => 'primary_navigation',
							'menu_class'     => 'nav navbar-nav',
						)
					);
				endif;
				?>
			</nav>
		</div>
	</header>
    <?php get_template_part('templates/feedback-banner'); ?>
