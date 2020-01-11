<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
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

		<div id="container">
			<div class="header-nav">
				<div class="header-nav__container wrap row">
					<div class="header-nav__nav">
						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
												 'container' => false,                           // remove nav container
												 'container_class' => 'menu ',                 // class of container (should you choose to use it)
												 'menu' => __( 'The Main Menu', 'startertheme' ),  // nav name
												 'menu_class' => 'nav top-nav',               // adding custom nav class
												 'theme_location' => 'main-nav',                 // where it's located in the theme
												 'before' => '',                                 // before the menu
															 'after' => '',                                  // after the menu
															 'link_before' => '',                            // before each link
															 'link_after' => '',                             // after each link
															 'depth' => 0,                                   // limit the depth of the nav
												 'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
						</nav>
					</div>
					<div class="header-nav__search">
						<?php include "searchform.php"; ?>
					</div>
				</div>
			</div>
			<div id="mobile-nav">
				Menu <i class="fas fa-chevron-down"></i>
			</div>
			<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader" style="background: url('<?php echo $backgroundImg[0];?>') no-repeat; background-size:cover; ">
				<div id="inner-header" class="wrap row">
					<div class="social social__group social__group_right">
						<?php
							// check if the repeater field has rows of data
							if( have_rows('social_platforms', 'option') ):

							// loop through the rows of data
								while ( have_rows('social_platforms', 'option') ) : the_row();


								$link = get_sub_field('social_platform_link');
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
						?>

							<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target );?>" title="<?php echo esc_html( $link_title ); ?>">
								<?php the_sub_field('social_platform_icon'); ?>
							</a>

						 <?php  endwhile; else : endif; ?>
					</div>
					<div class="logo logo-full__hero">

								<?php if( have_rows('primary_site_logos', 'option') ): ?>
							    <?php while( have_rows('primary_site_logos', 'option') ): the_row();

							        // Get sub field values.
							        $image = get_sub_field('primary_logo');

											// vars
											$url = $image['url'];
											$title = $image['title'];
											$alt = $image['alt'];
											$caption = $image['caption'];

											// thumbnail
											$size = 'large';
											$thumb = $image['sizes'][ $size ];
											$width = $image['sizes'][ $size . '-width' ];
											$height = $image['sizes'][ $size . '-height' ]; ?>


					            <img src="<?php echo $thumb; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>

							    <?php endwhile; ?>
							<?php endif; ?>

					</div>
					<div class="homepage homepage__hero-text">
						<?php the_field('homepage_header_text'); ?>
					</div>

				</div>


			</header>
