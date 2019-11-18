<?php
/**
 * Astra Hooks - Markup
 *
 * @package Astra Hooks
 */

if ( ! class_exists( 'Astra_Hooks_Markup' ) ) {

	/**
	 * Scroll To Top Markup Initial Setup
	 *
	 * @since 1.0.0
	 */
	class Astra_Hooks_Markup {

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
		 *  Constructor
		 */
		public function __construct() {

			// Header.
			add_action( 'wp_head', array( $this, 'hook_wp_head' ) );
			add_action( 'astra_header_before', array( $this, 'hook_header_before' ) );
			add_action( 'astra_header_after', array( $this, 'hook_header_after' ) );

			// Sidebar.
			add_action( 'astra_sidebars_before', array( $this, 'hook_sidebars_before' ) );
			add_action( 'astra_sidebars_after', array( $this, 'hook_sidebars_after' ) );

			// Footer.
			add_action( 'astra_footer_before', array( $this, 'hook_footer_before' ) );
			add_action( 'astra_footer_after', array( $this, 'hook_footer_after' ) );
			add_action( 'wp_footer', array( $this, 'hook_wp_footer' ) );

			// Content.
			add_action( 'astra_content_before', array( $this, 'hook_container_before' ) );
			add_action( 'astra_primary_content_top', array( $this, 'hook_before_main_content' ) );
			add_action( 'astra_entry_top', array( $this, 'hook_entry_top' ) );
			add_action( 'astra_entry_content_before', array( $this, 'hook_entry_content_before' ) );
			add_action( 'astra_entry_content_after', array( $this, 'hook_entry_content_after' ) );
			add_action( 'astra_entry_bottom', array( $this, 'hook_entry_bottom' ) );
			add_action( 'astra_primary_content_bottom', array( $this, 'hook_after_main_content' ) );
			add_action( 'astra_content_after', array( $this, 'hook_container_after' ) );

			// Comment.
			add_action( 'astra_comments_before', array( $this, 'hook_comments_before' ) );
			add_action( 'astra_comments_after', array( $this, 'hook_comments_after' ) );

		}

		/**
		 * Ast wp_head Hook
		 */
		public function hook_wp_head() {
			$wp_head = astra_get_option( 'hook-wp-head' );
			echo do_shortcode( $wp_head );
		}

		/**
		 * Ast Header Before Hook
		 */
		public function hook_header_before() {
			$header_before = astra_get_option( 'hook-header-before' );
			echo do_shortcode( $header_before );
		}

		/**
		 * Ast Header After Hook
		 */
		public function hook_header_after() {
			$header_after = astra_get_option( 'hook-header-after' );
			echo do_shortcode( $header_after );
		}

		/**
		 * Ast Page/Post Before Main Container Hook
		 */
		public function hook_container_before() {
			$hook_container_before = astra_get_option( 'hook-before-container' );
			echo do_shortcode( $hook_container_before );
		}

		/**
		 * Ast Page/Post Before Main Content Hook
		 */
		public function hook_before_main_content() {
			$hook_before_main_content = astra_get_option( 'hook-before-main-content' );
			echo do_shortcode( $hook_before_main_content );
		}

		/**
		 * Ast Page/Post Before Hook
		 */
		public function hook_entry_top() {
			$entry_top = astra_get_option( 'hook-entry-top' );
			echo do_shortcode( $entry_top );
		}

		/**
		 * Ast Page/Post After Hook
		 */
		public function hook_entry_bottom() {
			$entry_bottom = astra_get_option( 'hook-entry-bottom' );
			echo do_shortcode( $entry_bottom );
		}

		/**
		 * Ast Page/Post After Main Content Hook
		 */
		public function hook_after_main_content() {
			$hook_after_main_content = astra_get_option( 'hook-after-main-content' );
			echo do_shortcode( $hook_after_main_content );
		}

		/**
		 * Ast Page/Post After Main Container Hook
		 */
		public function hook_container_after() {
			$hook_container_after = astra_get_option( 'hook-after-container' );
			echo do_shortcode( $hook_container_after );
		}

		/**
		 * Ast After Entry Content Before Hook
		 */
		public function hook_entry_content_before() {
			$after_entry_title = astra_get_option( 'hook-entry-content-before' );
			echo do_shortcode( $after_entry_title );
		}

		/**
		 * Ast After Entry Content After Hook
		 */
		public function hook_entry_content_after() {
			$after_entry_title = astra_get_option( 'hook-entry-content-after' );
			echo do_shortcode( $after_entry_title );
		}

		/**
		 * Ast Comment Before Hook
		 */
		public function hook_comments_before() {
			$comment_before = astra_get_option( 'hook-comments-before' );
			echo do_shortcode( $comment_before );
		}

		/**
		 * Ast Comment After Hook
		 */
		public function hook_comments_after() {
			$comment_after = astra_get_option( 'hook-comments-after' );
			echo do_shortcode( $comment_after );
		}

		/**
		 * Ast Sidebars Before Hook
		 */
		public function hook_sidebars_before() {
			$sidebar_before = astra_get_option( 'hook-sidebars-before' );
			echo do_shortcode( $sidebar_before );
		}

		/**
		 * Ast Sidebars After Hook
		 */
		public function hook_sidebars_after() {
			$sidebar_after = astra_get_option( 'hook-sidebars-after' );
			echo do_shortcode( $sidebar_after );
		}

		/**
		 * Ast Footer Before Hook
		 */
		public function hook_footer_before() {
			$footer_before = astra_get_option( 'hook-footer-before' );
			echo do_shortcode( $footer_before );
		}

		/**
		 * Ast Footer After Hook
		 */
		public function hook_footer_after() {
			$footer_after = astra_get_option( 'hook-footer-after' );
			echo do_shortcode( $footer_after );
		}

		/**
		 * Ast wp_head Hook
		 */
		public function hook_wp_footer() {
			$wp_footer = astra_get_option( 'hook-wp-footer' );
			echo do_shortcode( $wp_footer );
		}
	}
}

/**
*  Kicking this off by calling 'get_instance()' method
*/
Astra_Hooks_Markup::get_instance();
