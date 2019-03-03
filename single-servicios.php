<?php  

/*
  Template para el detalle de los servicios
*/


get_header(); ?>  

<!-- Head -->
<section class="relative about-banner"> 
  <div class="overlay overlay-bg"></div>
  <div class="container">       
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1> <?php the_title(); ?></h1> 
        <p class="link-nav">
          <a href="<?php echo home_url(); ?>">Inicio </a>  <span class="lnr lnr-arrow-right"></span>
          <a href="<?php echo get_post_type_archive_link( 'servicios' ); ?>">Servicios </a> <span class="lnr lnr-arrow-right"></span>
          <a href="<?php get_permalink(); ?>"> <?php the_title(); ?></a></p>
      </div>  
    </div>
  </div>
</section>

<section class="single-post-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mt-30">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="row">
            <div class="col-md-3">
              <div class="single-services mt-0">
                <span class="lnr <?php  the_field('icono'); ?>"></span>
                <h6 class="mt-0"> <?php the_title(); ?> </h6>
               </div>
            </div>
            <div class="col-md-9 mt-sm-20 left-align-p">
              <?php  the_excerpt();  ?>
            </div>
            <div class="col-md-12 mt-30">
               <?php  the_content();  ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>  

      <?php get_sidebar(); ?>

    </div>
  </div>
</section>

<?php get_template_part( 'parts/content', 'call_to_action' ); ?>

<?php  get_footer(); ?>