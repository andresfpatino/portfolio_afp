<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>


<!-- start banner Area -->
<section class="about-banner">
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1><?php the_title(); ?></h1>	
				<p class="link-nav">
					<a href="<?php echo home_url(); ?>">Inicio </a>  <span class="lnr lnr-arrow-right"></span> 
					<a href="<?php get_permalink(); ?>"> <?php the_title(); ?></a>
				</p>
			</div>	
		</div>
	</div>
</section>	

<section class="home-about-area pt-50 pb-50" >
	<div class="container">
		<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				// Include the page content template.
				the_content();
			endwhile;
		?>
	</div>
</section>

<?php get_footer(); ?>