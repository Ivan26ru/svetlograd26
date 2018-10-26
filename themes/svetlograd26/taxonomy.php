<?php
get_header(); // подключаем header.php
// global $wp_query;
// print_r($wp_query);
// include (TEMPLATEPATH . '/moduls/tax/category_organizacii.php');

          // $term = get_queried_object(); // данные элемента текущей таксономии
//           var_dump($term);

          // дамп функции get_queried_object()
// object(WP_Term)#11759 (10) {
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
$term_slug = $term->slug;
$term_taxonomy = $term->taxonomy;
var_dump($term_slug);
var_dump($term_taxonomy);

$args = array(
  // 'post_type' => 'post_organizacii',
  // 'category_organizacii'=>$term->slug
	// 'taxonomy'=>'ulica',
	// 'numberposts' => 3,
	'post_type'      => 'post_organizacii',
  	'posts_per_page' => 10,
  	'tax_query'      =>
    array(
      'taxonomy' => $term_taxonomy,
      // 'field'    => 'slug',
      'terms'    => $term_slug,
    ),
);



$query = new WP_Query($args);
// var_dump($query);
while( $query->have_posts() ) {
	$query->the_post();
echo "<hr>";
	// include (TEMPLATEPATH . '/moduls/tax/loop_tax.php');
	the_title();
};

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