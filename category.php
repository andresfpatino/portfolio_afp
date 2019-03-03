<?php
/**
 * The template for displaying Archive category pages
 */

get_header(); ?>

<!-- start banner Area -->
<section class="relative about-banner"> 
  <div class="overlay overlay-bg"></div>
   <div class="container">       
	  <div class="row d-flex align-items-center justify-content-center">
	    <div class="about-content col-lg-12">
	      	<h1> Categoría:  <?php echo single_cat_title("", false); ?></h1>
	      	<p class="link-nav">
	        	<a href="/">Inicio </a>  <span class="lnr lnr-arrow-right"></span>
	        	<a href="/blog">Blog </a> <span class="lnr lnr-arrow-right"></span>
	        	<a href="#"> <?php echo single_cat_title("", false); ?> </a>
	    	</p>
	    </div>  
	  </div>
	</div>
</section>
<!-- End banner Area -->   

<!-- Content -->
<section class="post-content-area single-post-area">
	<div class="container">		
		<div class="row">
			<div class="col-lg-8 posts-list">
				<?php
				    $category = get_query_var('cat');
				    $current_cat = get_category($cat);
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'order'          => 'ASC',
						'posts_per_page' => -1,
						'category_name' => '$current_cat->slug;'
					);
					$query = new WP_Query($args);
				?>

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