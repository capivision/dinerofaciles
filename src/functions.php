<?php
require_once __DIR__ . '/styles.php';
require_once __DIR__ . '/fonts.php';
require_once __DIR__ . '/theme-assets-rewrite.php';

if ( ! function_exists( 'app_economy_setup' ) ) {
	function app_economy_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'app_economy_setup' );