<?php 

function custom_logo_setup() {
    $defaults = array(
    	'width'       => 251,
        'height'      => 30,        
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );

