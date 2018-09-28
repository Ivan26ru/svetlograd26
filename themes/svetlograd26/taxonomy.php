<?php
get_header(); // подключаем header.php

// include (TEMPLATEPATH . '/moduls/tax/category_organizacii.php');
var_dump($term);
$term = get_queried_object(); // данные элемента текущей таксономии
$args = array(
  // 'post_type' => 'post_organizacii',
  // 'category_organizacii'=>$term->slug
);

$query = new WP_Query( $args );

while( $query->have_posts() ) {
  $query->next_post();

the_title();
}
pagination();

// Восстанавливаем оригинальные данные поста
wp_reset_postdata();



// include (TEMPLATEPATH . '/moduls/index/top-organizations.php');
// include (TEMPLATEPATH . '/moduls/index/ads-gorod.php');
get_footer(); // подключаем footer.php
?>