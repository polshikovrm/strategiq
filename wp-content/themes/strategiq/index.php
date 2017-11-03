<section class="section">
  <div class="container">
    <?php get_template_part('templates/page', 'header'); ?>

    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no newsletters were found.', 'sage'); ?>
      </div>
      <a href="<?= esc_url(home_url('/')); ?>" class="btn btn-default">Go to the home page</a>
    <?php endif; ?>

    <div class="row">
      <ul class="news-items in-columns">
        <?php while (have_posts()) : the_post(); ?>
          <li class="col-sm-4 col-md-3">
            <?php get_template_part('templates/content', 'post-md'); ?>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php the_posts_navigation(); ?>
    </div>
  </div>
</section>
