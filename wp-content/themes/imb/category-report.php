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

	$year = $post->post_name;

	$args = array( 'posts_per_page' => 20, 'post_type' => 'report', 'report_year' => $year, 'order'=> 'ASC', 'orderby' => 'title' );

	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<li>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="file-meta"> PDF, 0.12Mb</span></h4>
		</li>
	<?php endforeach; 
	wp_reset_postdata();?>

	</ul>

<div class="pagination">
	<?php echo paginate_links( $args ); ?>

</div>

</div>