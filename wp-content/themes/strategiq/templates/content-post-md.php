<?php
  if (get_field('pdf_download') ) {
    $url = get_field('pdf_download');
    $target = '_blank';
  } else {
    $url = get_permalink();
    $target = '';
  }
?>

<article class="post-md">
  <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="entry-thumb">
    <?php the_post_thumbnail( 'thumbnail' ); ?>
  </a>
  <div class="post-inner">
    <h5 class="entry-title"><a href="<?php echo $url; ?>" target="<?php echo $target; ?>"><?php the_title(); ?></a></h5>
    <div class="entry-date">
      <?php the_date(); ?>
    </div>
    <div class="entry-excerpt">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="btn btn-default btn-sm entry-btn">Read more</a>
  </div>
</article>
