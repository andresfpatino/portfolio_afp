<?php

# --- REGISTRO DE MENUS
function main_menu(){
    register_nav_menus(array(
    'main-menu' => __('Main menu'),
    ));
}
add_action('init', 'main_menu');