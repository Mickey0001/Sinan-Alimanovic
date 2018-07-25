<?php 

//Register Nav Walker class_alias
require_once('class-wp-bootstrap-navwalker.php');

//Theme setup
function sinan_theme_setup()
{
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'sinan_theme_setup');

?>