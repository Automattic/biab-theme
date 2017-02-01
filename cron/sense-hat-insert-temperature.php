<?php

require_once( '/var/www/html/wp-config.php' );

function sense_hat_insert_temperature() {
	$temperature = shell_exec( './sense-hat-take-temperature.py' );
	global $wpdb;
	$wpdb->insert( 'wp_sense_hat',
		array( 'temperature' => $temperature ),
		array( '%f' )
	);
}

sense_hat_insert_temperature();

?>
