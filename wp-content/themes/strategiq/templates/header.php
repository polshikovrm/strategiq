<header class="main-header" role="banner">
  <div class="nav-row">
    <div class="header-holder">
      <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=esc_url(home_url('/'));?>"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse menu-holder" id="navbar-collapse">

            <?php if(!is_front_page()) {
              $url_prefix = esc_url(site_url()) . '/';
            } ?>
            <?php wp_nav_menu(array('menu_class' =>'nav-items nav navbar-nav', 'menu' => 'Main Menu', 'echo' => true)) ?>


            <div class="nav-contact">
                <div class="contact-phone">27 (0)21 401 8940</div>
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
                <!--<div class="login-box">
                    <a href="#">Login</a>
                </div>-->
            </div>
          </div>
      </nav>
    </div>
  </div>
</header>
