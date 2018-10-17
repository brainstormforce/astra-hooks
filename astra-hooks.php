<?php
/**
 * Plugin Name: Astra Hooks
 * Plugin URI: https://wpastra.com/
 * Description: Customizer Hooks for Theme.
 * Version: 1.0.1
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
			define( 'ASTRA_HOOKS_VER', '1.0.1' );

			/**
			 * Astra Hooks
			 */
			require_once ASTRA_HOOKS_DIR . 'classes/class-astra-hooks.php';
			require_once ASTRA_HOOKS_DIR . 'includes/lib/notices/class-astra-notices.php';
		}
	}
}
add_action( 'after_setup_theme', 'astra_hooks_init' );

if ( ! function_exists( 'register_notices' ) ) :

	/**
	* Ask Theme Rating
	*
	* @since 1.4.0
	*/
	function register_notices() {
		$image_path = ASTRA_HOOKS_URI . 'includes/assets/images/astra-hooks-icon.png';
		Astra_Notices::add_notice(
			array(
				'id'                         => 'astra-hooks-rating',
				'type'                       => '',
				'message'                    => sprintf(
					'<div class="notice-image">
						<img src="%1$s" class="custom-logo" alt="Astra Hooks" itemprop="logo"></div> 
						<div class="notice-content">
							<div class="notice-heading">
								%2$s
							</div>
							%3$s<br />
							<div class="astra-review-notice-container">
								<a href="%4$s" class="astra-notice-close astra-review-notice button-primary" target="_blank">
								%5$s
								</a>
							<span class="dashicons dashicons-calendar"></span>
								<a href="#" data-repeat-notice-after="%6$s" class="astra-notice-close astra-review-notice">
								%7$s
								</a>
							<span class="dashicons dashicons-smiley"></span>
								<a href="#" class="astra-notice-close astra-review-notice">
								%8$s
								</a>
							</div>
						</div>',
					$image_path,
					__( 'Hello! Seems like you have used Astra Hooks to build this website — Thanks a ton!', 'astra-hooks' ),
					__( 'Could you please do us a BIG favor and give it a 5-star rating on WordPress? This would boost our motivation and help other users make a comfortable decision while choosing the Astra Hooks.', 'astra-hooks' ),
					'https://wordpress.org/support/plugin/astra-hooks/reviews/?filter=5#new-post',
					__( 'Ok, you deserve it', 'astra-hooks' ),
					MONTH_IN_SECONDS,
					__( 'Nope, maybe later', 'astra-hooks' ),
					__( 'I already did', 'astra-hooks' )
				),
				'repeat-notice-after'        => MONTH_IN_SECONDS,
				'priority'                   => 25,
				'display-with-other-notices' => false,
			)
		);
	}

	add_action( 'admin_notices', 'register_notices' );

endif;