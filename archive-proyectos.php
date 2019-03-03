<?php

/*
Archive Custom Postype Portafolio
*/

	get_header(); ?>


<!-- start banner Area -->
<section class="about-banner">
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1>Conoce mi Portafolio</h1>	
				<p class="link-nav">
					<a href="<?php echo home_url(); ?>">Inicio </a>  <span class="lnr lnr-arrow-right"></span>
					<a href="<?php get_permalink(); ?>">Proyectos</a>
				</p>
			</div>	
		</div>
	</div>
</section>	


<?php get_template_part( 'parts/content', 'ultimos_proyectos' ); ?>


<!-- start footer Area -->
<?php get_footer(); ?>