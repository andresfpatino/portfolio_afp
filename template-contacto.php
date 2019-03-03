<?php 

/*
Template Name: Página Contacto
*/

	get_header(); ?>
	  
<!-- start banner Area -->
<section class="relative about-banner">	
	<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class=""><?php the_title(); ?></h1>	
					<p class="link-nav">
						<a href="<?php echo home_url(); ?>">Inicio </a>  <span class="lnr lnr-arrow-right"></span>
					 	<a href="<?php get_permalink(); ?>"> <?php the_title(); ?></a>
					</p>
				</div>	
			</div>
		</div>
</section>
	  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<!-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> -->
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5><?php the_field('direccion', 'option'); ?></h5>
									<p>&nbsp;</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5><?php the_field('telefono', 'option'); ?></h5>
									<p>Lunes a Viernes 9am a 6pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5><?php the_field('correo_electronico', 'option'); ?></h5>
									<p>Envíame tu consulta</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">	
							<?php echo do_shortcode( '[contact-form-7 id="283" title="Formulario de contacto" html_class="form-area contact-form text-right"]' ); ?>
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

<!-- start footer Area -->
<?php get_footer(); ?>