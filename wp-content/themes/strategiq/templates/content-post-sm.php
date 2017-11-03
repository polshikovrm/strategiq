<?php
  if (get_field('pdf_download') ) {
    $url = get_field('pdf_download');
    $target = '_blank';
  } else {
    $url = get_permalink();
    $target = '';
  }
?>

<article class="post-sm">
  <a href="<?php echo $url; ?>" target="<?php echo $target; ?>">

    <h5 class="entry-title"><?php the_title(); ?></h5>
    <div class="entry-date">
      <?php the_date(); ?>
    </div>
    <div class="entry-excerpt">
      <?php the_excerpt(); ?>
    </div>
  </a>
</article>
