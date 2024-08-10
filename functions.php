<?php

/**
 * Load the active theme's style.css file.
 *
 * Source:
 * - https://developer.wordpress.org/themes/core-concepts/including-assets/#front-end-stylesheets
 * - https://developer.wordpress.org/themes/advanced-topics/child-themes/#loading-style-css
 */

add_action("wp_enqueue_scripts", "mytheme_enqueue_styles");

function mytheme_enqueue_styles() {
	wp_enqueue_style("mytheme-style", get_stylesheet_uri());
}

/**
 * Make styles from the active theme's style.css to appear in the editor.
 *
 * Source: https://developer.wordpress.org/themes/core-concepts/including-assets/#editor-stylesheets
 */

add_action("after_setup_theme", "mytheme_setup");

function mytheme_setup() {
	add_editor_style(get_stylesheet_uri());
}
