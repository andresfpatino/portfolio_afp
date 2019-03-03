<!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Sobre mi</h4>
                                <p><?php the_field('texto_footer', 'option'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Información de contacto</h4>
                                <ul>
                                	<li><span class="lnr lnr-smartphone"></span> <?php the_field('telefono', 'option'); ?> </li>
                                	<li><span class="lnr lnr-envelope"></span> <?php the_field('correo_electronico', 'option'); ?> </li>
                                	<li><span class="lnr lnr-map-marker"></span> <?php the_field('direccion', 'option'); ?> </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Redes sociales</h4>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="<?php the_field('github', 'option'); ?>" target="_blank"><i class="fa fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        	<p class="footer-text" style="margin-top: 3em; text-align: center;"><?php the_field('copyright', 'option'); ?></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

        <div class="backTop"><span class="lnr lnr-chevron-up-circle"></span></div>
        
        <?php wp_footer();?>	

		</body>
	</html>