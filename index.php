<?php 
/*
  Template para la página del blog e Inicio por default si no hay seleccionada
*/

get_header(); ?>

<!-- start banner Area -->
<section class="relative about-banner"> 
  <div class="overlay overlay-bg"></div>
   <div class="container">       
	  <div class="row d-flex align-items-center justify-content-center">
	    <div class="about-content col-lg-12">
	      <h1> Blog</h1>
        <p class="mt-10">Pongo a tu disposición varias <strong>guías y tutoriales</strong> sobre <strong> Marketing Digital, Diseño y Desarrollo web</strong>.</p> 
	    </div>  
	  </div>
	</div>
</section>
<!-- End banner Area -->   


 <!-- Start top-category-widget Area -->
<section class="top-category-widget-area pt-30 pb-30">
  <div class="container">
    <div class="row category-blog "> 
      <!-- Loop categorias -->
      <?php foreach (get_categories() as $cat) : ?>
        <div class="single-cat-widget">
          <div class="content relative">
            <div class="overlay overlay-bg"></div>
            <a href="<?php echo get_category_link($cat->term_id); ?>">
              <div class="thumb">               
                <img class="content-image img-fluid d-block mx-auto" src="<?php echo z_taxonomy_image_url($cat->term_id, 'category_blog'); ?>" alt="">
              </div>
              <div class="content-details">
                <h4 class="content-title mx-auto text-uppercase"><?php echo $cat->cat_name; ?></h4>
                 <span></span>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>  
</section>
 <!-- End top-category-widget Area -->


<!-- Start post-content Area -->
<section class="post-content-area single-post-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
        <!-- Loop post -->
        <?php while(have_posts()): the_post(); ?>
          <div class="single-post row">
            <div class="col-lg-3  col-md-3 meta-details">
              <ul class="tags">
                <li><?php the_category(', '); ?></li>
              </ul>
              <div class="user-details row">
                <p class="user-name col-lg-12 col-md-12 col-6"><?php the_author();?>  <span class="lnr lnr-user"></span></p>
                <p class="date col-lg-12 col-md-12 col-6"> <?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?> <span class="lnr lnr-calendar-full"></span> </p>        
              </div>
            </div>
            <div class="col-lg-9 col-md-9 ">
              <div class="feature-img">
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('blog_thumbnail' , array('class' => 'img-fluid'));
                  } else { ?>
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/default_thumbnail.jpg" alt="<?php the_title(); ?>" />
                  <?php } ?>
                </a>
              </div>
              <a class="posts-title" href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3> </a>
              <p class="excert"> <?php the_excerpt(); ?> </p>
              <a href="<?php the_permalink(); ?>" class="primary-btn">Ver más</a>
            </div>
          </div>
        <?php endwhile; ?>

        <!-- Paginación -->
        <nav class="blog-pagination justify-content-center d-flex">
          <?php if (function_exists('wp_pagenavi')) { 
            wp_pagenavi(); 
          } else { ?> 
            <div class="navigation"> 
              <div class="alignleft"> 
                <?php next_posts_link(__('Older Entries','my_theme')); ?> 
              </div> 
              <div class="alignright"> 
                <?php previous_posts_link(__('Newer Entries','my_theme')); ?> 
              </div> 
            </div> 
          <?php } ?>
        </nav>

      </div>  







      <?php get_sidebar(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
