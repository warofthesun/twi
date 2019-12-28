<!--search-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap  row">

					<main id="main" class="col-xs-12 col-sm-8 col-lg-9 " role="main">
						<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'startertheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

								<header class="entry-header article-header">

									<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                  						<p class="byline entry-meta vcard">
                    							<?php printf( __( 'Posted %1$s by %2$s', 'startertheme' ),
                   							    /* the time the post was published */
                   							    '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                      							    /* the author of the post */
                       							    '<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
                  						</p>

								</header>

								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'startertheme' ) . '</span>' ); ?>

								</section>

								<footer class="article-footer">

									<?php if(get_the_category_list(', ') != ''): ?>
                  					<?php printf( __( 'Filed under: %1$s', 'startertheme' ), get_the_category_list(', ') ); ?>
                  					<?php endif; ?>

                 					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'startertheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer> <!-- end article footer -->

							</article>

						<?php endwhile; ?>

								<?php starter_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry ">
										<header class="article-header">
											<h1><?php _e( 'Sorry, No Results.', 'startertheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'startertheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'startertheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

							<?php get_sidebar(); ?>

					</div>

			</div>

<?php get_footer(); ?>
