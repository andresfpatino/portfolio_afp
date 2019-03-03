<?php 

/*
Template Name: Página Planes
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

<!-- Tabla de planes -->
<section class="price-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-40"><?php the_field('titulo_planes'); ?></h1>
					<?php the_field('intro_texto'); ?>
				</div>
			</div>
		</div>					
	
		<?php get_template_part( 'parts/content', 'tabla_planes' ); ?>

	</div>	
</section>

<!-- Que no incluye -->
<section class="services-area">
	<div class="container">
		<div class="row d-flex justify-content-center section-gap">
			<div class="col-lg-8">
				<div class="title text-center">
					<h1 class="mb-40"><?php the_field('titulo_sec_no_incluye'); ?></h1>
				</div>
				<!-- Comprobamos el repeater principal -->
				<?php if( have_rows('lista') ): ?>
					<ol class="ordered-list">
						<!-- hacemos el ciclo principal -->
						<?php while( have_rows('lista') ): the_row();
							$item_lista = get_sub_field('item_lista');				
						?>
						<li><span><?php echo $item_lista; ?></span></li>
						<?php endwhile; ?>
					</ol>	
				<?php endif; ?>	
			</div>
		</div>
	</div>
</section>




<!-- Start FAQ Area -->
<section class="faq-area pt-60 pb-60">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-40 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10"><?php the_field('titulo_sec_preguntas'); ?></h1>
					<p><?php the_field('intro_texto_preguntas'); ?></p>
				</div>
			</div>
		</div>						

		<div class="row justify-content-center">
			<div class="col-lg-8">
				<?php get_template_part( 'parts/content', 'faq' ); ?>
       		</div>
		</div>
	</div>	
</section> 

			
<!-- start footer Area -->
<?php get_footer(); ?>