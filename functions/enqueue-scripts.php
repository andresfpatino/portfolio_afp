<?php


function site_scripts() {  

    // JS
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-2.2.4.min.js', array(), false, true);
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), false, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), false, true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/easing.min.js', array(), false, true );
    wp_enqueue_script( 'hoverIntent', get_template_directory_uri() . '/assets/js/hoverIntent.js', array(), false, true );
    wp_enqueue_script( 'superFish', get_template_directory_uri() . '/assets/js/superfish.min.js', array(), false, true );
    wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'jquery-tabs', get_template_directory_uri() . '/assets/js/jquery.tabs.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'jquery-nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), false, true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), false, true );
    wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'simple-skillbar', get_template_directory_uri() . '/assets/js/simple-skillbar.js', array(), false, true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), false, true );
    wp_enqueue_script( 'sweetalert', get_template_directory_uri() . '/assets/js/sweetalert.min.js', array(), false, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true );
     
    // CSS
    wp_enqueue_style( 'poppins-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700', false );
    wp_enqueue_style( 'linearicons', get_template_directory_uri() . '/assets/css/linearicons.css', false, 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false, 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', false, 'all' );
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', false,  'all' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', false, 'all' );
    wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/assets/css/animate.min.css', false, 'all' );
    wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/assets/css/owl.carousel.css', false, 'all' );
    wp_enqueue_style( 'sweetalert', get_template_directory_uri() . '/assets/css/sweetalert.css', false, 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', 'all' );
}

add_action('wp_enqueue_scripts', 'site_scripts', 999);