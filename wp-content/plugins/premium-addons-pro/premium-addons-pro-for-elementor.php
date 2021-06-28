<?php
/*
Plugin Name: Premium Addons PRO
Description: Premium Addons PRO Plugin Includes 34+ premium widgets & addons for Elementor Page Builder.
Plugin URI: https://premiumaddons.com
Version: 2.4.6
Author: Leap13
Elementor tested up to: 3.2.4
Elementor Pro tested up to: 3.3.0
Author URI: https://leap13.com/
Text Domain: premium-addons-pro
Domain Path: /languages
*/


/**
 * Checking if WordPress is installed
 */
if ( ! function_exists( 'add_action' ) ) {
	die( 'WordPress not Installed' ); // if WordPress not installed kill the page.
}

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No access of directly access
}

define( 'PREMIUM_PRO_ADDONS_VERSION', '2.4.6' );
define( 'PREMIUM_PRO_ADDONS_STABLE_VERSION', '2.1.4' );
define( 'PREMIUM_PRO_ADDONS_URL', plugins_url( '/', __FILE__ ) );
define( 'PREMIUM_PRO_ADDONS_PATH', plugin_dir_path( __FILE__ ) );
define( 'PREMIUM_PRO_ADDONS_FILE', __FILE__ );
define( 'PREMIUM_PRO_ADDONS_BASENAME', plugin_basename( PREMIUM_PRO_ADDONS_FILE ) );
define( 'PAPRO_ITEM_NAME', 'Premium Addons PRO' );
define( 'PAPRO_STORE_URL', 'http://my.leap13.com' );
define( 'PAPRO_ITEM_ID', 361 );

update_option( 'papro_license_key','1415b451be1a13c283ba771ea52d38bb' );
update_option( 'papro_license_status','valid');

//Check compatibility with the free version.
if ( defined( 'PREMIUM_ADDONS_VERSION' ) ) {

	$outdated_plugin = '';

	if ( version_compare( PREMIUM_ADDONS_VERSION, '4.0.0', '>=' ) ) {
		if ( version_compare( PREMIUM_PRO_ADDONS_VERSION, '2.2.0', '<' ) ) {
			$outdated_plugin = 'papro';
		}
	} else {
		$outdated_plugin = 'pa';
	}

	if ( ! empty( $outdated_plugin ) ) {
		update_option( 'papro_updated', false );
		add_action(
			'admin_notices',
			function() use ( $outdated_plugin ) {
				pa_version_mismatch_notice( $outdated_plugin );
			}
		);
		return;
	}
}


// Render a notice if PAPRO version is outdated
function pa_version_mismatch_notice( $outdated_plugin ) {

	if ( ! $outdated_plugin ) {
		return;
	}

	switch ( $outdated_plugin ) {
		case 'papro':
			$url     = PAPRO_STORE_URL . '/my-account';
			$name    = __( 'Premium Addons Pro', 'premium-addons-pro' );
			$version = PREMIUM_PRO_ADDONS_VERSION;
			break;
		default:
			$url     = 'https://wordpress.org/plugins/premium-addons-for-elementor';
			$name    = __( 'Premium Addons For Elementor', 'premium-addons-pro' );
			$version = '4.0.0';
	}

	?>
		<div class="error">
			<?php
				echo sprintf(
					'<p>You are using an outdated version of <b>%s</b>. Please update your version to %s+. You can download the latest version from <a href="%s" target="_blank">here</a>',
					$name,
					$version,
					$url
				);
			?>
		</div>
	<?php
}

// If both versions are updated, run all dependencies
update_option( 'papro_updated', 'true' );

/*
 * Load plugin core file
 */
require_once PREMIUM_PRO_ADDONS_PATH . 'includes/class-papro-core.php';

