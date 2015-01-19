<div class="row">

	<div class="col-sm-4">

		<?php the_post_thumbnail('large');
        	echo '<span class="img-caption">' . get_post(get_post_thumbnail_id())->post_content . '</span>'; 
        ?>

	</div>

	<div class="col-sm-8">

		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

	</div>
</div>