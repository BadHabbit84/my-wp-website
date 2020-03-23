<?php 
add_action('acf/init', 'acf_blocks_init');

function acf_blocks_init() {
	
	 // Check function exists.
    if( function_exists('acf_register_block_type') ) {

    	// Register a Hero block.
        acf_register_block_type(array(
            'name'              => 'Hero Block',
            'title'             => __('Hero Block'),
            'description'       => __('A Hero Block.'),
            'render_template'   => 'partial-templates/hero-block.php',
            
        ));
    }
}