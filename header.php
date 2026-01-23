<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php
    $site_name    = get_bloginfo( 'name' );
    $template_uri = get_template_directory_uri();
    $canonical    = home_url( add_query_arg( NULL, NULL ) );
  ?>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ===== SEO ===== -->
  <meta name="keywords" content="freelance web designer, WordPress developer, japanese websites, Japanese market">

  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?php echo esc_url( $canonical ); ?>">

  <!-- ===== OGP / Twitter ===== -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo esc_html( $site_name ); ?> | Freelance Web Design & Development">
  <meta property="og:description"
    content="One-stop web design, development and maintenance. 40+ websites delivered, 15 years IT background.">
  <meta property="og:url" content="<?php echo esc_url( $canonical ); ?>">
  <meta property="og:site_name" content="<?php echo esc_html( $site_name ); ?>">
  <meta property="og:image" content="<?php echo $template_uri; ?>/images/ogp/og-image.jpg">
  <meta property="og:locale" content="en_GB">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo esc_html( $site_name ); ?> | Freelance Web Design & Development">
  <meta name="twitter:description" content="40+ websites delivered. Freelance Web Designer and Developer.">
  <meta name="twitter:image" content="<?php echo $template_uri; ?>/images/ogp/og-image.jpg">

  <!-- ===== Favicon & Touch Icon ===== -->
  <!-- <link rel="icon" href="<?php echo $template_uri; ?>/images/favicon/favicon.ico"> -->
  <link rel="apple-touch-icon" sizes="192x192" href="<?php echo $template_uri; ?>/images/favicon/apple-touch.png">

  <!-- ===== PWA・色指定 ===== -->
  <meta name="theme-color" content="#267C4B">
  <!-- <link rel="manifest" href="<?php echo $template_uri; ?>/manifest.json"> -->

  <!-- ===== Hero画像 Preload（LCP対策） ===== -->
  <link rel="preload" as="image" href="<?php echo $template_uri; ?>/images/top/ryo-hiratoko_fv.png">

  <!-- ===== CSS・Fonts ===== -->
  <link rel="preconnect" href="https://use.typekit.net" crossorigin>
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
  <link rel="stylesheet" href="<?php echo $template_uri; ?>/css/styles.css?ver=1.0.5">
  <link rel="stylesheet" href="https://use.typekit.net/amv4mgk.css">

  <!-- Swiper CSS & JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js" defer></script>

  <!-- ===== 構造化データ（Organization & WebSite） ===== -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "<?php echo $site_name; ?>",
      "url": "<?php echo home_url(); ?>",
      "logo": "<?php echo $template_uri; ?>/images/common/logo.png",
      "sameAs": [
        "https://www.linkedin.com/in/ryo-hiratoko/",
        "https://github.com/ryohiratoko"
      ]
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "<?php echo home_url(); ?>",
      "name": "<?php echo $site_name; ?>",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo home_url(); ?>/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
  </script>

  <?php wp_head(); ?>
</head>

<?php
$home = esc_url(home_url('/'));
?>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__top">
        <a href="<?php echo $home ?>">
          <div class="l-header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="logo">
          </div>
        </a>

        <div class="l-header__btns">
          <div class="c-mail-btn">
            <a href="#contact">
              <div class="c-mail-btn__inner">
                <div class="c-mail-btn__icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/icons/mail.svg" alt="mail icon">
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- language switcher -->
  <nav class="translatepress" aria-label="Language selector">
    <?php echo do_shortcode('[language-switcher]'); ?>
  </nav>

