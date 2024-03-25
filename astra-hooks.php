<?php
/**
 * Plugin Name: Astra Hooks
 * Plugin URI: https://wpastra.com/
 * Description: Customizer Hooks for Theme.
 * Version: 1.0.2
 * Author: Brainstorm Force
 * Author URI: http://www.brainstormforce.com
 * Text Domain: astra-hooks
 *
 * @package Astra Hooks
 */

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

/**
 * Astra Hooks Init
 */
if ( ! function_exists( 'astra_hooks_init' ) ) {

	/**
	 * Astra Hooks Init
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function astra_hooks_init() {

		/**
		 * Check if Astra theme active
		 */
		if ( defined( 'ASTRA_THEME_SETTINGS' ) ) {

			/**
			 * Set constants.
			 */
			define( 'ASTRA_HOOKS_FILE', __FILE__ );
			define( 'ASTRA_HOOKS_BASE', plugin_basename( ASTRA_HOOKS_FILE ) );
			define( 'ASTRA_HOOKS_DIR', plugin_dir_path( ASTRA_HOOKS_FILE ) );
			define( 'ASTRA_HOOKS_URI', plugins_url( '/', ASTRA_HOOKS_FILE ) );
			define( 'ASTRA_HOOKS_VER', '1.0.2' );

			/**
			 * Astra Hooks
			 */
			require_once ASTRA_HOOKS_DIR . 'classes/class-astra-hooks.php';
		}
	}
}
add_action( 'after_setup_theme', 'astra_hooks_init' );
