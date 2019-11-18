<?php
/**
 * Astra Hooks - Customizer.
 *
 * @package Astra Hooks
 * @since 1.0.0
 */

if ( ! class_exists( 'Astra_Hooks_Loader' ) ) {

	/**
	 * Customizer Initialization
	 *
	 * @since 1.0.0
	 */
	class Astra_Hooks_Loader {

		/**
		 * Member Variable
		 *
		 * @var instance
		 */
		private static $instance;

		/**
		 *  Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 *  Constructor
		 */
		public function __construct() {

			$this->includes();

			add_filter( 'astra_theme_defaults', array( $this, 'theme_defaults' ) );
			add_action( 'customize_register', array( $this, 'customize_register' ) );

		}

		/**
		 * Set Options Default Values
		 *
		 * @param  array $defaults  Astra options default value array.
		 * @return array
		 */
		public function theme_defaults( $defaults ) {

			// Header.
			$defaults['hook-wp-head']       = '';
			$defaults['hook-header-before'] = '';
			$defaults['hook-header-after']  = '';

			// Content.
			$defaults['hook-before-container']     = '';
			$defaults['hook-before-main-content']  = '';
			$defaults['hook-entry-top']            = '';
			$defaults['hook-entry-bottom']         = '';
			$defaults['hook-entry-content-before'] = '';
			$defaults['hook-entry-content-after']  = '';
			$defaults['hook-after-main-content']   = '';
			$defaults['hook-after-container']      = '';

			// Comment.
			$defaults['hook-comments-before'] = '';
			$defaults['hook-comments-after']  = '';

			// Sidebar.
			$defaults['hook-sidebars-before'] = '';
			$defaults['hook-sidebars-after']  = '';

			// Footer.
			$defaults['hook-footer-before'] = '';
			$defaults['hook-footer-after']  = '';
			$defaults['hook-wp-footer']     = '';

			return $defaults;
		}

		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		public function customize_register( $wp_customize ) {

			/**
			 * Get theme option default values
			 *
			 * @see Astra_Theme_Options::defaults() in parent theme
			 */
			$defaults = Astra_Theme_Options::defaults();

			/**
			 * Register Sections & Panels
			 */
			require_once ASTRA_HOOKS_DIR . 'classes/customizer-panels-and-sections.php';

			/**
			 * Sections
			 */
			require_once ASTRA_HOOKS_DIR . 'classes/sections/section-hooks.php';
		}

		/**
		 * Load all the required files.
		 *
		 * @since  1.0.1
		 */
		private function includes() {

			require_once ASTRA_HOOKS_DIR . 'classes/class-astra-hooks-white-label.php';
		}

	}
}

/**
*  Kicking this off by calling 'get_instance()' method
*/
Astra_Hooks_Loader::get_instance();
