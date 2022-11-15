<?php
/**
 * Plugin Name: Actions Test
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	die( 'Autoload Not Found.' );
}

require_once dirname( __FILE__ ) . '/vendor/autoload.php';
