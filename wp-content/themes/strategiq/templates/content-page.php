<section class="section">
  <div class="container">
    <article <?php post_class(); ?>>
      <header>
        <?php get_template_part('templates/page', 'header'); ?>
      </header>
      <?php the_content(); ?>
    </article>
  </div>
</section>
