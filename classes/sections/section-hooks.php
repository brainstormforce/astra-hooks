<?php
/**
 * Astra Hooks - Options for our theme.
 *
 * @package     Astra Hooks
 * @author      Brainstorm Force
 * @copyright   Copyright (c) 2015, Brainstorm Force
 * @link        http://www.brainstormforce.com
 * @since       1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	/**
	 * Header
	 */
	/**
	 * Option: wp_head
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-wp-head]',
		array(
			'default' => astra_get_option( 'hook-wp-head' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-wp-head]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-header',
			'label'   => __( 'wp_head', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_header_before
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-header-before]',
		array(
			'default' => astra_get_option( 'hook-header-before' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-header-before]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-header',
			'label'   => __( 'Before Header (astra_header_before)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_header_after
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-header-after]',
		array(
			'default' => astra_get_option( 'hook-header-after' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-header-after]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-header',
			'label'   => __( 'After Header (astra_header_after)', 'astra-hooks' ),
		)
	);

	/**
	 * Content
	 */
	/**
	 * Option: astra_content_before
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-before-container]',
		array(
			'default' => astra_get_option( 'hook-before-container' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-before-container]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-content',
			'label'   => __( 'Before Container (astra_content_before)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_primary_content_top
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-before-main-content]',
		array(
			'default' => astra_get_option( 'hook-before-main-content' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-before-main-content]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-content',
			'label'   => __( 'Before Main Content (astra_primary_content_top)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_entry_top
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-entry-top]',
		array(
			'default' => astra_get_option( 'hook-entry-top' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-entry-top]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-content',
			'label'   => __( 'Before Content (astra_entry_top)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_entry_content_before
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-entry-content-before]',
		array(
			'default' => astra_get_option( 'hook-entry-content-before' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-entry-content-before]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-content',
			'label'   => __( 'Before Entry Content (astra_entry_content_before)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_entry_content_after
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-entry-content-after]',
		array(
			'default' => astra_get_option( 'hook-entry-content-after' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-entry-content-after]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-content',
			'label'   => __( 'After Entry Content (astra_entry_content_after)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_entry_bottom
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-entry-bottom]',
		array(
			'default' => astra_get_option( 'hook-entry-bottom' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-entry-bottom]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-content',
			'label'   => __( 'After Content (astra_entry_bottom)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_primary_content_bottom
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-after-main-content]',
		array(
			'default' => astra_get_option( 'hook-after-main-content' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-after-main-content]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-content',
			'label'   => __( 'After Main Content (astra_primary_content_bottom)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_content_after
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-after-container]',
		array(
			'default' => astra_get_option( 'hook-after-container' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-after-container]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-content',
			'label'   => __( 'After Container (astra_content_after)', 'astra-hooks' ),
		)
	);

	/**
	 * Comment
	 */
	/**
	 * Option: astra_comments_before
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-comments-before]',
		array(
			'default' => astra_get_option( 'hook-comments-before' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-comments-before]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-comment',
			'label'   => __( 'Before Comment (astra_comments_before)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_comments_after
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-comments-after]',
		array(
			'default' => astra_get_option( 'hook-comments-after' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-comments-after]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-comment',
			'label'   => __( 'After Comment (astra_comments_after)', 'astra-hooks' ),
		)
	);

	/**
	 * Sidebar
	 */
	/**
	 * Option: astra_sidebars_before
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-sidebars-before]',
		array(
			'default' => astra_get_option( 'hook-sidebars-before' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-sidebars-before]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-sidebar',
			'label'   => __( 'Before Sidebar (astra_sidebars_before)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_sidebars_after
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-sidebars-after]',
		array(
			'default' => astra_get_option( 'hook-sidebars-after' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-sidebars-after]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-sidebar',
			'label'   => __( 'After Sidebar (astra_sidebars_after)', 'astra-hooks' ),
		)
	);

	/**
	 * Footer
	 */
	/**
	 * Option: astra_footer_before
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-footer-before]',
		array(
			'default' => astra_get_option( 'hook-footer-before' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-footer-before]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-footer',
			'label'   => __( 'Before Footer (astra_footer_before)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: astra_footer_after
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-footer-after]',
		array(
			'default' => astra_get_option( 'hook-footer-after' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-footer-after]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-footer',
			'label'   => __( 'After Footer (astra_footer_after)', 'astra-hooks' ),
		)
	);

	/**
	 * Option: wp_footer
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[hook-wp-footer]',
		array(
			'default' => astra_get_option( 'hook-wp-footer' ),
			'type'    => 'option',
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[hook-wp-footer]',
		array(
			'type'    => 'textarea',
			'section' => 'section-hooks-footer',
			'label'   => __( 'wp_footer', 'astra-hooks' ),
		)
	);
