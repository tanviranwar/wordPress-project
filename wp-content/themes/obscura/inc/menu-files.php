<?php
//------Menu register-------*/
function obscura_register_menu() {
  if (function_exists('register_nav_menu')) {
    register_nav_menu('header', __('Header Menu', 'obscura'));
  }
}
add_action('init', 'obscura_register_menu');




 ?>