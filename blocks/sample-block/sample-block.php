<?php

function sample_block_editor_assets() {
	wp_enqueue_script( 'sample-block', plugins_url( 'block.js', __FILE__ ), array(
		'wp-blocks',
		'wp-i18n',
		'wp-element',
	), time() );

	wp_enqueue_style( 'giphy-block', plugins_url( 'editor.css', __FILE__ ), array( 'wp-blocks' ), time() );
}
add_action( 'enqueue_block_editor_assets', 'sample_block_editor_assets' );
