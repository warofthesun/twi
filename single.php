<!--single-->
<?php get_header('blog'); ?>

			<div id="content">

				<div id="inner-content" class="wrap  row">

					<main id="main" class="col-xs-12 col-sm-8 col-lg-9 " role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
                <header class="article-header entry-header">

                  <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                  <p class="byline entry-meta vcard">

                    <?php printf( __( '', 'startertheme' ).' %1$s ',
                       /* the time the post was published */
                       '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       /* the author of the post */
                       '<span class="by">'.__( 'by', 'startertheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    ); ?>

										<?php printf( __( '', 'startertheme' ).'%1$s', get_the_category_list(', ') ); ?>

                  </p>

                </header>
                <div class="hero--image"><?php the_post_thumbnail('gallery-image'); ?></div>

                <section class="entry-content cf" itemprop="articleBody">
                  <?php the_content();   ?>
                </section> <?php // end article section ?>

                <footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'startertheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer>

                <?php //comments_template(); ?>

              </article>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry ">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'startertheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'startertheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'startertheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
