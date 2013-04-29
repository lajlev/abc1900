<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<span class="subtle">Skrevet af <?php the_author() ?> for <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' siden'; ?>.</span>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>

		</article>
		<? if (comments_open()){ ?>
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="470" data-num-posts="10"></div>
			<?php //comments_template(); ?>
		<? } ?>
	<?php endwhile; // End the loop ?>
	</div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>