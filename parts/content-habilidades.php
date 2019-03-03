<?php if( have_rows('sec_habilidades','option') ): ?>
	<div class="row skillbar-wraps pt-60">	
		<div class="col-md-12"><h4><?php the_field('titulo_habilidades', 'option'); ?></h4>	</div>						
		<div class="col-md-12 d-flex flex-wrap justify-content-between">
			<?php while( have_rows('sec_habilidades','option') ): the_row();
				$nombre = get_sub_field('nombre_habilidad','option');
				$porcentaje = get_sub_field('porcentaje','option');					
			?>
			<div class="single-skill">
				<p> <?php echo $nombre; $porcentaje;?>% </p>
				<div class="skill" data-width="<?php echo $porcentaje; ?>"></div>
			</div>
			<?php endwhile; ?>
		</div>				
	</div>
<?php endif; ?>