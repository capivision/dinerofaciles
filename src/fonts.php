<?php
if ( ! function_exists( 'app_economy_fonts' ) ) {
	function app_economy_fonts() {
		wp_enqueue_style(
			'app-economy-fonts',
			'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap',
			array(),
			null
		);
	}
}
add_action( 'enqueue_block_assets', 'app_economy_fonts' );