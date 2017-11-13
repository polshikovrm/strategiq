<?php
/**
 * Template Name: About Us
 */
?>
<section class="visual-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/bg-visual-about.jpg)">
  <div class="container">
    <h1>About us</h1>
  </div>
</section>
<section class="section content-section">
  <div class="container">
    <div class="title-block text-center">
      <h1>Introduction</h1>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-push-1 text-center">
       <?php the_content() ?>
      </div>
    </div>
  </div>
</section>
<section class="section gray-bg twocolumn-section">
  <div class="text-holder">
      <div class="text">
          <div class="title-block">
              <h1>Our Services</h1>
          </div>
          <?php the_field('our_services')?>
      </div>
  </div>
  <div class="image-holder">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-services.jpg" alt="image description">
  </div>
</section>
<section class="section purple-bg twocolumn-section">
  <div class="image-holder width-2">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-investment.jpg" alt="image description">
  </div>
  <div class="text-holder width-3">
      <div class="text">
          <div class="title-block">
              <h1>Investment Style</h1>
          </div>
          <?php the_field('investment_style')?>
      </div>
  </div>
</section>
<section class="section gray-bg twocolumn-section">
  <div class="text-holder">
      <div class="text">
          <div class="title-block">
              <h1>Why Us</h1>
          </div>
          <?php the_field('why_us') ?>
      </div>
  </div>
    <div class="image-holder">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-why.jpg" alt="image description">
    </div>
</section>
