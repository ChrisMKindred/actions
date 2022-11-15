<?php
namespace Kindred\Actions\Settings;


class Settings_Page {
	/**
	 * Adds the action links in the plugin listing.
	 *
	 * @param array<int, string> $links
	 *
	 * @return array<int|string, string>
	 */
	public function add_action_links( $links ) {
		$setting_link = [
			'settings' => 'Just testing a filter.',
		];
		return array_merge( $setting_link, $links );
	}
}
