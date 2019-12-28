<!--404-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap  row">

					<main id="main" class="col-xs-12 col-sm-8 col-lg-9 " role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry ">

							<header class="article-header">

								<h1><?php _e( '404 - Article Not Found', 'startertheme' ); ?></h1>

							</header>

							<section class="entry-content">

								<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'startertheme' ); ?></p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>

							<footer class="article-footer">

									<p><?php _e( 'This is the 404.php template.', 'startertheme' ); ?></p>

							</footer>

						</article>

					</main>

				</div>

			</div>

<?php get_footer(); ?>
