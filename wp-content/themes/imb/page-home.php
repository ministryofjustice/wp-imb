<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part( 'header'); ?>
	

  	<div id="news-banner" class="container-fluid">
  		<div class="news-banner-text">
  			<h2>IMB 2014 Annual Reports published</h2>
  			<p>The 2014 annual reports are now available to read online.</p>
  			<a href="#" class= "float-right">Read more ></a>
  		</div>
  	</div>


  	<div class="row">
  		<div class="col-md-3 min-col">
  			<div class="quick-links side-item">
  				<ul>
  					<li><a href="#">Vacancies ></a></li>
  					<li><a href="#">Latest news ></a></li>
  					<li><a href="#">Reports ></a></li>
  					<li><a href="#">IMB Academy ></a></li>
  				</ul>
  			</div>

  			<div class="about side-item">
  				<h3>About us</h3>
  				<p>Inside every prison, immigration removal centre and some short term holding facilities at airports, there is an Independent Monitoring Board (IMB) – a group of ordinary members of the public doing an extraordinary job.</p>
  				<p>IMB members are independent, unpaid and work an average of 2-3 days per month. Their role is to monitor the day-to-day life in their local prison or removal centre and ensure that proper standards of care and decency are maintained.</p>
  				<a href="#" class="about-home">Read more about us</a>
  			</div>

   			<div class="links side-item">
  				<h3>Related links</h3>
  				<ul>
  					<li><a href="#">Ministry of Justice</a></li>
  					<li><a href="#">Archived website</a></li>
  					<li><a href="#">Something</a></li>
  					<li><a href="#">Something else</a></li>
  				</ul>
  			</div>
  		</div>
  		<div class="col-md-9 max-col">
			<div class="intro main-item">
				<h2>Welcome to the official website of the Indepentent Monitoring Board</h2>
				<?php the_excerpt(); ?>
				<a href="#" class="float-right em-link">Learn more ></a>
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
									<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

										<div class="news-meta">
											<?php the_author_posts_link(); ?> <time class="published" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>
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
					?>

				</ul>
			<a href="#" class= "float-right em-link">More news ></a>
			</div>

			<div class="media main-item video-container">
			<h2>Latest media</h2>
				<iframe width="640" height="360" src="//www.youtube.com/embed/VZla8-O_qH8" frameborder="0" allowfullscreen></iframe>
			</div>
  		</div>
	</div>
</div>
<?php endwhile; ?>
