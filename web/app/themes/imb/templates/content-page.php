<div class="row">

	<div class="col-sm-4">

		<?php
$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
the_post_thumbnail('large');
  if(!empty($get_description)){//If description is not empty show the div
  echo '<div class="img-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</div>';
  }
?>
		<?php

			if (is_page(array(16,28,62 ))) { 

				wpb_list_child_pages(); 

				}
			else {

			}
		
		?>

	
		
	</div>

	<div class="col-sm-8">

		<?php the_content(); ?>

	</div>
</div>