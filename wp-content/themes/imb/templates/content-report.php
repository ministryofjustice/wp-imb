<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>



      <div class="news-meta">
        <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
      </div>

    </header>
    <div class="entry-content">

        <?php the_excerpt(); ?>

        <?php $fname = get_post_meta(get_the_ID(),'report-upload',true);  ?>

        <a class="em-link float-right" href="<?php echo $fname; ?>">View/download report (PDF, 0.12Mb)</a>

        <!--Attachment ID and filesize need to be made dynamic -->

    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
