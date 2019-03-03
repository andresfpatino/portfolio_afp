<?php $mostrar_calltoaction = get_field( 'mostrar_calltoaction', 'options' ); ?>
<?php if ( $mostrar_calltoaction == 'si' ) : ?>
<section class="brands-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-9 col-md-9">
                <div class="title">
                    <h1 class="mb-10"> <?php the_field('titulo_calltoaction', 'option'); ?> </h1>
                    <p> <?php the_field('texto_calltoaction', 'option'); ?> </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <a href="<?php the_field('url_boton_calltoaction', 'option'); ?>" class="genric-btn primary-border e-large arrow">
                    <?php the_field('texto_boton_calltoaction', 'option'); ?> <span class="lnr lnr-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>