<?php
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

<?php
	/* Search Count */
	$allsearch = new WP_Query("s=$s&showposts=-1");
	$count = $allsearch->post_count;
?>


<!-- start banner Area -->
<section class="relative about-banner"> 
  <div class="overlay overlay-bg"></div>
  <div class="container">       
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1> Resultados de busqueda</h1> 
        <p>Se encontraron <span><?php echo $count; ?></span> resultados</p>
        <p class="link-nav">
        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a> 
        	<span class="lnr lnr-arrow-right"></span>
        	<a href="#">Resultados de busqueda </a>
        </p>
      </div>  
    </div>
  </div>
</section>
<!-- End banner Area -->   

<div class="container single-post-area">
	<div class="col-lg-12 posts-list">
	    <div class="single-post row">
			<h4 class="mb-30">Resultados de busqueda para: "<?php echo the_search_query(); ?>"</h4>			
			<?php wp_reset_query(); ?>

			<div class="col-md-12 post-content-area" style="background: #fff;">
			<?php				
				$myResults = new WP_Query(array(
					'posts_per_page' => 20,
					's' => $s,
				    'orderby'   => array(
				      'date' =>'DESC',
				      'menu_order'=>'ASC',
				     )
				));

				if( $myResults->have_posts() ):
					while( $myResults->have_posts() ): $myResults->the_post(); ?>	
					<div class="mb-40 row d-flex justify-content-center align-items-center">
						<div class="col-md-3">
							<a href="<?php the_permalink(); ?>">
		                        <?php if ( has_post_thumbnail() ) {
		                          the_post_thumbnail('search_result' , array('class' => 'img-fluid'));
		                        } else { ?>
		                          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/default_thumbnail.jpg" alt="<?php the_title(); ?>" />
		                        <?php } ?>
	                        </a>
						</div>							
						<div class="col-md-9">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="primary-btn">Ver más</a>
						</div>
					</div>	
					<?php endwhile;?>
					<?php
					  else:
					  	echo "<br>";
						echo "No existen resultados con esa busqueda";
					endif;
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
