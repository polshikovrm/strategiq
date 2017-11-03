<section class="section section-home-banner">
  <div class="header--col1">
    <div class="banner-overlay">
      <p>
        StrategiQ Capital is an independent investment manager with experience in managing personalised investment portfolios for private investors, trusts and institutions
      </p>
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

<section id="about" class="section section-home-about">

  <div class="about-col1">
    <div class="about--about">
      <div class="about--content">
        <div class="about--icon">
          <span class="icon-info"></span>
        </div>
        <h2 class="section-title size-sm colour-white">About Us</h2>
        <p>StrategiQ Capital was founded in 2015 with the culmination of like-minded investment professionals seeking to actively manage and grow investors wealth. As guardians of the capital entrusted to us we invest our money alongside our investors ensuring an alignment of interests.</p>
        <p>We believe that our mandate is not limited to investment performance alone, but also in playing an active role in assisting our clients in developing an overarching wealth management strategy. This will only be achieved by building meaningful relationships with our clients, thus facilitating a seamless transfer of assets from generation to generation, ensuring an uninterrupted continuity of their family’s legacy and business interests.</p>
      </div>
    </div>
    <div class="about--manager">
      <div class="about--content">
        <div class="about--icon">
          <span class="icon-diamond"></span>
        </div>
        <h2 class="section-title size-sm colour-white">Discretionary Investment Manager</h2>
        <p>StrategiQ is an approved discretionary investment manager (i.e. a Category II Financial Services Provider, FSP Licence No 46624) that is independently managed, focussed on providing investors with consistent real returns whilst preserving capital over the long term. Our service and reporting to our clients takes two forms, written and personal.</p>
        <p>We produce quarterly reports which cover the respective portfolio’s performance and risk statistics. We like to meet frequently with clients to stay close to their portfolio objectives and any changes that may need to be considered in the management of their portfolios. Our Weekly Review emailed each week keeps our clients abreast of current market conditions.</p>
      </div>
    </div>
  </div>

  <div class="about-col2">
    <div class="about--style">
      <div class="about--content">
        <div class="about--icon">
          <span class="icon-bulb"></span>
        </div>
        <h2 class="section-title size-sm colour-white">Investment Style</h2>
        <p>At StrategiQ Capital we understand that every investor is different, requiring a personalised investment strategy that will meet their long term goals and objectives.</p>
        <p>Our investment philosophy and approach is governed by the following key principles:</p>
        <ul class="margin-bot-none">
          <li class="margin-bot-sm">
            We are a discretionary asset manager (we assume responsibility in managing our client’s portfolios);
          </li>
          <li class="margin-bot-sm">
            We focus on identifying high-quality investments because it makes sense to us and fits our risk averse-personalities;
          </li>
          <li class="margin-bot-sm">
            We are active managers, focused on providing clients with consistent real returns whilst seeking to preserve their capital over the long-term;
          </li>
          <li class="margin-bot-sm">
            We follow an unconstrained, high conviction approach to investing which proves to generate additional returns in the long-term;
          </li>
          <li class="margin-bot-sm">
            We leverage specialist investment professionals utilising their skill and knowledge where it can add value;
          </li>
          <li class="margin-bot-sm">
            We ensure effective diversification at all levels (across asset classes and geographies); and
          </li>
          <li class="margin-bot-sm">
            We structure portfolios to be cost and tax effective.
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="about-col3">
   <div class="about--team">
      <div class="about--content">
        <div class="about--icon">
          <span class="icon-people"></span>
        </div>
        <h2 class="section-title size-sm colour-white">The Team</h2>
        <p>The investment team is comprised of passionate investment professionals with diverse qualifications, extensive experience and sound knowledge of the investment industry. We combine entrepreneurial spirit and intuition within the disciplined framework of our investment process in the management of our clients’ portfolios. </p>
        <p class="margin-bot-md">Our boutique environment and team culture encourages growth and innovation within the maxims of honesty, integrity and respect.</p>

        <div class="text-center margin-bot-md">
          <a href="#team" class="btn btn-outline-white page-link">Meet The Team</a>
        </div>
      </div>
    </div>

    <div class="about--why">
      <div class="about--content">
        <div class="about--icon">
          <span class="icon-trophy"></span>
        </div>
        <h2 class="section-title size-sm colour-white">Why Us</h2>
        <ul>
          <li>Owner-managed and independent, allowing us the necessary flexibility to put clients first;</li>
          <li>A dynamic investment process that is personalised to the unique needs of each client;</li>
          <li>Highly qualified and experienced investment team delivering institutional skills to private clients;</li>
          <li>Market and industry insights; and</li>
          <li>The highest standards of client service.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="team" class="section section-home-team">
  <div class="container">
    <h1 class="section-title">The Team</h1>
    <div class="row">
      <div class="col-sm-8 col-sm-push-2 text-center">
        <p class="margin-bot-xl">The investment team is comprised of passionate investment professionals with diverse qualifications, extensive experience and sound knowledge of the investment industry. We combine entrepreneurial spirit and intuition within the disciplined framework of our investment process in the management of our clients’ portfolios. Our boutique environment and team culture encourages growth and innovation within the maxims of honesty, integrity and respect.</p>
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
          <ul class="team-item-contact">
            <!--<li>
              <a href=""><span class="icon-facebook"></span></a>
            </li>
            <li>
              <a href=""><span class="icon-twitter"></span></a>
            </li>-->
            <li>
              <a href="mailto:luis@strategiq.co.za"><span class="icon-envelope"></span></a>
            </li>
          </ul>
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
          <ul class="team-item-contact">
            <!--<li>
              <a href=""><span class="icon-facebook"></span></a>
            </li>
            <li>
              <a href=""><span class="icon-twitter"></span></a>
            </li>-->
            <li>
              <a href="mailto:jarred@strategiq.co.za"><span class="icon-envelope"></span></a>
            </li>
          </ul>
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
          <ul class="team-item-contact">
            <!--<li>
              <a href=""><span class="icon-facebook"></span></a>
            </li>
            <li>
              <a href=""><span class="icon-twitter"></span></a>
            </li>-->
            <li>
              <a href="mailto:robert@strategiq.co.za"><span class="icon-envelope"></span></a>
            </li>
          </ul>
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
          <ul class="team-item-contact">
            <li>
              <a href="mailto:jason@strategiq.co.za"><span class="icon-envelope"></span></a>
            </li>
          </ul>
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

<section id="portfolios" class="section section-home-portfolios">
  <div class="container">
    <h1 class="section-title">Portfolio Management Solutions</h1>
    <div class="margin-bot-xl text-center">
      <p>Our Personalised Investment Management Service enables you to delegate responsibility for managing your investments to Strategiq. Your dedicated investment manager will work with you to build a bespoke investment portfolio that is designed to meet your investment objectives. Your investment manager will then take responsibility for the day-to-day decision-making on your portfolio, deciding which investments to buy or sell, and when to do so.</p>
      <p>Every client has a unique set of aims, objectives and circumstances. Your investment manager will always begin by working with you or your financial adviser to identify a set of achievable investment goals that take into account your investment time horizon, your attitude to investment risk and the investment returns you require. Together you will review your options and decide on the best way to achieve your objectives.</p>
      <p>We believe asset allocation is a primary determinant of long-term investment performance. As a framework for constructing your portfolio we use a range of asset allocation strategies that have been determined by our Asset Allocation Committee. Your investment manager will then fine-tune your allocation to meet your exact requirements before selecting the investments held within each asset class.</p>
      <p>Your investment manager will ensure your portfolio always reflects our core views and remains on target to meet your personal objectives. Our managers are supported by our independent team of research analysts who conduct formal monitoring and due diligence of assets, to ensure that your portfolio is invested across what we believe is the best range of investment options.</p>
    </div>
  </div>

  <div class="portfolios">
    <div class="portfolios--left">
      <div class="portfolios--left--content">
        <h1 class="section-title section-title-left size-sm colour-white">Our Managed Portfolios</h1>
        <p>The StrategiQ Managed Portfolios are constructed in accordance with our Investment Philosophy and Process.</p>
        <p>Investors will have direct ownership of JSE listed equities, globally listed equities, real estate holdings, preference loan stock, and government bonds within the investment guidelines of each specific mandate.</p>
      </div>
    </div>
    <div class="portfolios--right">
      <ul class="portfolio-items">
        <li>
          <a href="" class="portfolio-item" data-toggle="modal" data-target="#modal-income">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_income_sm.jpg">
            <div class="portfolio-item--title">Income Focused Portfolio</div>
          </a>
        </li>
        <li>
          <a href="" class="portfolio-item" data-toggle="modal" data-target="#modal-preference">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_preference_sm.jpg">
            <div class="portfolio-item--title">Preference Share Portfolio</div>
          </a>
        </li>
        <li>
          <a href="" class="portfolio-item" data-toggle="modal" data-target="#modal-prudential">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_prudential_sm.jpg">
            <div class="portfolio-item--title">Prudential Share Portfolio</div>
          </a>
        </li>
        <li>
          <a href="" class="portfolio-item" data-toggle="modal" data-target="#modal-multiasset">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_multiasset_sm.jpg">
            <div class="portfolio-item--title">Multi-Asset Portfolios</div>
          </a>
        </li>
        <li>
          <a href="" class="portfolio-item" data-toggle="modal" data-target="#modal-property">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_property_sm.jpg">
            <div class="portfolio-item--title">Property Share Portfolio</div>
          </a>
        </li>
        <li>
          <a href="" class="portfolio-item" data-toggle="modal" data-target="#modal-domestic">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_domestic_sm.jpg">
            <div class="portfolio-item--title">Domestic Managed Portfolio</div>
          </a>
        </li>
        <li>
          <a href="" class="portfolio-item" data-toggle="modal" data-target="#modal-global">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_global_sm.jpg">
            <div class="portfolio-item--title">Global Managed Portfolio</div>
          </a>
        </li>
        <li>
          <a href="" class="portfolio-item" data-toggle="modal" data-target="#modal-bespoke">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/port_bespoke_sm.jpg">
            <div class="portfolio-item--title">Bespoke Portfolios</div>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="container">
    <h1 class="section-title size-md">Our Partners</h1>
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
