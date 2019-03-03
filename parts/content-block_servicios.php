<section class="services-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content  col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10"><?php the_field('titulo_servicios', 'option'); ?></h1>
                    <p><?php the_field('texto_servicios', 'option'); ?></p>
                </div>
            </div>
        </div>   

        <?php $mostrar_bloques_de_servicios = get_field( 'mostrar_bloques_de_servicios', 'options' ); ?>
        <?php if ( $mostrar_bloques_de_servicios == 'si' ) : ?>
            <div class="row">
                <?php                    
                    $args = array (
                        'post_type'              => 'servicios',
                        'post_status'            =>'publish',
                        'posts_per_page'         => -1,
                        'nopaging'               => true,
                        'order'                  => 'ASC',
                        'orderby'                => 'date'
                    );

                    $servicios = new WP_Query( $args );  

                    while ($servicios->have_posts()): $servicios->the_post();
                        $icono = get_field('icono');
                        $link = get_permalink();
                        $titulo = get_the_title();
                        $excerpt = get_the_excerpt();

                        echo '  <div class="col-lg-4 col-md-6"> ';
                        echo '      <div class="single-services">';
                        echo '          <span class="lnr ' . $icono .  '"></span>';
                        echo '          <a href=" ' . $link . ' "><h4>' . $titulo . '</h4></a>';
                        echo '          <p> ' . $excerpt . '</p>';
                        echo '      </div>
                                </div>'; 
                    endwhile;

                    wp_reset_postdata();
                ?> 
            </div>
        <?php endif; ?>        
    </div>  
</section> 