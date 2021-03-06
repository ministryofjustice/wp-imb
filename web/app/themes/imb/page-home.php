<?php
/*
Template Name: Homepage
*/
?>

<?php while (have_posts()) : the_post(); ?>

	  	<div id="news-banner" class="container-fluid">
	  	<a href="<?php echo get_post_meta( $post->ID, "banner-link", true ); ?>" title="Link to <?php echo get_post_meta( $post->ID, "banner_heading", true ); ?>">
	  		<img src="<?php echo get_post_meta( $post->ID, "banner-image", true ); ?>" alt="Banner background image">
	  		</a>
		  		<div class="news-banner-text">
		  		<a href="<?php echo get_post_meta( $post->ID, "banner-link", true ); ?>" title="Link to <?php echo get_post_meta( $post->ID, "banner_heading", true ); ?>">
		  			<h2><?php echo get_post_meta( $post->ID, "banner_heading", true ); ?></h2>
		  			<p><?php echo get_post_meta( $post->ID, "banner-sub-heading", true ); ?></p>
		  			</a>

		  			<!-- <a href="<?php echo get_post_meta( $post->ID, "banner-link", true ); ?>" class= "float-right">Read more ></a> -->
		  		</div>
		  		</a>
	  	</div>

  	<div class="row">
  		<div class="col-sm-3 min-col">
  			<div class="quick-links side-item">
  				<ul>
  					<li><a href="<?php echo get_permalink( get_post_meta( $post->ID, "quick-link-1-page", true )); ?>"><?php echo get_post_meta( $post->ID, "quick-link-1", true ); ?> <span>&gt;</span></a></li>
  					<li><a href="<?php echo get_permalink( get_post_meta( $post->ID, "quick-link-2-page", true )); ?>"><?php echo get_post_meta( $post->ID, "quick-link-2", true ); ?> <span>&gt;</span></a></li>
  					<li><a href="<?php echo get_permalink( get_post_meta( $post->ID, "quick-link-3-page", true )); ?>"><?php echo get_post_meta( $post->ID, "quick-link-3", true ); ?> <span>&gt;</span></a></li>
  					<li><a href="<?php echo get_permalink( get_post_meta( $post->ID, "quick-link-4-page", true )); ?>"><?php echo get_post_meta( $post->ID, "quick-link-4", true ); ?> <span>&gt;</span></a></li>
  				</ul>
  			</div>

  			<div class="about side-item">
  				<h3><?php echo get_post_meta( $post->ID, "sidebar-text-title", true ); ?></h3>
  				<p><?php echo get_post_meta( $post->ID, "sidebar-text-p1", true ); ?></p>
  				<p><?php echo get_post_meta( $post->ID, "sidebar-text-p2", true ); ?></p>
  				<a href="<?php echo get_permalink( get_post_meta( $post->ID, "sidebar-link", true )); ?>" class="about-home">Read more about us</a>
  			</div>

   			<div class="links side-item">
  				<h3>Related links</h3>
  				<ul>
  					<li><a href="<?php echo get_post_meta( $post->ID, "related-link-1", true ); ?>"><?php echo get_post_meta( $post->ID, "related-1", true ); ?></a></li>
  					<li><a href="<?php echo get_post_meta( $post->ID, "related-link-2", true ); ?>"><?php echo get_post_meta( $post->ID, "related-2", true ); ?></a></li>
  					<li><a href="<?php echo get_post_meta( $post->ID, "related-link-3", true ); ?>"><?php echo get_post_meta( $post->ID, "related-3", true ); ?></a></li>
  					<li><a href="<?php echo get_post_meta( $post->ID, "related-link-4", true ); ?>"><?php echo get_post_meta( $post->ID, "related-4", true ); ?></a></li>
  				</ul>
  			</div>
  		</div>
  		<div class="col-sm-9 max-col">
			<div class="intro main-item">
				<h2><?php echo get_post_meta( $post->ID, "welcome-title", true ); ?></h2>
				<p><?php echo get_post_meta( $post->ID, "welcome-text", true ); ?></p>

				<a href="<?php echo get_permalink( get_post_meta( $post->ID, "welcome-link", true )); ?>" class="float-right em-link">Learn more ></a>
			</div>

			<div class="news main-item">
				<h2>Latest news</h2>
<ul>
						<?php
					// Get meta value containing array of entries
					$latest_news_args = array(
						'post_type' => 'post',
						'posts_per_page' => 3
					);
					$latest_news_query = new WP_Query( $latest_news_args );
					// Iterate over entries and display
					while ( $latest_news_query->have_posts() ) : $latest_news_query->the_post();
						?>
							<li>
								<div class="news-details">

									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

										<div class="news-meta">
											 <time class="published" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>
										</div>

										<?php if ( has_post_thumbnail() ) : ?>
											<div class="home-news-img-wrapper">
												<?php the_post_thumbnail('large'); ?>
											</div>
										<?php endif; ?>

										<?php the_excerpt(); ?>


							</div>
							</li>

						<?php
					endwhile;
					wp_reset_postdata();
					?>

				</ul>

			<a href="/imb/news/" class= "float-right em-link">More news ></a>

			</div>

			<?php
			$video = get_post_meta($post->ID, 'home-video', true);
			if (!empty($video)):
			?>
			<div class="media main-item video-container">
				<h2>Latest media</h2>
						<?php echo '<iframe width="676" height="380" src="'. esc_url($video) .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'; ?>
			</div>
      <?php endif; ?>

  		</div>
	</div>
</div>
<?php endwhile; ?>
