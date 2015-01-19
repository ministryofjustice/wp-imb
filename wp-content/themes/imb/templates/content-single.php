<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
        <div class="row">
        <div class="col-sm-4 min-col">
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="news-img-wrapper">
            <?php the_post_thumbnail('large');
            echo '<span class="img-caption">' . get_post(get_post_thumbnail_id())->post_content . '</span>'; ?>
            
            </div>
            <?php endif; ?>
          </div>
          <div class="col-sm-8 mac-col">
            <?php the_content(); ?>
          </div>
          
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
