<?php
/**
 * Scroll To Top - Panels & Sections
 *
 * @package Astra Hooks
 */

$wp_customize->add_panel(
	'panel-hooks', array(
		'priority' => 55,
		'title' => __( 'Hooks', 'astra-theme' ),
	)
);

$wp_customize->add_section(
	'section-hooks-body', array(
		'title'    => __( 'Body', 'astra-hooks' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-header', array(
		'title'    => __( 'Header', 'astra-hooks' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-content', array(
		'title'    => __( 'Content', 'astra-hooks' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-comment', array(
		'title'    => __( 'Comment', 'astra-hooks' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-sidebar', array(
		'title'    => __( 'Sidebar', 'astra-hooks' ),
		'panel'    => 'panel-hooks',
	)
);

$wp_customize->add_section(
	'section-hooks-footer', array(
		'title'    => __( 'Footer', 'astra-hooks' ),
		'panel'    => 'panel-hooks',
	)
);
