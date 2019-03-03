<?php  

/*
  Template para el detalle de los artículos
*/


get_header(); ?>  

<!-- start banner Area -->
<section class="relative about-banner"> 
  <div class="overlay overlay-bg"></div>
  <div class="container">       
    <div class="d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1> <?php the_title(); ?></h1> 
        <p class="link-nav">
          <a href="/">Inicio </a>  <span class="lnr lnr-arrow-right"></span>
          <a href="/blog">Blog </a> <span class="lnr lnr-arrow-right"></span>
          <a href="#"> <?php the_title(); ?></a></p>
      </div>  
    </div>
  </div>
</section>
<!-- End banner Area -->   

<section class="single-post-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="single-post flex-column">
            <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail('blog_detail' , array('class' => 'img-fluid'));
            } else { ?>
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/default.jpg" alt="<?php the_title(); ?>" />
            <?php } ?>

            <div class="col-md-12 meta-details">
              <ul class="tags">
                <li><span class="lnr lnr-tag"></span> <?php the_category(', '); ?></li>
              </ul>
              <div class="row d-flex align-items-center">
                <p class="mr-20"><span class="lnr lnr-user"></span> <?php the_author();?> </p>
                <p class="mr-20"><span class="lnr lnr-calendar-full"></span> <?php the_date('j M, Y'); ?> </p>      
              </div>
            </div>

            <h1 class="mt-20 mb-20"><?php the_title(); ?></h1>               
            <?php the_content(); ?>            
          </div>

        

        <?php endwhile; ?>


        <nav class="blog-pagination d-flex justify-content-between">
          <?php 
            $next = get_permalink(get_adjacent_post(false,'',false));
            $prev= get_permalink(get_adjacent_post(false,'',true));
           ?>

          <?php if (get_the_permalink()!=$prev): ?>            
              <a href='<?php echo $prev ?>'><span class="lnr lnr-chevron-left"></span> Anterior</a>           
          <?php endif; ?>

          <?php if (get_the_permalink()!=$next): ?>            
              <a href="<?php echo $next ?>">Siguiente <span class="lnr lnr-chevron-right"></span></a>           
          <?php endif; ?>
        </nav>

      </div>
      <?php get_sidebar(); ?>

    </div>
  </div>
</section> 

<?php  get_footer(); ?>