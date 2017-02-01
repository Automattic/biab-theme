	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>

			<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'biab' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?> &nbsp; &nbsp; <?php the_title(); ?></a></h2>

		</header>

		<?php if ( '' !== get_the_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'biab-featured-image' ); ?>
			</a>
		</div>
		<?php endif; ?>

		<?php if ( is_search() ) :  ?>
		
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
		
		<?php else : ?>

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'biab' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'biab' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div>

		<?php endif; ?>



		<div class="entry-meta">
			<?php /*if ( comments_open() ) : ?>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'biab' ) . '</span>', __( '<b>1</b> Reply', 'biab' ), __( '<b>%</b> Replies', 'biab' ) ); ?></span>
			<?php endif;*/ ?>

			<?php edit_post_link( __( 'Edit', 'biab' ), '<span class="edit-link">', '</span>' ); ?>
		</div>



	</article>