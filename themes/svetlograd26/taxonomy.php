<?php
get_header(); // подключаем header.php
// global $wp_query;
// print_r($wp_query);
// include (TEMPLATEPATH . '/moduls/tax/category_organizacii.php');
$term = get_queried_object(); // данные элемента текущей таксономии
// var_dump($term);
//       object(WP_Term)#11714 (10) {
//   ["term_id"]=>
//   int(38)
//   ["name"]=>
//   string(4) "mira"
//   ["slug"]=>
//   string(4) "mira"
//   ["term_group"]=>
//   int(0)
//   ["term_taxonomy_id"]=>
//   int(38)
//   ["taxonomy"]=>
//   string(5) "ulica"
//   ["description"]=>
//   string(0) ""
//   ["parent"]=>
//   int(0)
//   ["count"]=>
//   int(3)
//   ["filter"]=>
//   string(3) "raw"
// }

          $term = get_queried_object(); // данные элемента текущей таксономии
$args = array(
  // 'post_type' => 'post_organizacii',
  // 'category_organizacii'=>$term->slug
	'taxonomy'=>'ulica',
	'numberposts' => 3,
);

$query = new WP_Query($args);
var_dump($query);
while( $query->have_posts() ) {
  $query->next_post();

// include (TEMPLATEPATH . '/moduls/tax/loop_tax.php');
the_title();
}
pagination();

// Восстанавливаем оригинальные данные поста
wp_reset_postdata();

// pagination();

// wp_reset_postdata();
// Восстанавливаем оригинальные данные поста



// include (TEMPLATEPATH . '/moduls/index/top-organizations.php');
// include (TEMPLATEPATH . '/moduls/index/ads-gorod.php');
get_footer(); // подключаем footer.php
?>