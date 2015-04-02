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


<h4 class="sort-by">Sort by: <a href="<?php echo the_permalink() ?>">Prison</a> <a href="<?php echo the_permalink() ?>?sort=date">Closing Date</a></h4>
<hr>

<?php
$sort = get_query_var( 'sort' );
if(!empty($sort)){
  if($sort == 'date') {
    $orderby = array(
      'order' => 'DESC',
      'orderby' => 'meta_value',
      'meta_key' => 'closing-date'
    );
  }
}
$args = array(
  'post_type' => 'job',
  'posts_per_page' => -1,
  'orderby' => 'title',
  'order' => 'ASC',
);
if(!empty($orderby)) {
  $args = array_merge($args, $orderby);
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
