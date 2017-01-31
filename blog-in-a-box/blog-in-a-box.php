<?php
/*
Plugin Name: Blog in a Box
Description: A plugin to help Selma publish photos of her artwork to her grandparents.
Author: Automattic
Version: 0.1
*/

add_action('admin_menu', 'biab_setup_menu');

function biab_setup_menu(){
	add_menu_page( 'Blog in a Box Admin Page', 'BIAB 📦', 'manage_options', 'biab-plugin', 'biab_init' );
}

function biab_init(){
	echo "<h1>Put Your Blog in a Box</h1>";
}

