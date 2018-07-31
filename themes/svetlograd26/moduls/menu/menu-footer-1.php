<?php
// И там, где нужно выводим меню так:

$args = array(
	'theme_location' => 'footer-1',
    'container' => '',
    'items_wrap' => '%3$s',
	'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
 
);
wp_nav_menu( $args );


?>