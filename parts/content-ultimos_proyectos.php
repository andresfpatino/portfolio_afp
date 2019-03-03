<?php $mostrar_bloque_completo_proyectos = get_field( 'mostrar_bloque_completo_proyectos', 'options' ); ?>
<!-- Condicional para mostrar si/no toda la sección -->
<?php if ( $mostrar_bloque_completo_proyectos == 'si' ) : ?>
	<section class="portfolio-area section-gap" id="portfolio">
        <div class="container">
        	<div class="row d-flex justify-content-center">
            	<div class="menu-content pb-70 col-lg-8">
                	<div class="title text-center">
                        <h1 class="mb-10"> <?php the_field('titulo_proyectos', 'option'); ?></h1>
                        <p> <?php the_field('texto_proyectos', 'option'); ?> </p>
                    </div>
                </div>
            </div>    

			<!-- Filtro  -->
			<div class="filters">
	            <ul>
				    <li class="active" data-filter="*">Todos</li>
				 <?php 
					$terms = get_terms("categoria"); // get all categories, but you can use any taxonomy
					$count = count($terms); //How many are they?
					if ( $count > 0 ){  //If there are more than 0 terms
						foreach ( $terms as $term ) {  //for each term:
					 		echo "<li data-filter='.".$term->slug."'>" . $term->name . "</li>\n";
					 		//create a list item with the current term slug for sorting, and name for label
						}
					} 
				 ?>
				</ul>
			</div>

           	<!-- Contenidos proyectos-->
			<?php 
				$args = array (
				   	'post_type'              => 'proyectos',
				    'post_status'            =>'publish',
				    'posts_per_page'         => -1,
				    'order'                  => 'ASC',
				    'orderby'                => 'date'
				);
				$the_query = new WP_Query( $args );
			?>

			<?php if ( $the_query->have_posts() ) : ?>
			<div class="filters-content">
				<div class="row grid">
					<?php 
					  	while ( $the_query->have_posts() ) : $the_query->the_post(); 
							$termsArray = get_the_terms( $post->ID, "categoria" ); 
							$termsString = ""; 

						foreach ( $termsArray as $term ) { 
							$termsString .= $term->slug.' '; 
						}
					?> 

					<div class="single-portfolio col-sm-4 all <?php echo $termsString; ?>">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>				
								<?php if ( has_post_thumbnail() ) { 
								    the_post_thumbnail('', array('class' => 'image img-fluid')); 
								} ?>
							</div> 
							<a href="#">
					            <div class="middle">
						            <div class="text align-self-center d-flex">
						            	<img src=" <?php echo get_template_directory_uri() ?>/img/preview.png">
						            </div> 
								</div> 
							</a>
						</div>
						<div class="p-inner">
							<h4><?php echo get_the_title(); ?></h4>
							<div class="cat"> <?php echo $term->name; ?></div>
						</div>
					</div> 

					<?php endwhile;  ?>
				</div>
			</div>
			<?php endif; ?>
        </div>
    </section> 
<?php endif; ?>