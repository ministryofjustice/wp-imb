<?php if(!is_page('current-vacancies' )): ?>
<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title">
      <?php $file = get_post_meta($post->ID, "report-upload"); ?>
      <?php if($post->post_type == 'report' && !empty($file[0])): ?>
	    <a href="<?= $file[0]; ?>"><?php the_title(); ?></a>
	  <?php else: ?>
	    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	  <?php endif; ?>
    </h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

  <hr/>
</article>
<?php else: ?>
<article <?php post_class(); ?> id="job-<?= get_the_ID(); ?>">
  <header>
    <h3 class="entry-title">
      Volunteer IMB Board Members required at <?php the_title(); ?>
    </h3>
  </header>
  <div class="entry-summary">
    <?php $description = get_post_meta( $post->ID, 'description', true ); ?>
    <?php if(!empty($description)): ?>
    <p><?= $description; ?></p>
    <?php endif; ?>

    <?php $time = get_post_meta( $post->ID, 'time-commitment', true ); ?>
    <?php if(!empty($time)): ?>
    <p><strong>Time commitment per month:</strong> <?= $time ?></p>
    <?php endif; ?>

    <?php $rcr = get_post_meta( $post->ID, 'rcr', true ); ?>
    <?php if(!empty($rcr)): ?>
    <p><strong>Recruitment Campaign Reference (to be quoted on all correspondence and forms):</strong> <?= $rcr ?></p>
    <?php endif; ?>

    <?php $date = get_post_meta( $post->ID, 'closing-date', true ); ?>
    <?php if(!empty($date)): ?>
    <?php $date = DateTime::createFromFormat("Y-m-d", $date); ?>
    <p><strong>Closing date for completed returned applications:</strong> <?= date_format($date, 'd/m/Y') ?></p>
    <?php endif; ?>
  </div>

</article>
<?php endif; ?>
