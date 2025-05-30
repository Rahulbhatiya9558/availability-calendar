<?php
/**
 * Plugin Name:       Availability Calendar
 
 * Plugin URI:        https://www.offshorewebmaster.com/availabilitycalendar
 
 * Description:       Availability Calendar Description A plugin that records post views and contains functions to easily list posts by popularity
 
 * Version:           1.2.6
 
 * Author:            Offshore Web Master
 
 * Author URI:        https://www.offshorewebmaster.com/
 
 * License:           GPL-2.0+
 
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 
 */

/** 
 * If this file is called directly, abort.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.2.6
 */
define( 'OWAC_VERSION', '1.2.6' );
	
/**
 * Currently ob_start.
 */
ob_start();

/**
 * Currently plugin path.
 */
define('OWAC_ROOTDIR', plugin_dir_path(__FILE__));

/**
 * The code that runs during plugin activation.
 */
function activate_owac() {
	require_once OWAC_ROOTDIR . 'includes/class-owac-activator.php';
	OWAC_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_owac() {
	require_once OWAC_ROOTDIR . 'includes/class-owac-deactivator.php';
	OWAC_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_owac' );
register_deactivation_hook( __FILE__, 'deactivate_owac' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require OWAC_ROOTDIR . 'includes/class-owac-availability-calendar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.1.3
 */
function owac_availability_calendar() {

	$OWAC_Availability_Calendar = new OWAC_Availability_Calendar();
	$OWAC_Availability_Calendar->run();

}
owac_availability_calendar();