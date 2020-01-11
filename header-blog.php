<!doctype html>
<!-- header blog -->
<?php include 'head.php'; ?>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">
			<div class="header-nav">
				<div class="header-nav__container wrap row">
					<div class="header-nav__nav">
						<?php if( have_rows('primary_site_logos', 'option') ): ?>
							<?php while( have_rows('primary_site_logos', 'option') ): the_row();

									// Get sub field values.
									$image = get_sub_field('primary_logo_bug');

									// vars
									$url = $image['url'];
									$title = $image['title'];
									$alt = $image['alt'];
									$caption = $image['caption'];

									// thumbnail
									$size = 'medium';
									$thumb = $image['sizes'][ $size ];
									$width = $image['sizes'][ $size . '-width' ];
									$height = $image['sizes'][ $size . '-height' ]; ?>

									<a href="<?php echo home_url(); ?>" rel="nofollow">
										<img class="logo_bug" src="<?php echo $thumb; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>
									</a>
							<?php endwhile; ?>
					<?php endif; ?>
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
					<span class="search_and_social">
					<div class="header-nav__search">
						<?php include "searchform.php"; ?>
					</div>
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
					</span>
				</div>
			</div>
			<div id="mobile-nav">
				Menu <i class="fas fa-chevron-down"></i>
			</div>
			<?php if (is_single() || is_page()) {} else { ?>
			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader" style="background: url('<?php the_field('post_header_image', 'option'); ?>') no-repeat; background-size:cover; ">
				<div class="overlay">
					<div id="inner-header" class="wrap row">

					<div class="innerpage">
						<h1 class="innerpage__hero-text">
							<?php if( have_rows('secondary_site_logos', 'option') ): ?>
								<?php while( have_rows('secondary_site_logos', 'option') ): the_row();

										// Get sub field values.
										$image = get_sub_field('secondary_logo_bug');

										// vars
										$url = $image['url'];
										$title = $image['title'];
										$alt = $image['alt'];
										$caption = $image['caption'];

										// thumbnail
										$size = 'medium';
										$thumb = $image['sizes'][ $size ];
										$width = $image['sizes'][ $size . '-width' ];
										$height = $image['sizes'][ $size . '-height' ]; ?>

										<a href="<?php echo home_url(); ?>" rel="nofollow">
											<img class="logo_bug" src="<?php echo $thumb; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>
										</a>
								<?php endwhile; ?>
						<?php endif; ?>
							<p>
								<?php the_field('post_page_title', 'option'); ?>
							</p>
						</h1>
					</div>

				</div>
				</div>
			</header>
			<?php } ?>
