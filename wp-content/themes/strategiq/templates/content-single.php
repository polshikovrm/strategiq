<?php while (have_posts()) : the_post(); ?>

  <section class="section">
    <div class="container">
      <article <?php post_class(); ?>>
        <header>
          <?php get_template_part('templates/post', 'header'); ?>
        </header>
        <div class="entry-content margin-bot-xl">
          <div class="post-thumbnail"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
          <?php the_content(); ?>
        </div>

        <?php if (get_field('pdf_download') ) { ?>
          <div class="text-center">
            <a href="<?php the_field('pdf_download'); ?>" target="_blank" class="btn btn-default btn-lg">Read the full iQ Review</a>
          </div>
        <?php } ?>

        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
      </article>
    </div>
  </section>

<?php endwhile; ?>
