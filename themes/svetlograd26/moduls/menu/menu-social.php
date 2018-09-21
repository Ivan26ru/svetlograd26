<?php
$args = array(
  'theme_location'  => 'social', // локация меню
  'menu'            => '',
  'container'       => 'div', // контейнер, если нужен
  'container_class' => 'social_networks',
  'container_id'    => '',
  'menu_class'      => '',
  'menu_id'         => '',
  'echo'            => true,
  // 'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s menu_social">%3$s</ul>',
  'depth'           => 0
);

wp_nav_menu( $args );
?>