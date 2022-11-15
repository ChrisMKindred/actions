<?php
namespace Kindred\Actions;

use Kindred\Actions\Settings\Settings_Page;

final class Core {
	private static $instance;

	public static function instance(): self {
		if ( ! self::$instance instanceof self ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function init( $file ) {
		$settings = new Settings_Page();
		add_filter( 'plugin_action_links_' . plugin_basename( $file ), [ $settings, 'add_action_links' ] );

	}
}
