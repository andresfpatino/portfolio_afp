<?php

# Adding WP Functions & Theme Support
function theme_support() {
	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 84, 84, true);
	
	// Tamaño de imagenes
    add_image_size( 'blog_thumbnail', 540, 252, true );	
    add_image_size( 'blog_detail', 750, 350, true );
    add_image_size( 'category_blog', 266, 162, true );
    add_image_size( 'search_result', 290, 160, true );
    add_image_size( 'img_testimonial', 60, 60, true );

		
} add_action( 'after_setup_theme', 'theme_support' );


# --- SOPORTE PARA WIDGETS
function widgets(){
    // Blog
    register_sidebar(array(
        'name' 			=> 'Blog',
        'id'			=> 'blog_sidebar',
        'before_widget' => '<div class="single-sidebar-widget">',
        'after_widget'	=> '</div>',
        'before_title' 	=> '<h4 class="popular-title">',
        'after_title' 	=> '</h4>'
    ));

}

add_action('widgets_init' , 'widgets');

# -- Custom logo
add_theme_support( 'custom-logo' );


# -- Cabeceras para evitar problemas de Seguridad

function add_header_seguridad() {
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-XSS-Protection: 1;mode=block' );
}
add_action( 'send_headers', 'add_header_seguridad' );


