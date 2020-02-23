<!--index-->
<?php get_header('blog'); ?>

			<div id="content">

				<div id="inner-content" class="wrap  row">

						<main id="main" class="col-xs-12 col-sm-8 col-lg-9 " role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php
							$args = array(
								 'post_type' => 'post',
								 'posts_per_page' => '1'
							 );

							 $query = new WP_Query( $args ); ?>

							 <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( ' single-post latest-post' ); ?> role="article">
									<header class="article-header">
										<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										<p class="byline entry-meta vcard">
		                      <?php printf( __( '', 'startertheme' ).' %1$s %2$s',
		       								/* the time the post was published */
		       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
		       								/* the author of the post */
		       								'<span class="by">'.__( '', 'startertheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person"></span>'
		    							); ?>

											<?php printf( __( '', 'startertheme' ).'%1$s', get_the_category_list(', ') ); ?>
										</p>

									</header>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<div class="hero--image"><?php the_post_thumbnail('gallery-image'); ?></div>
									</a>

									<section class="entry-content ">
										<?php the_excerpt(); ?>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="primary-btn">Read More</a>
									</section>

								</article>

							<?php endwhile; ?>

									<?php starter_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry ">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'startertheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'startertheme' ); ?></p>
										</section>
									</article>

							<?php endif; ?>
							<?php wp_reset_query(); ?>
							<?php
							$args = array(
								 'post_type' => 'post',
								 'offset' => 1, // excludes the first post in the query
							 );

							 $query = new WP_Query( $args ); ?>

							 <?php if( $query->have_posts() ) : ?>
								 <div class="row secondary-posts">
									 <?php while( $query->have_posts() ) : $query->the_post(); ?>
									 <article id="post-<?php the_ID(); ?>" <?php post_class( ' single-post col-xs-12 col-sm-6' ); ?> role="article">
										 <span class="category"><?php printf( __( '', 'startertheme' ).'%1$s', get_the_category_list(', ') ); ?></span>
										 <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
												<div class="hero--image">
													<button class="primary-btn_img">Read More</button>
													<?php the_post_thumbnail('gallery-image'); ?>
												</div>

 										</a>
	 									<header class="article-header">

	 										<h1 class="h3 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	 										<p class="byline entry-meta vcard">
	 		                      <?php printf( __( '', 'startertheme' ).' %1$s %2$s',
	 		       								/* the time the post was published */
	 		       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	 		       								/* the author of the post */
	 		       								'<span class="by">'.__( '', 'startertheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person"></span>'
	 		    							); ?>
	 										</p>

	 									</header>

	 									<section class="entry-content ">
	 										<?php echo excerpt(15); ?>
	 									</section>

	 								</article>

							<?php endwhile; ?>

									<?php starter_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry ">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'startertheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'startertheme' ); ?></p>
										</section>
									</article>
									</div>
							<?php endif; ?>
							<?php wp_reset_query(); ?>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
