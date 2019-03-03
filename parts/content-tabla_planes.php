<div class="row">
	<!-- Comprobamos el repeater principal -->
	<?php if( have_rows('tabla_planes') ): ?>
		<!-- hacemos el ciclo principal -->
		<?php while( have_rows('tabla_planes') ): the_row();
			$icono = get_sub_field('icono');
			$nombre_del_plan = get_sub_field('nombre_del_plan');
			$objetivo = get_sub_field('objetivo');	
			$precio = get_sub_field('precio');	
			$link_boton = get_sub_field('link_boton');					
		?>
		<div class="col-lg-3 col-md-6 single-price">
			<div class="top-part">
				<h1 class="package-no"><span class="lnr <?php echo $icono; ?>"></span></span></h1>
				<h4><?php echo $nombre_del_plan; ?></h4>
				<p class="mt-10"><?php echo $objetivo; ?></p>
			</div>
			<!-- Comprobamos el repeater de las caracteristicas -->
			<?php if( have_rows('caracteristica') ): ?>
			<div class="package-list">
				<ul>
					<!-- hacemos el ciclo de las caracteristicas -->
					<?php while( have_rows('caracteristica') ): the_row();
						$agregar_caracteristica = get_sub_field('agregar_caracteristica');				
					?>
						<li><?php echo $agregar_caracteristica; ?></li>
					<?php endwhile; ?>
				</ul>
			</div>						
			<?php endif; ?>
			<div class="bottom-part">
				<h1>$ <?php echo $precio; ?></h1>
				<a class="price-btn text-uppercase" href="<?php echo $link_boton; ?>">Contratar</a>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>																	
</div>