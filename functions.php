<?php

/**
 * Load the active theme's style.css file on the front end of the website.
 *
 * This is necessary if
 * - the parent theme only loads its own stylesheet, or
 * - the parent theme doesn't load a stylesheet at all (e.g. Twenty Twenty-Four theme)
 *
 * @link https://developer.wordpress.org/themes/core-concepts/including-assets/#front-end-stylesheets
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/#loading-style-css
 */

function themeslug_enqueue_styles() {
	wp_enqueue_style( 'themeslug-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_styles' );

/**
 * Load the active theme's style.css file in the editor.
 *
 * @link https://developer.wordpress.org/themes/core-concepts/including-assets/#editor-stylesheets
 */

function themeslug_setup() {
	add_editor_style( get_stylesheet_uri() );
}

add_action( 'after_setup_theme', 'themeslug_setup' );
