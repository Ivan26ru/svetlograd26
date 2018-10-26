    <section class="sections">
      <h2 class="caption"><?php single_term_title(); ?></h2>
      <div class="container">
        <?php
          $term = get_queried_object(); // данные элемента текущей таксономии
$args = array(
  // 'post_type' => 'post_organizacii',
  'category_organizacii'=>$term->slug
);
$query = new WP_Query( $args );
if($query->have_posts()) {
	while($query->have_posts()){ $query->the_post();
		$post_id = $query->post->ID;
		include (TEMPLATEPATH . '/moduls/tax/loop_tax.php');
	};

pagination();
// Восстанавливаем оригинальные данные поста
wp_reset_postdata();
};
?>
    </div>
      <!--container-->
    </section>