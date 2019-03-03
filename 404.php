<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

<!-- start banner Area -->
<section class="relative about-banner"> 
  <div class="overlay overlay-bg"></div>
  <div class="container">       
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1> ERROR 404 </h1> 
        <p class="link-nav"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio </a>  <span class="lnr lnr-arrow-right"></span> <a href="#">Página no encontrada </a>  </p>
      </div>  
    </div>
  </div>
</section>
<!-- End banner Area -->   

<section class="post-content-area single-post-area">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-8 pb-40 title text-center">
				<h1><?php _e( 'Página no encontrada'); ?></h1>	
				<p><?php _e( 'Lo sentimos, pero la página que esta buscando no existe o se ha eliminado.'); ?></p>
				<a href="<?php echo home_url( '/');?>" class="primary-btn text-uppercase">Volver a la página de inicio</a>
			</div>
		</div>
    </div>
</section>

<?php get_footer(); ?>