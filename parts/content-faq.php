<!-- Comprobamos el repeater principal -->
<?php if( have_rows('faq') ): ?>
	<dl class="accordion">
		<!-- hacemos el ciclo principal -->
		<?php while( have_rows('faq') ): the_row();
			$titulo = get_sub_field('titulo_pregunta');	
			$respuesta = get_sub_field('respuesta_pregunta');				
		?>

		<dt> <a href=""> <?php echo $titulo; ?> </a> </dt>
		<dd> <?php echo $respuesta; ?> </dd>

		<?php endwhile; ?>	

	</dl>
<?php endif; ?>	