<?php

// NOTE: Replace all instances of the word 'themeslug' with the name of your theme.

/**
 * Load stylesheets on the front end of the website.
 *
 * @link https://developer.wordpress.org/themes/core-concepts/including-assets/#front-end-stylesheets
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/#loading-style-css
 */

function themeslug_enqueue_styles() {
	/* Load custom stylesheets */
	wp_enqueue_style( 'base-style', get_theme_file_uri( 'assets/css/base.css' ) );
	wp_enqueue_style( 'base-style', get_theme_file_uri( 'assets/css/layouts.css' ) );
	wp_enqueue_style( 'base-style', get_theme_file_uri( 'assets/css/utility-classes.css' ) );

	/* Load the theme's style.css file */
	wp_enqueue_style( 'themeslug-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_styles' );

/**
 * Load stylesheets in the editor.
 *
 * @link https://developer.wordpress.org/themes/core-concepts/including-assets/#editor-stylesheets
 */

function themeslug_setup() {
	add_editor_style( array(
		/* Load custom stylesheets */
		get_theme_file_uri( 'assets/css/base.css' ),
		get_theme_file_uri( 'assets/css/layouts.css' ),
		get_theme_file_uri( 'assets/css/utility-classes.css' ),

		/* Load the theme's style.css file */
		get_stylesheet_uri()
	) );
}

add_action( 'after_setup_theme', 'themeslug_setup' );

/**
 * Register custom block style variations.
 *
 * @link https://developer.wordpress.org/themes/features/block-style-variations/
 */

function themeslug_block_style_variations() {
	register_block_style(
		'core/button',
		array(
			'name'         => 'fill-variant',
			'label'        => __( 'Fill (variant)', 'themeslug' ),
			'inline_style' => '
				.wp-block-button.is-style-fill-variant > :is(.wp-element-button, .wp-block-button__link) {
					color: var(--wp--preset--color--base);
					background-color: var(--wp--preset--color--contrast);
				}

				.wp-block-button.is-style-fill-variant > :is(.wp-element-button, .wp-block-button__link):is(:hover, :focus, :active) {
					color: var(--wp--preset--color--base);
					background-color: var(--wp--preset--color--accent);
				}
			'
		)
	);
}

add_action( 'init', 'themeslug_block_style_variations' );

/**
 * Enqueue custom block stylesheets.
 *
 * @link https://developer.wordpress.org/themes/features/block-stylesheets/
 * @link https://developer.wordpress.org/news/2022/12/07/leveraging-theme-json-and-per-block-styles-for-more-performant-themes/
 */

function themeslug_block_stylesheets() {
	// Add the block name (with namespace) for each style.
	$blocks = array(
		'core/navigation',
		'core/query-pagination',
		'core/site-logo',
	);

	// Loop through each block and enqueue its styles.
	foreach ( $blocks as $block ) {
		// Replace slash with hyphen for filename.
		$slug = str_replace( '/', '-', $block );

		wp_enqueue_block_style( $block, array(
			'handle' => "themeslug-block-{$slug}",
			'src'    => get_theme_file_uri( "assets/css/blocks/{$slug}.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/{$slug}.css" )
		) );
	}
}

add_action( 'init', 'themeslug_block_stylesheets' );
