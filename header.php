	<!DOCTYPE html>
	<html lang="es" class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.ico">
		<!-- Author Meta -->
		<meta name="author" content="Andrés Felipe Patiño Vallejo">

		<!-- Site Title -->
		<title> <?php wp_title(''); ?> <?php if(wp_title('', false)); ?></title>

		<?php wp_head(); ?>
		
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-5275877248465463",
			enable_page_level_ads: true
		  });
		</script>		
		
		</head>
		<body>	
		<div id="preloader"></div>
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			    	<div id="logo">
			       		<?php 
					       	$custom_logo = get_theme_mod( 'custom_logo' );
					       	$logo = wp_get_attachment_image_src( $custom_logo , 'full' );
					       	if ( has_custom_logo() ) {
					        	echo '<a href="/"> <img class="img-fluid" src="'. esc_url( $logo[0] ) .'"> </a>';
					       	} else {
					        	echo '<h5>'. get_bloginfo( 'name' ) .'</h5>';
					       	}
			        	?>
			      	</div>

			     	<?php
			      	  $args = array(
			      	    'theme_location' => 'main-menu',
			      	    'container'     =>  'nav',
			      	    'container_id'   => 'nav-menu-container',
			      	    'items_wrap'     => '<ul class="nav-menu"><li id="item-id"> </li>%3$s</ul>'
			      	  );
			      	  wp_nav_menu($args);
			      	?>

		    	</div>
		    </div>
		  </header>