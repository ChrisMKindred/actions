<?php
/**
 * Plugin Name: Actions Test
 * Version:     0.0.1-rc.04
 * Author:      Chris Kindred
 */

use Kindred\Actions\Core;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	die( 'Autoload Not Found.' );
}

require_once dirname( __FILE__ ) . '/vendor/autoload.php';

add_action( 'plugins_loaded', static function () {
	( Core::instance() )->init( __file__ );
} );
