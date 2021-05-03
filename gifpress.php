<?php

/**
 * @link              rherault.fr
 * @since             1.0.0
 * @package           Gifpress
 *
 * @wordpress-plugin
 * Plugin Name:       GifPress
 * Plugin URI:        https://rherault.fr
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Romain
 * Author URI:        rherault.fr
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gifpress
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
define('GIFPRESS_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gifpress-activator.php
 */
function activate_gifpress()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-gifpress-activator.php';
    Gifpress_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gifpress-deactivator.php
 */
function deactivate_gifpress()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-gifpress-deactivator.php';
    Gifpress_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_gifpress');
register_deactivation_hook(__FILE__, 'deactivate_gifpress');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-gifpress.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gifpress()
{
    $plugin = new Gifpress();
    $plugin->run();
}
run_gifpress();
