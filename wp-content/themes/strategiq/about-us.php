<?php
/**
 * Template Name: Tile Full Width
 */
?>
<section class="visual-section" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    <div class="container">
        <h1>About us</h1>
    </div>
</section>
<section class="section content-section">
    <div class="container">
        <div class="title-block text-center">
            <h1><?php the_field('main_section_title') ?></h1>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-push-1 text-center">
                <?php the_field('main_section_content') ?>
            </div>
        </div>
    </div>
</section>
<?php if(have_rows('tile_section_options')):

    while(have_rows('tile_section_options')) : the_row(); ?>
        <?php
        switch(get_sub_field('section_text_block_width')){
            case 30:
                $text_block_width  = 'width-2';
                $image_block_width = 'width-3';
                break;
            case 70:
                $text_block_width  = 'width-3';
                $image_block_width = 'width-2';
                break;
            default:
                $text_block_width  = '';
                $image_block_width = '';
        }
        ?>

        <section class="section twocolumn-section" style="color: <?php the_sub_field('section_text_color') ?>; background: <?php the_sub_field('section_background_color') ?>">
            <?php if(get_sub_field('section_image_align') === 'right'){ ?>
                <div class="text-holder <?php echo $text_block_width ?>">
                    <div class="text">
                        <div class="title-block">
                            <h1><?php the_sub_field('section_title') ?>Our Services</h1>
                        </div>
                        <?php the_sub_field('section_decsription') ?>
                    </div>
                </div>
                <?php if(get_sub_field('is_block_image')): ?>
                    <div class="image-block gray-bg <?php echo $image_block_width ?>">
                        <img src="<?php the_sub_field('section_image'); ?>" alt="image description">
                    </div>
                <?php else: ?>
                    <?php if(get_sub_field('section_image')): ?>
                        <div class="image-holder <?php echo $image_block_width ?>">
                            <img src="<?php the_sub_field('section_image'); ?>" alt="image description">
                        </div>
                    <?php endif; ?>
                <?php endif ?>
            <?php }else{ ?>
                <?php if(get_sub_field('is_block_image')): ?>
                    <div class="image-block gray-bg <?php echo $image_block_width ?>">
                        <img src="<?php the_sub_field('section_image'); ?>" alt="image description">
                    </div>
                <?php else: ?>
                    <?php if(get_sub_field('section_image')): ?>
                        <div class="image-holder <?php echo $image_block_width ?>">
                            <img src="<?php the_sub_field('section_image'); ?>" alt="image description">
                        </div>
                    <?php endif; ?>
                <?php endif ?>
                <div class="text-holder <?php echo $text_block_width ?>">
                    <div class="text">
                        <div class="title-block">
                            <h1><?php the_sub_field('section_title') ?>Our Services</h1>
                        </div>
                        <?php the_sub_field('section_decsription') ?>
                    </div>
                </div>
            <?php } ?>

        </section>
    <?php endwhile ?>
<?php endif ?>
<!--<section class="section purple-bg twocolumn-section">-->
<!--  <div class="image-holder width-2">-->
<!--    <img src="--><?php //echo get_template_directory_uri(); ?><!--/dist/images/img-investment.jpg" alt="image description">-->
<!--  </div>-->
<!--  <div class="text-holder width-3">-->
<!--      <div class="text">-->
<!--          <div class="title-block">-->
<!--              <h1>Investment Style</h1>-->
<!--          </div>-->
<!--          <p>At StrategiQ Capital we understand that every investor is different, requiring a personalised investment strategy that will meet their long-term goals and objectives.</p>-->
<!--          <p>Our investment philosophy and approach is governed by the following key principles:</p>-->
<!--          <ul>-->
<!--              <li>We are a discretionary asset manager (we assume responsibilitty in managing our client's portfolios);</li>-->
<!--              <li>We focus on identifying high-quality investments because it makes sense to us and fits our risk averse-personalities;</li>-->
<!--              <li>We are active managers, focused on providing clients with consistent real returns whilst seeking to preserve their capital over the long-term;</li>-->
<!--              <li>We follow an unconstrained, high conviction approach to investing which proves to generate additional returns in the long-term;</li>-->
<!--              <li>We leverage specialist investment professionals utilising their skill and knowledge where it can add value;</li>-->
<!--              <li>We ensure effective diversification at all levels (across asset classes and geographies); and</li>-->
<!--              <li>We structure portfolios to be cost and tax effective.</li>-->
<!--          </ul>-->
<!--      </div>-->
<!--  </div>-->
<!--</section>-->
<!--<section class="section gray-bg twocolumn-section">-->
<!--  <div class="text-holder">-->
<!--      <div class="text">-->
<!--          <div class="title-block">-->
<!--              <h1>Why Us</h1>-->
<!--          </div>-->
<!--          <ul>-->
<!--              <li>Owner-managed and independent, allowing us the necessary flexibility to put clients first;</li>-->
<!--              <li>A dynamic investment process that is personalised to the unique needs of each client;</li>-->
<!--              <li>Highly qualified and experienced investment team delivering institutional skills to private clients;</li>-->
<!--              <li>Market and industry insights; and</li>-->
<!--              <li>The highest standards of client service.</li>-->
<!--          </ul>-->
<!--      </div>-->
<!--  </div>-->
<!--    <div class="image-holder">-->
<!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/dist/images/img-why.jpg" alt="image description">-->
<!--    </div>-->
<!--</section>-->
