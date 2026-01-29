<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
$privacy_policy = esc_url(home_url('/privacy-policy/'));
?>

<section class="p-fv">
  <div class="p-fv__inner l-inner">
    <div class="p-fv__main">
      <div class="p-fv__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/ryo-hiratoko_fv.png" alt="Picture ofRyo Hiratoko">
      </div>
      <div class="p-fv__content">
        <div class="p-fv__tagline">
          <span>40+ websites delivered</span>
        </div>
        <h1 class="p-fv__catchcopy">
          <span class="c-text-green">One Partner</span> for Design, Development and Beyond.
        </h1>
        <p class="p-fv__sub-copy c-text">
          Backed by 15 years in IT, I plan, build and support websites from initial idea through long term growth,
          allowing you to stay focused on your business.
        </p>
        <div class="p-fv__btn">
          <a href="#contact">
            <div class="c-mail-btn__inner">
              <span>Get in touch</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="p-business">

  <div class="p-business__inner">
    <div class="p-business__head l-inner">
      <h2 class="p-business__title c-title">
        Business
      </h2>
    </div>

    <div class="p-business__content l-inner">
      <div class="p-business__hp p-hp">
        <div class="p-hp__bg">
          <div class="wave-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" preserveAspectRatio="none">
              <defs>
                <filter id="innerShadow" x="-50%" y="-50%" width="200%" height="200%">
                  <feOffset dx="0" dy="4" />
                  <feGaussianBlur stdDeviation="6" result="blur" />
                  <feComposite in="SourceGraphic" in2="blur" operator="arithmetic" k2="-1" k3="1"
                    result="innerShadow" />
                  <feFlood flood-color="rgba(0, 0, 0, 0.2)" result="color" />
                  <feMerge>
                    <feMergeNode in="innerShadow" />
                    <feMergeNode in="SourceGraphic" />
                  </feMerge>
                </filter>
              </defs>

              <path fill="#e4eeeb" filter="url(#innerShadow)"
                d="M0,80 C 240,0 480,160 720,80 C 960,0 1200,160 1440,80 V200 H0 Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" preserveAspectRatio="none">
              <defs>
                <filter id="innerShadow" x="-50%" y="-50%" width="200%" height="200%">
                  <feOffset dx="0" dy="4" />
                  <feGaussianBlur stdDeviation="6" result="blur" />
                  <feComposite in="SourceGraphic" in2="blur" operator="arithmetic" k2="-1" k3="1"
                    result="innerShadow" />
                  <feFlood flood-color="rgba(0, 0, 0, 0.2)" result="color" />
                  <feMerge>
                    <feMergeNode in="innerShadow" />
                    <feMergeNode in="SourceGraphic" />
                  </feMerge>
                </filter>
              </defs>

              <path fill="#e4eeeb" filter="url(#innerShadow)"
                d="M0,80 C 240,0 480,160 720,80 C 960,0 1200,160 1440,80 V200 H0 Z" />
            </svg>
          </div>
        </div>
        <div class="p-hp__content">
          <div class="p-hp__article">
            <div class="p-hp__head">
              <h3 class="p-hp__title">
                Web Creative (Websites & Landing Pages)
              </h3>
            </div>
            <div class="p-hp__body">
              <p class="p-hp__text c-text">
                Leave your website or landing page to me.
                I handle a wide range of tasks, from design to development, and build the right structure based on your business size, goals, and budget.
              </p>
            </div>
          </div>
          <div class="p-hp__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/laptop.png" alt="Image of laptop">
          </div>
        </div>
      </div>
    </div>

    <div class="p-business__content">
      <div class="p-business__lp p-lp">
        <div class="p-lp__content">
          <div class="p-lp__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/lp.png" alt="Design of landing pages">
          </div>
          <div class="p-lp__container c-bg-black c-shadow">
            <div class="p-lp__article">
              <div class="p-lp__head">
                <h3 class="p-lp__title c-title c-text-white">
                  Websites Built for Long Term Maintenance
                </h3>
              </div>
              <div class="p-lp__body">
                <p class="p-lp__text c-text c-text-white">
                  I organize the CSS structure to make your site easy to update and maintain.
                  I also implement SEO and LLM optimization, so your website performs well on Google and stays discoverable in modern AI search.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-business__content">
      <div class="p-business__op p-op">
        <div class="p-op__content l-inner">
          <div class="p-op__container">
            <div class="p-op__article">
              <div class="p-op__head">
                <h3 class="p-op__title c-title">
                  Japanese Market Entry Websites
                </h3>
              </div>
              <div class="p-op__body">
                <p class="p-op__text c-text">
                  If you need a website that connects with Japanese customers, I can help.
                  I have experience creating websites tailored for the Japanese market and can localize your site to match Japanese expectations and user behavior.
                </p>
              </div>
            </div>
          </div>
          <div class="p-op__img c-shadow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/maintenance.jpg" alt="Ryo is working on a website">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="p-about-me">
  <div class="p-about-me__inner l-inner">
    <div class="p-about-me__bg"></div>

    <div class="p-about-me__head">
      <h2 class="p-about-me__title">
        About Me
      </h2>
      <p class="p-about-me__lead c-lead">
        Backed by 15 years in IT and hands-on experience in web design, development, and project management.
      </p>
    </div>

    <div class="p-about-me__content">
      <div class="p-about-me__article">
        <div class="p-about-me__wrap">
          <div class="p-about-me__body">
            <p class="c-text">
              Hello. I am Ryo Hiratoko, a Japanese web creator based in Germany.
            </p>

            <p class="c-text">
              I have experience as a system engineer, and now I work on website creation. I build modern websites that clearly present your business and are strong for both Google Search and AI search.
            </p>

            <p class="c-text">
              With my background in development and operations, I focus on safety and maintainability. I also write clean and readable code, so your website is easy to update.
            </p>

            <p class="c-text">
              Skills: Figma, HTML, SCSS, JavaScript, PHP (WordPress), Python, LLMO, and on page SEO.
            </p>

            <p class="c-text">
              I also run <a href="<?php echo esc_url( ryo_lang_link_by_slug('kehl-japan') ); ?>" rel="noopener" class="c-text__link">Kehl Japan</a>, a local community for people interested in Japanese language and culture in the Kehl, Strasbourg, and Offenburg area. I host events where Japanese speakers, learners, and local businesses can connect.
            </p>
            <p class="c-text">
              Feel free to send me a message below.
            </p>
          </div>
        </div>
      </div>
      <div class="p-about-me__profile">
        <div class="p-about-me__position">
          Web Desinger / Developer / Project Manager
        </div>
        <div class="p-about-me__name">
          Ryo Hiratoko
        </div>
        <div class="p-about-me__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/ryo-hiratoko.png" alt="Picture of Ryo Hiratoko">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="p-work">
  <div class="p-work__inner">
    <div class="p-work__head">
      <h2 class="p-work__title c-title">
        Work
      </h2>
    </div>
    <div class="p-work__content">
      <!-- Swiper -->
      <div class="js-swiper workSwiper">
        <?php
        $args = array(
          'post_type' => 'works',
        );
        $works_query = new WP_Query($args);
        ?>

        <?php if ($works_query->have_posts()) : ?>
        <div class="swiper-wrapper">
          <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
          <?php $work_url = esc_url(get_post_meta(get_the_ID(), 'url', true)); ?>
          <div class="swiper-slide p-work__item">
            <div class="p-work__label">
              <span class="p-work__tagline"><?php echo esc_html(get_post_meta(get_the_ID(), 'tagline', true)); ?></span>
            </div>
            <!-- <a href="<?php echo $work_url; ?>" target="_blank" rel="noopener"> -->
            <div class="p-work__sample">
              <div class="p-work__img">
                <?php the_post_thumbnail('medium'); ?>
              </div>
              <div class="p-work__company">
                <h3 class="p-work__name"><?php echo esc_html(get_post_meta(get_the_ID(), 'company', true)); ?></h3>
              </div>
            </div>
            <!-- </a> -->
          </div>
          <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p>No works found.</p>
        <?php endif; ?>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div> 
  </div>
</section>

<section class="p-price">
  <div class="p-price__inner">
    <?php
      // 言語判定を一度だけ行う（可読性とパフォーマンス向上）
      $is_jp = ( get_locale() == 'ja' );
    ?>

    <div class="p-price__head">
      <h2 class="p-price__title c-title">Flexible Pricing Plans</h2>
    </div>

    <div class="p-price__content">
      <ul class="p-price__items">

        <li class="p-price__item p-price__item--gray">
          <div class="p-price__wrap">
            <h3 class="p-price__name">Spot Support</h3>
            <p class="p-price__amount">
              <span class="p-price__num">
                <?php if ( $is_jp ) : ?>
                  3,000円
                <?php else : ?>
                  30€
                <?php endif; ?>
              </span>
              / hour + VAT
            </p>
            <div class="p-price__btn p-price__btn--white c-cv-btn">
              <a href="#contact">
                <div class="c-cv-btn__inner"><span>Contact</span></div>
              </a>
            </div>
          </div>
          <div class="p-price__border p-price__border--gray"></div>
          <ul class="p-price__features">
            <li class="p-price__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-black.svg" alt="Check icon">
              </div>
              <div class="p-price__service"><p>Quick bug fixes and urgent tasks</p></div>
            </li>
            <li class="p-price__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-black.svg" alt="Check icon">
              </div>
              <div class="p-price__service"><p>Emergency troubleshooting</p></div>
            </li>
            <li class="p-price__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-black.svg" alt="Check icon">
              </div>
              <div class="p-price__service"><p>Rush web project delivery</p></div>
            </li>
          </ul>
        </li>

        <li class="p-price__item p-price__item--orange">
          <div class="p-price__wrap">
            <h3 class="p-price__name">Standard Web Project</h3>
            <p class="p-price__amount">
              <span class="p-price__num">
                <?php if ( $is_jp ) : ?>
                  6,000円
                <?php else : ?>
                  60€
                <?php endif; ?>
              </span>
              / day + VAT
            </p>
            <div class="p-price__btn p-price__btn--black c-cv-btn">
              <a href="#contact">
                <div class="c-cv-btn__inner"><span>Contact</span></div>
              </a>
            </div>
          </div>
          <div class="p-price__border p-price__border--white"></div>
          <ul class="p-price__features">
            <li class="p-price__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-price__service"><p>Ideal for websites under 10 pages</p></div>
            </li>
            <li class="p-price__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-price__service"><p>Basic inquiry & contact features included</p></div>
            </li>
            <li class="p-price__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-price__service"><p>Delivered efficiently and promptly</p></div>
            </li>
          </ul>
        </li>

        <li class="p-price__item p-price__item--black">
          <div class="p-price__wrap">
            <h3 class="p-price__name">Large-scale Web Project</h3>
            <p class="p-price__amount">
              <span class="p-price__num">
                <?php if ( $is_jp ) : ?>
                  12,000円
                <?php else : ?>
                  120€
                <?php endif; ?>
              </span>
              / day + VAT
            </p>
            <div class="p-price__btn p-price__btn--orange c-cv-btn">
              <a href="#contact">
                <div class="c-cv-btn__inner"><span>Contact</span></div>
              </a>
            </div>
          </div>
          <div class="p-price__border p-price__border--white"></div>
          <ul class="p-price__features">
            <li class="p-price__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-white.svg" alt="Check icon">
              </div>
              <div class="p-price__service"><p>For complex projects of 11+ pages</p></div>
            </li>
            <li class="p-price__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-white.svg" alt="Check icon">
              </div>
              <div class="p-price__service"><p>Additional custom fuctions</p></div>
            </li>
            <li class="p-price__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-white.svg" alt="Check icon">
              </div>
              <div class="p-price__service"><p>Comprehensive design and development support</p></div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <p class="p-price__text c-text">
      A custom quote will be provided based on your request.
    </p>
  </div>
</section>

<?php if (false): ?>
<!-- One-stop Website Campaign -->
<section class="p-campaign">
  <div class="p-campaign__bg">
    <div class="p-campaign__inner">

      <!-- ===== Left (text) ===== -->
      <div class="p-campaign__head">
        <!-- Badge -->
        <div class="p-campaign__badge">
          <span class="p-campaign__badge-label">Limited Time Offer</span>
        </div>

        <!-- Title & Lead -->
        <h2 class="p-campaign__title">One-stop Website Creation — Fast and Easy</h2>
        <p class="p-campaign__lead">
          No tech skills required. After we contract, I quickly build and maintain your website, so you can fully focus on your business.
        </p>
      </div>
      <!-- ===== Right (image) ===== -->
      <div class="p-campaign__content">
         <!-- Price box -->
         <div class="p-campaign__price-box">
          <div class="p-campaign__price">
            €90<span class="p-campaign__price-unit"> / month + VAT</span>
          </div>

          <ul class="p-campaign__features">
            <li class="p-campaign__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-campaign__service">
                <p>Website with up to 5 pages included</p>
              </div>
            </li>

            <li class="p-campaign__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-campaign__service">
                <p>Server included in monthly plan</p>
              </div>
            </li>

            <li class="p-campaign__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-campaign__service">
                <p>Mobile-friendly design</p>
              </div>
            </li>

            <li class="p-campaign__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-campaign__service">
                <p>WordPress customization based on your needs</p>
              </div>
            </li>

            <li class="p-campaign__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-campaign__service">
                <p>Text & image adjustments included</p>
              </div>
            </li>

            <li class="p-campaign__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-campaign__service">
                <p>On-page SEO & AI optimization included</p>
              </div>
            </li>

            <li class="p-campaign__feature">
              <div class="p-price__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/check-yellow.svg" alt="Check icon">
              </div>
              <div class="p-campaign__service">
                <p>Security settings & updates included</p>
              </div>
            </li>

          </ul>
          <div class="p-campaign__btn p-campaign__btn--orange c-cv-btn">
            <a href="#contact">
              <div class="c-cv-btn__inner">
                <span>Start&nbsp;Your&nbsp;Project</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="p-process">
  <div class="p-process__bg"></div>
  <div class="p-process__inner l-narrow-inner">
    <h2 class="p-process__title c-title">How We Work</h2>
    <div class="p-process__container">
      <div class="p-process__line"></div>
      <ol class="p-process__steps">
        <li class="p-process__step">
          <div class="p-process__number">1</div>
          <div class="p-process__content">
            <h3 class="p-process__name">Contact</h3>
            <p class="p-process__desc">Send a quick message using the contact form.</p>
          </div>
        </li>
        <li class="p-process__step">
          <div class="p-process__number">2</div>
          <div class="p-process__content">
            <h3 class="p-process__name">Discovery</h3>
            <p class="p-process__desc">I'll send you a hearing sheet or arrange a short online call to understand your needs.</p>
          </div>
        </li>
        <li class="p-process__step">
          <div class="p-process__number">3</div>
          <div class="p-process__content">
            <h3 class="p-process__name">Proposal</h3>
            <p class="p-process__desc">You'll receive a clear quote including scope, schedule, and price.</p>
          </div>
        </li>
        <li class="p-process__step">
          <div class="p-process__number">4</div>
          <div class="p-process__content">
            <h3 class="p-process__name">Agreement</h3>
            <p class="p-process__desc">We'll sign a contract and confirm your start date with a deposit.</p>
          </div>
        </li>
        <li class="p-process__step">
          <div class="p-process__number">5</div>
          <div class="p-process__content">
            <h3 class="p-process__name">Build and Launch</h3>
            <p class="p-process__desc">I’ll design and develop your site, provide progress updates, and launch after final checks.</p>
          </div>
        </li>
      </ol>
    </div>
    <div class="p-process__btn c-cv-btn">
      <a href="#contact">
        <div class="c-cv-btn__inner">
          <span>Contact</span>
        </div>
      </a>
    </div>
  </div>
</section>

<section id="contact" class="p-contact">
  <div class="p-contact__inner l-inner">
    <div class="p-contact__head">
      <h2 class="p-contact__title c-title">
        Contact
      </h2>
      <p class="p-contact__lead">
        Feel free to reach out if you're interested in working together or have any questions.
      </p>
    </div>

    <div class="p-contact__body">
      <div class="p-contact__form c-form">
        <?php echo do_shortcode('[contact-form-7 id="28b2e91" title="Contact"]'); ?>
      </div>
    </div>

    <div class="p-contact__note">
      <p class="p-contact__text c-text">
        I usually reply within 1–2 business days.<br class="u-mobile">
        Please double-check your email address before submitting.
      </p>
    </div>
  </div>
</section>

<?php get_footer(); ?>