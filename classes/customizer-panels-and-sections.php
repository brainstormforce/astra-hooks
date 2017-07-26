<?php
/**
 * Scroll To Top - Panels & Sections
 *
 * @package Astra Hooks
 */

$wp_customize->add_panel(
	'panel-hooks', array(
		'priority' => 55,
		'title' => __( 'Hooks', 'astra-theme', 'astra-pro', 'astra-hooks' ),
	)
);

$wp_customize->add_section(
	'section-hooks-body', array(
		'title'    => __( 'Body', 'astra-hooks', 'astra-pro' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-header', array(
		'title'    => __( 'Header', 'astra-hooks', 'astra-pro' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-content', array(
		'title'    => __( 'Content', 'astra-hooks', 'astra-pro' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-comment', array(
		'title'    => __( 'Comment', 'astra-hooks', 'astra-pro' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-sidebar', array(
		'title'    => __( 'Sidebar', 'astra-hooks', 'astra-pro' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-footer', array(
		'title'    => __( 'Footer', 'astra-hooks', 'astra-pro' ),
		'panel'    => 'panel-hooks',
	)
);
