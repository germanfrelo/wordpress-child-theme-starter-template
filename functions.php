<?php

// NOTE: Replace all instances of the word 'themeslug' with the name of your theme.

/**
 * Load stylesheets on the front end of the website.
 *
 * @link https://developer.wordpress.org/themes/core-concepts/including-assets/#front-end-stylesheets
 */

function themeslug_enqueue_styles() {
	/**
	 * Load a custom stylesheet with base styles.
	 */
	wp_enqueue_style( 'base-style', get_theme_file_uri( 'assets/css/base.css' ) );

	/**
	 * Load the theme's style.css file.
	 *
	 * This is necessary if the parent theme only loads its own stylesheet or doesn't load a stylesheet at all (e.g. Twenty Twenty-Four theme).
	 *
	 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/#loading-style-css
	 */
	wp_enqueue_style( 'themeslug-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_styles' );

/**
 * Load stylesheets in the editor.
 *
 * @link https://developer.wordpress.org/themes/core-concepts/including-assets/#editor-stylesheets
 */

function themeslug_add_editor_styles() {
	add_editor_style( array(
		get_theme_file_uri( 'assets/css/base.css' ),
		get_stylesheet_uri()
	) );
}

add_action( 'after_setup_theme', 'themeslug_add_editor_styles' );
