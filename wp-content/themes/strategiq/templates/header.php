<header class="main-header" role="banner">
  <div class="nav-row">
    <div class="container">
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
          <div class="collapse navbar-collapse" id="navbar-collapse">

            <?php if(!is_front_page()) {
              $url_prefix = esc_url(site_url()) . '/';
            } ?>

            <ul class="nav-items nav navbar-nav">
              <li><a href="<?= $url_prefix; ?>#about">About Us</a></li>
              <li><a href="<?= $url_prefix; ?>#team">The Team</a></li>
              <li><a href="<?= $url_prefix; ?>#portfolios">Portfolio Management</a></li>
              <li class="<?php if(is_category('newsletters')) echo 'active'; ?>"><a href="<?=esc_url(site_url());?>/category/insights">Insights</a></li>
              <li><a href="<?= $url_prefix; ?>#contact">Contact Us</a></li>
            </ul>

            <div class="nav-contact">
              <div class="container">
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
              </div>
            </div>
          </div>
      </nav>
    </div>
  </div>
</header>
