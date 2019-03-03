<?php 

/*
Template Name: Página Sobre mi
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

<!-- Start home-about Area -->
<section class="home-about-area section-gap">	
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-lg-9 col-md-9 title text-center">
				<h6>Este soy yo</h6>
				<h1 class="mb-30">Andrés Felipe Patiño</h1>
				<p>¡Me presento! Soy <strong>Andrés Felipe Patiño Vallejo</strong> y soy responsable de <strong>transformar marcas y negocios</strong>, iniciándoles en el mundo online y mejorando su presencia digital. Gracias a un basto conocimiento de Internet, puedo <strong>asesorarte e indicarte la estrategia a seguir</strong>, consiguiendo un <strong>punto de encuentro profesional</strong> para tus usuarios que se traduzca en<strong> tráfico de calidad, visibilidad y ventas</strong>.</p>
				<p>Mi forma de trabajar te hace <strong>partícipe desde el principio</strong> en todo el proceso de diseño y desarrollo de tus activos digitales, ya que sea una <a href="https://ignaciosantiago.com/servicios/diseno-paginas-web-wordpress/" target="_blank" rel="noopener noreferrer">pagina web</a>, <a href="#" target="_blank" rel="noopener noreferrer">blog</a> o <a href="#" target="_blank" rel="noopener noreferrer">tienda online</a>. Trabajaremos juntos para conseguir <strong>un sitio web único y diferencial</strong>, con un <strong>alto rendimiento</strong>, pensado para posicionar en cualquier mercado, por muy competido que esté, y ser atractivo y eficiente.</p>
				<a href="/servicios" class="primary-btn text-uppercase">Conoce los servicios</a>
			</div>
		</div>

		<!-- Habilidades -->
		<?php  get_template_part( 'parts/content', 'habilidades' );  ?>

	</div>	
</section>



			<!-- Start timeline Area -->
<!-- 			<section class="timeline pb-120">
	            <div class="text-center">
	                <div class="menu-content pb-70">
	                    <div class="title text-center">
	                        <h1 class="mb-10">Experiencia</h1>
	                        <p>Who are in extremely love with eco friendly system.</p>
	                    </div>
	                </div>
	            </div>				
			  <ul>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" style="max-width: 169px;" src="https://scontent.fclo5-1.fna.fbcdn.net/v/t1.0-9/10363571_664317350284112_9161258850634845659_n.png?_nc_cat=108&_nc_ht=scontent.fclo5-1.fna&oh=19566d372e8af37f17c04bc1d2aa6e48&oe=5C9B0E8E" alt="">
			        <h4><p>EISO, Estategia e innovación en soluciones web</p></h4>
			        <p><strong>Diseñador Multimedial</strong></p>
			        <p><time>Diciembre 2014 - Actualmente</time></p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="https://kuntur.digital/img/logo.png" alt="">
			        <h4><p>Kuntur Digital</p></h4>
			        <p><strong>Desarrollador WordPress</strong></p>
			        <p><time>Abril 2018 - Octubre 2018</time></p>
			      </div>
			    </li>
			  </ul>
			</section>		 -->

			<!-- End timeline Area -->


<!-- Start testimonial Area -->
<?php  get_template_part( 'parts/content', 'testimoniales' );  ?>


<!-- start footer Area -->
<?php get_footer(); ?>