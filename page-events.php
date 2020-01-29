<?php
/*
 Template Name: Events
*/
?>
<!--page-events-->
<?php get_header('events'); ?>
<div id="content">
	<div id="inner-content" class="wrap  row">
		<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				<section class="entry-content " itemprop="articleBody">
					<?php	the_content(); ?>
				</section>
				<footer class="article-footer">
					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'startertheme' ) . '</span> ', ', ', '</p>' ); ?>
				</footer>
				<?php comments_template(); ?>
			</article>
			<?php endwhile; else : endif; ?>
		</main>
	</div>
	<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
	<?php if ($the_query -> have_posts()) : ?>
	<section id="latest-news" class="homepage__latest-news">
		<div class="wrap row">
			<div class="col-xs-12">
				<h2 class="latest-news__title"><?php the_field('latest_news_section_title', 'option'); ?></h2>
			</div>
			<? while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-xs-12 col-sm-5 featured_image">
				<?php the_post_thumbnail('square'); ?>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-xs-12 col-sm-6">
				<?php the_title( '<h1 class="title">', '</h1>' ) ;?>
				<div class="main-summary"><?php the_excerpt() ?></div>
				<a class="secondary-btn" href="<?php the_permalink(); ?>">Read More</a>
			</div>
			<?php endwhile; wp_reset_postdata();?>
		</div>
	</section>
	<?php endif; ?>
	</div>
<?php get_footer(); ?>
