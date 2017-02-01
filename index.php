<?php

	get_header();

?>
		<?php if ( is_active_sidebar( 'widgets' ) ) : ?>
		<div id="widgets"role="complementary">

			<?php dynamic_sidebar( 'widgets' ); ?>

		</div>
		<?php endif; ?>

		<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header>
						<h1><?php _e( 'Nothing here', 'biab' ); ?></h1>
					</header><!-- .entry-header -->

					<div>
						<p><?php _e( 'You uncovered a dead link. Perhaps this is an error. For now, there\'s nothing here.', 'biab' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</article>
				
			<?php endif; ?>

		</div>

		<?php if (is_home() && $wp_query->post_count >= $posts_per_page || is_paged() || is_archive()) { ?>
		<div id="nav-single">
			<span class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older', 'biab')) ?></span>
			<span class="nav-next"><?php previous_posts_link(__('Newer <span class="meta-nav">&rarr;</span>', 'biab')) ?></span>
		</div>
		<?php } ?>
		
<?php

	get_footer(); 

?>