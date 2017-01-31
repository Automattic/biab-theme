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
			jQuery('#submit-btn').hide();
			jQuery('#loading-gif').show();
			jQuery.post( "admin-post.php", { action: "biab_take_photo" } ).done(
				function( data ) {
					console.log(data);
					jQuery('#loading-gif').hide();
					jQuery('#submit-btn').show();
				}
			);
			return false; // so page doesn't refresh
		}
	</script>
	<form>
		<button id="submit-btn" onClick="return take_photo()"> Take Photo </button>
		<img style="display:none" src="/i/loading.gif" id="loading-gif">
	</form>

	<div class="result"></div>
<?php
}
add_action( 'admin_post_biab_take_photo', 'biab_take_photo' );

function biab_take_photo() {
	error_log("here!");
	$output = array();
	exec("/opt/wp/photo.sh", $output);
	return implode($output);
}
