
<?php 

/*
Template Name: Página inicio
*/

# Header
get_header(); ?>

<!--  banner -->
<?php $image = get_field('imagen_banner', 'option'); ?>
<section class="banner-area" style="background-image: url('<?php echo $image['url']; ?>')">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-8 col-md-8 banner-left"> 
                <h1> <?php the_field('titulo_banner', 'option'); ?> </h1>
                <p> <?php the_field('texto_banner', 'option'); ?> </p>
                <a href=" <?php the_field('url_boton_banner', 'option'); ?> " class="primary-btn text-uppercase">
                    <?php the_field('texto_boton_banner', 'option'); ?>                                    
                </a>
            </div>
        </div>
    </div>                  
</section>

<!-- Sobre mi -->
<section class="home-about-area pt-70 pb-70">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-9 col-md-9 title text-center">
                <h6> <?php the_field('sub_titulo_bio', 'option'); ?> </h6>
                <h1 class="mb-15"> <?php the_field('titulo_bio', 'option'); ?> </h1>
                <p> <?php the_field('texto_principal_bio', 'option'); ?> </p>
                <a href=" <?php the_field('url_boton_bio', 'option'); ?> " class="primary-btn text-uppercase">
                    <?php the_field('texto_boton_bio', 'option'); ?>
                </a>
            </div>
        </div>
    </div>  
</section> 


<!-- Servicios -->
<?php  get_template_part( 'parts/content', 'block_servicios' );  ?>

<!-- Cifras -->
<?php  get_template_part( 'parts/content', 'cifras' );  ?>
                       
<!-- Start portfolio-area Area -->
<?php  get_template_part( 'parts/content', 'ultimos_proyectos' );  ?>

<!-- Start testimonial Area -->
<?php  get_template_part( 'parts/content', 'testimoniales' );  ?>
        
<!-- Start call to action -->
<?php  get_template_part( 'parts/content', 'call_to_action' );  ?>

<!-- Start recent-blog Area -->
<?php  get_template_part( 'parts/content', 'ultimas_publicaciones' );  ?>

<!-- Footer  -->     
<?php get_footer(); ?>