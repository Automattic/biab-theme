<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
	<title><?php
	
		global $page, $paged;
	
		wp_title( '|', true, 'right' );
	
		bloginfo( 'name' );
	
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'biab' ), max( $paged, $page ) );
	
		?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<?php
	
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	
		wp_head();
	
	?>
</head>

<body <?php body_class(); ?>>

<div id="container"<?php if ( is_active_sidebar( 'widgets' ) ) : ?> class="has-widgets"<?php endif; ?>>

	<header id="navigation" role="banner">

		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
<?php bloginfo( 'name' ); ?></a></h1>

		<nav role="navigation">

			<?php wp_nav_menu( array( 'menu' => 'primary' ) ); ?>

			<?php get_search_form(); ?>

		</nav>
	</header>
