<?php

	get_header(); 
	
?>
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; ?>

		<?php /*
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif; */
		?>

	</div>
<?php 

	get_footer(); 
	
?>