<?php

        if( function_exists('acf_add_options_page') ) {
            
           acf_add_options_page(array(
                'page_title' 	=> 'Opciones de tema',
                'menu_title'	=> 'Opciones de tema',
                'menu_slug' 	=> 'opciones-de-tema',
                'capability'	=> 'edit_posts',
                'icon_url' 		=> 'dashicons-tagcloud',
            ));
                    
        }

?>