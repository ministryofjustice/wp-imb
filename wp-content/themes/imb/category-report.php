<?php
/* 
Template Name: Category report archive
*/
?>


<div class="page-header">
	<?php the_title( '<h1>', '</h1>' ); ?>
</div>

<div class="archive-links">
	<ul>
		<?php

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$year = $post->post_name;

		$args = array( 
			'posts_per_page' => 20, 
			'paged' => $paged,
			'report_year' => $year, 
			'order'=> 'ASC', 
			'orderby' => 'title',
			'post_type' => 'report' );

		    $postslist = new WP_Query( $args );

		    if ( $postslist->have_posts() ) :
		        while ( $postslist->have_posts() ) : $postslist->the_post(); 

		             echo '<li><h4><a href="';
		                 the_permalink(); 
		             echo '">';
		                 the_title();
		             echo '</a> <span class="file-meta"> PDF, 0.12Mb</span></h4>
				</li>';

		         endwhile;  
		         	endif;
		?>

	</ul>

</div>

<div class="pagination">
	<?php
	$big = 999999999; // need an unlikely integer

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $postslist->max_num_pages
	) );

	?>
</div>