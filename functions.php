<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme css and js 
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// Menu
require_once(get_template_directory().'/functions/menu.php');

// Logo
require_once(get_template_directory().'/functions/custom-logo.php');

// Page Option ACF Pro
require_once(get_template_directory().'/functions/page-options.php'); 

// Disable emoji
require_once(get_template_directory().'/functions/disable-emoji.php');






