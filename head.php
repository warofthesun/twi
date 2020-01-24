<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WXN57QC');</script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">

  <?php // force Internet Explorer to use the latest rendering engine available ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title(''); ?></title>

  <?php // mobile meta (hooray!) ?>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
  <!--[if IE]>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <![endif]-->
  <?php // or, set /favicon.ico for IE10 win ?>

  <meta name="msapplication-TileColor" content="#f01d4f">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
          <meta name="theme-color" content="#121212">

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php // wordpress head functions ?>
  <?php wp_head(); ?>
  <?php // end of wordpress head ?>
  <script src="https://kit.fontawesome.com/082b65f3b6.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script>
    window.sr = ScrollReveal({ duration: 600, reset: true, easing: 'ease-in', scale: .98, distance:'50px'});
  </script>
  <?php // drop Google Analytics Here ?>
  <?php // end analytics ?>

</head>
  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXN57QC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
