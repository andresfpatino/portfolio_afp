<?php if( have_rows('num_cifra','option') ): ?>
	<section class="facts-area section-gap" id="facts-area">
		<div class="container">             
	        <div class="row">
				<?php while( have_rows('num_cifra','option') ): the_row();
					$numero = get_sub_field('numero','option');
					$etiqueta = get_sub_field('etiqueta','option');					
				?>
				<div class="col-lg-3 col-md-6 single-fact">
					<h1 class="counter"><?php echo $numero; ?></h1>
					<p><?php echo $etiqueta; ?></p>	
				</div>
				<?php endwhile; ?>
	        </div>
	    </div>  
	</section> 
<?php endif; ?>