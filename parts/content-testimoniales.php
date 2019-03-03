<?php $mostrar_bloque_completo_testimoniales = get_field( 'mostrar_bloque_completo_testimoniales', 'options' ); ?>
<?php if ( $mostrar_bloque_completo_testimoniales == 'si' ) : ?>
	<section class="testimonial-area section-gap">
		<div class="container">
            <div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
                        <h1 class="mb-10"> <?php the_field('titulo_testimoniales', 'option'); ?> </h1>
                        <p> <?php the_field('texto_testimoniales', 'option'); ?> </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">                    
                        <?php                    
                            $args = array (
                                'post_type'              => 'testimoniales',
                                'post_status'            =>'publish',
                                'posts_per_page'         => -1,
                                'nopaging'               => true,
                                'order'                  => 'ASC',
                                'orderby'                => 'date'
                            );
                            $testimoniales = new WP_Query( $args );  
                            while ($testimoniales->have_posts()): $testimoniales->the_post();
                                $nombre = get_the_title();                             
                                $foto = get_field('imagen_profile');
                                $cargo = get_field('cargo');                       
                                $resena = get_the_content();

                                echo '  <div class="single-testimonial item d-flex flex-row"> '; 
                                echo '      <div class="thumb">';
                                echo '          <img class="img-fluid" src="' . $foto .'" alt="' . $nombre . '">';
                                echo '      </div>';
                                echo '      <div class="desc">';
                                echo '          <p>' . $resena . '</p>
                                                <h4>' . $nombre . '</h4>
                                                <p>' . $cargo . '</p>';
                                echo '      </div>'; 
                                echo '  </div>'; 
                            endwhile;
                            wp_reset_postdata();
                        ?>                     
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>