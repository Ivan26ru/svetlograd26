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

while( $query->have_posts() ) {
  $query->next_post();
?>

        <div class="work_containers">
            <div class="work_images">
              <img src="<?php echo get_template_directory_uri();  ?>/images/mabi.jpg" alt="">
            </div>
            <div class="work_central_block">
              <a href="<?php echo get_permalink($query->post->ID ); ?>" class="work_capture"><?php echo get_the_title( $query->post->ID ); ?></a>
              <p class="work_description work_place">Тип организации (Ломбард)</p>
              <p class="work_description work_education">Режим работы: вт-чт 8.00-16.00 пт 8.00-12.00 сб-вс выходной, обед 12.00-13.00</p>
              <p class="work_description work_subway">ул. Пушкина, дом 12</p>
              <!-- <p class="work_price">30 000 руб.</p> -->
            </div>
            <div class="work_right_block">
              <div class="work_icons_container">
<!--                 <div class="work_icons crown"></div>
                <div class="work_icons star"></div>
                <div class="work_icons up"></div> -->
                <div class="work_icons square"></div>
              </div>
              <p class="work_description area">работает/закрыто/обед</p>
              <p class="floor_number">18/<span>23</span> эт.</p>
              <p class="work_description date_placement">сегодня 16:39</p>
            </div>
        </div>

<?php
}
// Восстанавливаем оригинальные данные поста
wp_reset_postdata();
?>
        <nav class="pagination_block" aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">&laquo;</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">&raquo;</a>
            </li>
          </ul>
        </nav>
      </div>
      <!--container-->
    </section>
