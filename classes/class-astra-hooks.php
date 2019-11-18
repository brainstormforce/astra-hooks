<?php
/**
 * Astra Hooks - Init
 *
 * @package Astra Hooks
 */

if ( ! class_exists( 'Astra_Hooks' ) ) {

	/**
	 * Astra Hooks Initial Setup
	 *
	 * @since 1.0.0
	 */
	class Astra_Hooks {

		/**
		 * Member Varible
		 *
		 * @var object instance
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
		 * Constructor function that initializes required actions and hooks
		 */
		public function __construct() {
			require_once ASTRA_HOOKS_DIR . 'classes/class-astra-hooks-loader.php';
			require_once ASTRA_HOOKS_DIR . 'classes/class-astra-hooks-markup.php';
		}
	}

	/**
	 *  Kicking this off by calling 'get_instance()' method
	 */
	Astra_Hooks::get_instance();
}
