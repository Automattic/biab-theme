<?php
/*
Plugin Name: Blog in a Box
Description: A plugin to help Selma publish photos of her artwork to her grandparents.
Author: Automattic
Version: 0.1
*/

add_action('admin_menu', 'biab_setup_menu');

function biab_setup_menu() {
	add_menu_page( 'Blog in a Box Admin Page', 'BIAB 📦', 'manage_options', 'biab-plugin', 'biab_init' );
}

function biab_init() { ?>
	<h1> Put Your Blog in a Box </h1>
	<script>
		function take_photo() {
			jQuery.post( "admin-post.php", { action: "biab_take_photo" } ).done(
				function( data ) {
					jQuery( ".result" ).html( data );
				}
			);
			return false;
		}
	</script>
	<form>
		<button onClick="return take_photo()"> Take Photo </button>
	</form>

	<div class="result"></div>
<?php
}
add_action( 'admin_post_biab_take_photo', 'biab_take_photo' );

function biab_take_photo() {
	echo "<h3> Click! </h3> ";
}
