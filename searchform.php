<?php
/**
 * The template for displaying search form
 */
 ?>


<div class="search-widget">
	<form class="search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">				
		<input type="text" placeholder="Buscar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar'" value="<?php echo get_search_query() ?>" name="s" />
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
</div>