<?php
/* 
Template Name: Job vacancies
*/
?>


<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="row vacancies">

<div class="col-sm-5">

<?php the_content(); ?>

</div>

<div class="col-sm-7">

<div class="job-sort">

<form role="search" method="get" class="search-form form-inline vs-search" action="">
  <label class="sr-only"><?php _e('Search for:', 'roots'); ?></label>
  <div class="input-group">
    <input type="search" value="<?php echo get_search_query(); ?>" name="vs" class="search-field form-control" placeholder="<?php _e('Search vacancies', 'roots'); ?>">
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><?php _e('', 'roots'); ?><img src="<?php bloginfo('template_directory'); ?>/assets/img/search-icon.png"></button>
    </span>
  </div>
</form>

<h4 class="sort-by">Sort by: <a href="<?php echo the_permalink() ?>">Closing Date</a> <a href="<?php echo the_permalink() ?>?sort=title">Prison</a> </h4>

</div>




<?php


$sort = get_query_var( 'sort' );
if(!empty($sort)){
  if($sort == 'title') {
    $orderby = array(
      'order' => 'ASC',
      'orderby' => 'title',
      //'meta_key' => 'closing-date'
    );
  }
}
$args = array(
  'post_type' => 'job',
  'posts_per_page' => -1,
  'orderby' => 'meta_value',
  'meta_key' => 'closing-date',
  'order' => 'ASC'
);
if(!empty($orderby)) {
  $args = array_merge($args, $orderby);
}
$vs = get_query_var( 'vs' );
if(!empty($vs)){
  $search = array(
    's' => esc_sql($vs)
  );
  $args = array_merge($args, $search);
}
$query = new WP_Query($args);

?>

<?php if (!$query->have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

<?php if ($query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>

</div>

</div>

<?php endwhile; ?>
