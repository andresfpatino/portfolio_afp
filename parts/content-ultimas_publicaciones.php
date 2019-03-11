<?php $mostrar_sec_blog = get_field( 'mostrar_sec_blog', 'options' ); ?>
<?php if ( $mostrar_sec_blog == 'si' ) : ?>
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1> <?php the_field('titulo_sec_blog', 'option'); ?> </h1>
                <p> <?php the_field('texto_sec_blog', 'option'); ?> </p>
            </div>
        </div>
        <div class="row"> 
            <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status'            =>'publish',
                    'posts_per_page' => 3,
                    'order'                  => 'DESC',
                    'orderby'                => 'date'
                );
                $post_query = new WP_Query($args);
                if($post_query->have_posts() ) {
                  while($post_query->have_posts() ) {
                    $post_query->the_post();
            ?>

            <div class="single-recent-blog col-lg-4 col-md-4">
                <div class="thumb">                    
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('blog_thumbnail' , array('class' => 'f-img img-fluid mx-auto'));
                    } else { ?>
                        <img class="f-img img-fluid mx-auto" src="<?php bloginfo('template_directory'); ?>/img/default_post.jpg" alt="<?php the_title(); ?>" />
                    <?php } ?>                    
                </div>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div class="meta">                                  
                        <span class="lnr lnr-clock"></span> <?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?>
                    </div>
                    <div>
                        <span class="lnr lnr-tag"></span> <?php the_category(', '); ?>                        
                    </div>
                </div>                          
                <a href="<?php the_permalink(); ?>"> <h4><?php the_title(); ?></h4> </a>
                <?php the_excerpt(); ?>
            </div>
            <?php
                  }
                }
            ?>
        </div>
    </div>  
</section>
<?php endif; ?>