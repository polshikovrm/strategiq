<footer class="footer" role="contentinfo">
  <div class="row-1">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_footer.gif" alt="StrategiQ Capital" class="footer-logo">
        </div>

        <div class="col-sm-2 margin-bot-sm">
            <?php wp_nav_menu(array('menu_class' =>'footer-nav footer-nav-bold', 'menu' => 'Footer Left Menu', 'echo' => true)) ?>
        </div>

        <div class="col-sm-2 margin-bot-sm">
          <?php
          if (has_nav_menu('footer_secondary_navigation')) :
            wp_nav_menu(['theme_location' => 'footer_secondary_navigation', 'menu_class' => 'footer-nav']);
          endif;
          ?>
        </div>
        <div class="col-sm-2">
          <ul class="contact-social">
            <li>
              <a href="https://www.facebook.com/StrategiQ-Capital-158555407854708" target="_blank"><span class="icon-facebook"></span></a>
            </li>
            <li>
              <a href="https://twitter.com/_StrategiQ_" target="_blank"><span class="icon-twitter"></span></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/strategiqcapital" target="_blank"><span class="icon-linkedin"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="row-2">
    <div class="container">
      &copy; <?php echo date('Y'); ?> StrategiQ Capital (Pty) Ltd. All rights reserved
    </div>
  </div>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75972901-1', 'auto');
    ga('send', 'pageview');

  </script>
</footer>
