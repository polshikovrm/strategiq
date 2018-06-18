<section class="section section-home-banner">
    <?php  $block_background = get_field('block_background');  ?>
  <div class="header--col1" style="background: url(<?php  echo isset($block_background['url']) ? $block_background['url'] :'' ?> ) no-repeat;">
    <div class="banner-overlay">
        <div class="text-block">
            <h1><?php the_field('title'); ?></h1>
            <p><?php the_field('description'); ?></p>
            <a href="<?php the_field('link'); ?>" class="btn">Read More</a>
        </div>
    </div>
  </div>
  <div class="header--col2">
    <div class="header--col2--insights">
      <h2 class="section-title sub-title colour-white">Insights</h2>

      <?php
      $loop = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'order' => 'DESC',
        'orderby' => 'date',
      ));
      while ($loop->have_posts()) : $loop->the_post();
      ?>
        <?php get_template_part('templates/content', 'post-sm'); ?>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
    <div class="header--col2--signup subscribe-block">
      <!-- Begin MailChimp Signup Form -->
      <p>Sign up to receive our weekly StrategiQ Review:</p>
      <div id="mc_embed_signup" style="display: inline">
        <form class="" action="//strategiq.us13.list-manage.com/subscribe/post?u=3a50351e0acc4f1457cd02f65&amp;id=fe221daeb0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

          <div class="input-group">
            <label for="mce-EMAIL" class="sr-only">Email:</label>
            <input type="email" class="form-control input-lg" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email address">

            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_3a50351e0acc4f1457cd02f65_fe221daeb0" tabindex="-1" value=""></div>

            <span class="input-group-btn">
              <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default">Sign up</button>
            </span>
          </div><!-- /input-group -->
        </form>
      </div>
      <!--End mc_embed_signup-->
    </div>
  </div>
</section>
<?php $page = get_page_by_path( 'about-us' ) ?>

<section class="section content-section">
    <div class="container">
        <div class="title-block text-center">

            <h1>About Us</h1>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-push-1 text-center">
<!--                --><?php //echo the_field('main_section_content', $page->ID);?>
                <p>StrategiQ Capital (Pty) Ltd (“StrategiQ”) is an owner-managed and independent investment firm. Our goal is to forge long-term relationships built on delivery and trust.</p>
                <p>Our business is to actively manage our clients’ wealth, helping them to achieve their unique investment goals.</p>
                <p>We are driven to build a world-class investment firm that helps our clients secure a better financial future.</p>
                <div class="btn-box">
                    <a href="<?php echo get_the_permalink( $page );?>" class="btn btn-default small-radius btn-lg">FIND OuT MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section twocolumn-section image-bg services-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/bg-services-section.jpg)">
    <div class="text-holder">
        <div class="text">
            <div class="title-block">
                <h1>Our Services</h1>
            </div>
            <p>StrategiQ is an approved discretionary investment manager (i.e. a Category II Financial Services Provider, FSP Licence No 46624) focused on providing investors with superior investment performance and quality service.</p>
            <p>We believe that expert financial advice plays an important role in assisting our clients’ to achieve their long-term financial goals. We therefore consider it crucial to partner with skillful financial advisers.</p>
            <p>All our services are underpinned by a disciplined and rigorous investment process. Find out more about each of our investment services below:</p>
            <div class="buttons-holder">
                <a href="<?php echo get_permalink(get_page_by_path('asset-management'))?>" class="btn btn-default small-radius btn-md">asset Management</a>
                <a href="<?php echo get_permalink(get_page_by_path('family-office'))?>" class="btn btn-default small-radius btn-md">Family Office</a>
                <a href="http://www.strategiqadvisor.com/" class="btn btn-default small-radius btn-md" target="_blank">IQ Advisor</a>
            </div>
        </div>
    </div>
</section>
<section id="team" class="section section-home-team">
  <div class="container">
      <div class="title-block text-center">
          <h1>our Team</h1>
      </div>
    <div class="row">
      <div class="col-sm-11 col-sm-push-1 text-center text-frame">
        <p>The investment team is comprised of passionate investment professionals with diverse qualifications, extensive experience and sound knowledge of the investment industry. We combine entrepreneurial spirit and intuition within the disciplined framework of our investment process in the management of our clients' portfolios.</p>
          <p>Our boutique environment and team culture encourages growth and innovation within the maxims of honesty, integrity and respect.</p>
      </div>
    </div>
    <ul class="team-thumbs">
      <li class="active">
        <a href="#team-luis"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_luis_sm.jpg" alt=""></a>
      </li>
      <li>
        <a href="#team-rob"><img src="<?php echo get_template_directory_uri(); ?>/dist//images/team_rob_sm.jpg" alt=""></a>
      </li>
      <li>
        <a href="#team-ben"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_jarred_sm.jpg" alt=""></a>
      </li>
      <li class="team-linebreak"></li>
      <li>
        <a href="#team-jason"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_jason_sm.jpg" alt=""></a>
      </li>
      <li>
        <a href="#team-rejhan"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_rejhan_sm.jpg" alt=""></a>
      </li>
      <li>
        <a href="#team-sheree"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_sheree_sm.jpg" alt=""></a>
      </li>
    </ul>

    <div id="team-luis" class="team-item">
      <div class="row">
        <div class="col-sm-4 col-sm-push-1">
          <div class="team-item-pic">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_luis_lg.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-6 col-sm-push-2">
          <h2 class="team-item-name">Luis Levy <small>(B.Com, CFA)</small></h2>
          <div class="team-item-designation">CEO</div>
          <div class="team-item-bio">
            <p>Luis obtained his B Com degree from the University of Cape Town and is a CFA Charter Holder. He started his financial services career in 1998 at Old Mutual and has gained valuable experience in fund management at several leading financial institutions.</p>
            <p>Luis was one of the founders of Mergence Investment Managers – a company which he helped expand to assets under management in excess of R6 billion in institutional funds at the time of his departure. During his career he has also managed numerous mandates for retirement funds.  Following his departure from Mergence, Luis joined Efficient Select, the asset management arm of the listed Efficient Group. He was appointed Managing Director of Efficient Select in 2011, where he was able to successfully grow the fund manager in the retail and institutional markets. In June 2015 he departed to setup StrategiQ Capital.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="team-ben" class="team-item">
      <div class="row">
        <div class="col-sm-4 col-sm-push-1">
          <div class="team-item-pic">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_jarred_lg.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-6 col-sm-push-2">
          <h2 class="team-item-name">Jarred Freedberg <small>(BBusSci Finance - Honours)</small></h2>
          <div class="team-item-designation">Analyst</div>
          <div class="team-item-bio">
            <p>Jarred graduated with a Bachelor’s of Commerce in Finance from the University of Cape Town (UCT). Jarred joined Strategiq Capital as an investment analyst in February 2015. Further, he has completed an honors in finance at the University of Cape Town, investigating the mitigation of risk within pair-trading strategies and is currently enrolled in the CFA programme. Jarred featured as the youngest ever contestant on the CNBC Africa Top Trader television show. He is predominantly responsible for the coverage of domestic and offshore equity instruments.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="team-rob" class="team-item">
      <div class="row">
        <div class="col-sm-4 col-sm-push-1">
          <div class="team-item-pic">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_rob_lg.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-6 col-sm-push-2">
          <h2 class="team-item-name">Robert Enslin <small>(B.Com Honours, CFA)</small></h2>
          <div class="team-item-designation">Director – Investment Management</div>
          <div class="team-item-bio">
            <p>Rob obtained his B Com Honours degree from the University of Stellenbosch and is a CFA Charter Holder. He started his financial services career in 2008 at ValuGro Capital which was rated as the top small asset management company during the same year. Valugro Capital was subsequently purchased by the listed Efficient Group and the asset management arm was renamed Efficient Select in 2011.
            <p>During his time at ValuGro Capital and Efficient Select, Rob Enslin was the portfolio manager of the Efficient Worldwide Flexible Fund which was the recipient of two Raging Bull Awards in 2011 and 2012 as the top performing fund (risk adjusted) in its category over a rolling 5 year period.  In 2015, Rob was appointed as Head of Private Clients, specialising in investments for high net worth clients, where he was able to successively implement a business strategy for the division and grow assets under management. In 2016, he departed to join StrategiQ Capital.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="team-jason" class="team-item">
      <div class="row">
        <div class="col-sm-4 col-sm-push-1">
          <div class="team-item-pic">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_jason_lg.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-6 col-sm-push-2">
          <h2 class="team-item-name">Jason Frank <small>(BBusSci Finance - Honours)</small></h2>
          <div class="team-item-designation">Analyst</div>
          <div class="team-item-bio">
            <p>Jason Frank graduated with a Bachelor’s of Commerce in Finance from the University of Cape Town (UCT). Further, he has completed an honors in finance at the University of Cape Town, investigating the internal liquidity risk effects on bond yield spreads. He is currently enrolled in the CFA programme. Jason is the newest member to the iQ team, joining as an equity analyst as of June 2016. He is predominantly responsible for the coverage of domestic and offshore equity instruments.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="team-rejhan" class="team-item">
      <div class="row">
        <div class="col-sm-4 col-sm-push-1">
          <div class="team-item-pic">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_rejhan_lg.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-6 col-sm-push-2">
          <h2 class="team-item-name">Re-Jahn Allie</h2>
          <div class="team-item-designation">Client Administrator</div>
          <div class="team-item-bio">
            <p>Re-Jahn is currently completing her B.Com degree in Business Management from the University of South Africa. She started her career in 2013 at Efficient Select as receptionist and in 2015 joined the Efficient Select Private Clients team as private clients administrator. In 2016, she departed to join StrategiQ Capital.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="team-sheree" class="team-item">
      <div class="row">
        <div class="col-sm-4 col-sm-push-1">
          <div class="team-item-pic">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/team_sheree_lg.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-6 col-sm-push-2">
          <h2 class="team-item-name">Sheree Farao</h2>
          <div class="team-item-designation">Client Support</div>
          <div class="team-item-bio">
            <p>Sheree matriculated from Milnerton High School in 2009. Sheree joined the team in January 2017 as a receptionist. Sheree is excited to be joining the financial field and will strive to grow within the field. Customer service is her strength and she cannot wait to interact with all our clients and assist her colleagues.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section-home-portfolios">
    <div class="container">
        <div class="title-block text-center">
            <h1>Our Partners</h1>
        </div>
        <div class="partners-carousel owl-carousel">
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_sanlam.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_hewett.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_momentum.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_nedbank.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_credo.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_ens.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_agcapital.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_swissquote_2.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_iis.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_investec.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_nedgroup.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_sastockbrokers.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_oldmutual.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_moonstone.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_pwh.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_glacier.gif">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_stanlib.gif">
            </div>
        </div>
    </div>
</section>
<section id="newsletters" class="section section-home-newsletters">
  <div class="container">
    <h1 class="section-title colour-white">Insights</h1>

    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-5 col-lg-push-1">
        <p>Sign up below if you are interested in receiving our weekly iQ Review:</p>
        <div class="subscribe-block">
          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup" style="display: inline">
            <form class="" action="//strategiq.us13.list-manage.com/subscribe/post?u=3a50351e0acc4f1457cd02f65&amp;id=fe221daeb0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

              <div class="input-group">
                <label for="mce-EMAIL" class="sr-only">Email:</label>
                <input type="email" class="form-control input-lg" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email address eg. john@gmail.com">

                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_3a50351e0acc4f1457cd02f65_fe221daeb0" tabindex="-1" value=""></div>

                <span class="input-group-btn">
                  <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default">Sign up</button>
                </span>
              </div><!-- /input-group -->
            </form>
          </div>
          <!--End mc_embed_signup-->
        </div>
      </div>
      <div class="col-sm-6 col-sm-push-0 col-md-5 col-md-push-1 col-lg-4 col-lg-push-2">
        <div class="well">
          <p>If you would like to access previous Newsletters:</p>
          <a href="<?php bloginfo('url');?>/category/insights" class="btn btn-default btn-md">Download them here</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="section section-home-contact">
  <div id="contact-map"></div>
  <div class="contact-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 margin-bot-md">
          <h1 class="section-title section-title-left">Get in touch</h1>
          <div id="wufoo-z1tnp5ky1uykld1"></div>
          <script type="text/javascript">var z1tnp5ky1uykld1;(function(d, t) {
          var s = d.createElement(t), options = {
          'userName':'riaanwest',
          'formHash':'z1tnp5ky1uykld1',
          'autoResize':true,
          'height':'580',
          'async':true,
          'host':'wufoo.com',
          'header':'hide',
          'ssl':true};
          s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
          s.onload = s.onreadystatechange = function() {
          var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
          try { z1tnp5ky1uykld1 = new WufooForm();z1tnp5ky1uykld1.initialize(options);z1tnp5ky1uykld1.display(); } catch (e) {}};
          var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
          })(document, 'script');</script>

        </div>
        <div class="col-sm-4 col-sm-push-1">
          <h1 class="section-title section-title-left">Contact Details</h1>
          <p><strong>Physical Address:</strong><br>
          201, Cape Quarter<br>
          27 Somerset Road<br>
          De Waterkant, Cape Town<br>
          8001</p>

          <p><a href="https://www.google.com/maps/place/Cape+Quarter+Lifestyle+Village/@-33.9159616,18.4157869,16.72z/data=!4m2!3m1!1s0x1dcc675d70c13d95:0xa34dfff6d83e02e0?hl=en-GB" target="_blank" class="btn btn-default btn-sm margin-bot-md">View larger map</a></p>

          <strong>Telephone:</strong> 27 (0)21 401 8940<br>
          <strong>Email:</strong> <a href="mailto:info@strategiq.co.za">info@strategiq.co.za</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--
But if you use this on a localhost server or a live website you will need to include an API key.
Sign up for one here (it's free for small usage):
https://developers.google.com/maps/documentation/javascript/tutorial#api_key

After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY&sensor=false"></script>
-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
    var mapOptions = {
      zoom: 15,
      center: new google.maps.LatLng(-33.9155047, 18.4160099),
      scrollwheel: false,
      styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
    };
    var mapElement = document.getElementById('contact-map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(-33.9155047, 18.4160099),
        map: map,
        title: '201, Cape Quarter'
    });
  }
</script>



<div class="modal fade modal-portfolio" id="modal-domestic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-portfolio--photo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_domestic_sm.jpg">
        </div>
        <div class="modal-portfolio--copy">
          <h3 class="modal-portfolio--title">Domestic Managed Portfolio</h3>
          <div class="modal--content">
            A diversified segregated share portfolio (not a fund) of domestically listed equities which we believe to be well-positioned to outperform the wider equity market (FTSE/JSE All Share) over the longer term. The portfolio is ideally suited to investors with a high-risk tolerance and an investment time horizon of 5 years or longer.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-portfolio" id="modal-preference" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-portfolio--photo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_preference_sm.jpg">
        </div>
        <div class="modal-portfolio--copy">
          <h3 class="modal-portfolio--title">Preference Share Portfolio</h3>
          <div class="modal--content">
            A diversified segregated share portfolio (not a fund) of locally listed preference shares which we believe to be well-positioned to outperform the wider preference share index over the longer term. The portfolio is ideally suited to investors with a moderate risk tolerance and an investment time horizon of 3 years or longer.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-portfolio" id="modal-property" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-portfolio--photo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_property_sm.jpg">
        </div>
        <div class="modal-portfolio--copy">
          <h3 class="modal-portfolio--title">Property Share Portfolio</h3>
          <div class="modal--content">
            A diversified segregated share portfolio (not a fund) of listed REIT’s (real estate investment funds) which we believe to be well-positioned to outperform the wider property sector (J253 Index) over the longer term. The portfolio is ideally suited to investors with a high-risk tolerance and an investment time horizon of 5 years or longer.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-portfolio" id="modal-global" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-portfolio--photo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_global_sm.jpg">
        </div>
        <div class="modal-portfolio--copy">
          <h3 class="modal-portfolio--title">Global Managed Portfolio</h3>
          <div class="modal--content">
            A diversified segregated share portfolio (not a fund) of globally listed equities which we believe to be well-positioned to outperform the wider equity market (MSCI World Index) over the longer term. The portfolio is ideally suited to investors with a high-risk tolerance and an investment time horizon of 5 years or longer.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-portfolio" id="modal-bespoke" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-portfolio--photo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_bespoke_sm.jpg">
        </div>
        <div class="modal-portfolio--copy">
          <h3 class="modal-portfolio--title">Bespoke Portfolios</h3>
          <div class="modal--content">
             StrategiQ offers clients a Bespoke Portfolio service. This service takes into account the client's specific investment objectives, attitude and capacity for risk, expected returns, and investment restrictions.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-portfolio" id="modal-prudential" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-portfolio--photo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_prudential_sm.jpg">
        </div>
        <div class="modal-portfolio--copy">
          <h3 class="modal-portfolio--title">Prudential Share Portfolio</h3>
          <div class="modal--content">
            A multi-asset segregated share portfolio (not a fund) that complies with Regulation 28 of the Pension Funds Act. It invests across 8 broad asset classes including local and offshore equity, bonds, listed property and cash. The portfolio only includes investments which fit our quality criteria with emphasis being placed on active stock selection and bottom-up fundamental research. The portfolio is managed on a daily basis by the portfolio manager with the objective of outperforming the ASISA South African Multi-Asset High Equity category average.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-portfolio" id="modal-income" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-portfolio--photo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_income_sm.jpg">
        </div>
        <div class="modal-portfolio--copy">
          <h3 class="modal-portfolio--title">Income Focused Portfolio</h3>
          <div class="modal--content">
            Seeks to achieve a total return after fees that exceeds the total return of the STeFI Composite Index over a rolling three-year period. The portfolio seeks to offer investors a diversified portfolio of higher yielding securities that are of sound credit quality with capital preservation as a priority, to provide investors with attractive risk-adjusted returns.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-portfolio" id="modal-multiasset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-portfolio--photo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_multiasset_sm.jpg">
        </div>
        <div class="modal-portfolio--copy">
          <h3 class="modal-portfolio--title">Multi-Asset Portfolios</h3>
          <div class="modal--content">
            Available in local and global formats, our multi manager portfolios use an optimal blend of talented investment managers to achieve a pre-specified risk objective. We select investment managers based on a rigorous due diligence framework. Quantitative and qualitative measures are used to analyse investment managers’ capabilities.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
