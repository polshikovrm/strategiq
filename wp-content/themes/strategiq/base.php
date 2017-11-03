<?php

use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes();?>>
  <?php get_template_part('templates/head');?>
  <body <?php body_class();?> data-spy="scroll" data-target=".navbar-collapse" data-offset="60">

    <div class="main-wrapper">
      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage');?>
        </div>
      <![endif]-->
      <?php
do_action('get_header');
get_template_part('templates/header');
?>
      <?php include Wrapper\template_path();?>
      <?php
do_action('get_footer');
get_template_part('templates/footer');
?>
      </div><!-- /.main-wrapper -->

      <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenLite.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/easing/EasePack.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/plugins/CSSPlugin.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/plugins/ScrollToPlugin.min.js"></script>
      <?php wp_footer();?>
  </body>
</html>
