<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <div class="page-header-category">
    <?php the_category(', '); ?>
  </div>
  <h1 class="page-header-title"><?= Titles\title(); ?></h1>
  <div class="page-header-meta">
    <?php get_template_part('templates/entry-meta'); ?>
  </div>
</div>


