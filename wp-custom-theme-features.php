<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              phivh.github.com
 * @since             1.0.0
 * @package           Wp_Custom_Theme_Features
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress Custom Theme Features
 * Plugin URI:        https://github.com/phd2d/wp-custom-theme-features.git
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Phd2d
 * Author URI:        phivh.github.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-custom-theme-features
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( PLUGIN_VERSION, '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-custom-theme-features-activator.php
 */
function activate_wp_custom_theme_features() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-custom-theme-features-activator.php';
	Wp_Custom_Theme_Features_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-custom-theme-features-deactivator.php
 */
function deactivate_wp_custom_theme_features() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-custom-theme-features-deactivator.php';
	Wp_Custom_Theme_Features_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_custom_theme_features' );
register_deactivation_hook( __FILE__, 'deactivate_wp_custom_theme_features' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-custom-theme-features.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_custom_theme_features() {

	$plugin = new Wp_Custom_Theme_Features();
	$plugin->run();

}
run_wp_custom_theme_features();
