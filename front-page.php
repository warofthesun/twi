<!--front page-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<section class="wrap">
								<div class="about-twi">
									<?php if (have_rows('about_twi')) : while (have_rows('about_twi')) : the_row(); ?>
										<h2 class="about-twi__header"><?php the_sub_field('about_header'); ?></h2>
										<div class="about-twi__content">
											<?php the_sub_field('about_content'); ?>
										</div>
									<?php endwhile; endif; ?>
								</div>
							</section>
							<section id="speaking" class="homepage__speaking">
								<div class="wrap row">
									<?php if (have_rows('homepage_speaking')) : while (have_rows('homepage_speaking')) : the_row(); ?>
									<div class="col-xs-12 col-sm-5">
											<?php
											// Get sub field values.
							        $image = get_sub_field('speaking_headshot');

											// vars
											$url = $image['url'];
											$title = $image['title'];
											$alt = $image['alt'];
											$caption = $image['caption'];

											// thumbnail
											$size = 'square';
											$thumb = $image['sizes'][ $size ];
											$width = $image['sizes'][ $size . '-width' ];
											$height = $image['sizes'][ $size . '-height' ]; ?>


					            <img class="homepage__speaking_headshot" src="<?php echo $thumb; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>
									</div>
									<div class="col-xs-12 col-sm-7 homepage__speaking_container">
										<h1 class="homepage__speaking_header">
											<?php the_sub_field('speaking_header'); ?>
										</h1>
										<div class="homepage__speaking_content">
											<?php the_sub_field('speaking_content'); ?>
											<?php if (have_rows('speaking_cta')) : ?>
											<ul class="homepage__speaking_cta">
												<?php while (have_rows('speaking_cta')) : the_row(); ?>
													<?php
														$link = get_sub_field('cta');

												    $link_url = $link['url'];
												    $link_title = $link['title'];
												    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
												<li>
													<a class="secondary-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												</li>
												<?php endwhile; ?>
											</ul>
											<?php endif; ?>
										</div>
									</div>
									<?php endwhile; endif; ?>
								</div>
							</section>
							<?php
								$args = array(
								'posts_per_page' => 1,
								'post_type' => 'tribe_events',
								);
								$the_query = new WP_Query( $args );
								?>
								<?php if ( $the_query->have_posts() ) : ?>
							<section id="upcoming-event" class="homepage__upcoming-event">
								<div class="wrap row">
									<div class="col-xs-12"><h3>upcoming</h3></div>
									<? while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="col-xs-0 col-sm-4 featured_image">
										<?php echo tribe_event_featured_image( $event_id, 'square', true ); ?>
									</div>
									<div class="col-xs-12 col-sm-8">
										<?php the_title( '<h1 class="the-title">', '</h1>' ) ;?>
										<?php echo tribe_events_event_schedule_details( $event_id, '<h2>', '</h2>' ); ?>
										<h2><?php echo tribe_get_venue(); ?></h2>
										<div class="main-summary"><?php the_content() ?></div>
									</div>
									<?php endwhile; ?>
								</div>
							</section>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
						<?php if (have_rows('homepage_services')) : while (have_rows('homepage_services')) : the_row(); ?>
						<section id="services" class="homepage__services">
							<div class="container">
								<?php if (get_sub_field('services_header')) : ?>
									<h1 class="header__divider header__divider_secondary"><span><?php the_sub_field('services_header'); ?></span></h1>
								<?php endif; ?>
								<?php if (have_rows('services')) : ?>
									<div class="services__container row">
								<?php while (have_rows('services')) : the_row();
									$image = get_sub_field('services_image');
									$url = $image['url'];
									$title = $image['title'];
									$alt = $image['alt'];
									$caption = $image['caption'];

									// thumbnail
									$size = 'square';
									$thumb = $image['sizes'][ $size ];
									$width = $image['sizes'][ $size . '-width' ];
									$height = $image['sizes'][ $size . '-height' ];
									?>
									<div class="col-sm-4 service" style="background-image:url('<?php echo $thumb; ?>');">
										<?php $link = get_sub_field('link');
											if( $link ):
												$link_url = $link['url'];
												$link_title = $link['title'];
												$link_target = $link['target'] ? $link['target'] : '_self';
								 		?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<div class="service_content">
											<span class="button"><?php if($link_title) : echo esc_html( $link_title ); else: echo "Learn More"; endif; ?></span>
										</div>
										</a>
										<?php endif; ?>
										<h2 class="service_title"><?php the_sub_field('service_title'); ?></h2>
									</div>
								<?php endwhile; ?>
							</div>
								<?php endif; ?>
							</div>
						</section>
						<?php endwhile; endif; ?>
						<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
						<?php if ($the_query -> have_posts()) : ?>
						<section id="latest-news" class="homepage__latest-news">
							<div class="wrap row">
								<div class="col-xs-12"><h2>u=2 blog</h2></div>
								<? while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="col-xs-12 col-sm-5 featured_image">
									<?php the_post_thumbnail('square'); ?>
								</div>
								<div class="col-sm-1"></div>
								<div class="col-xs-12 col-sm-6">
									<?php the_title( '<h1 class="title">', '</h1>' ) ;?>
									<div class="main-summary"><?php the_excerpt() ?></div>
									<a class="primary-btn" href="<?php the_permalink(); ?>">Read More</a>
								</div>
								<?php endwhile; wp_reset_postdata();?>
							</div>
						</section>
						<?php endif; ?>
						</main>

				</div>

			</div>

<?php get_footer(); ?>
