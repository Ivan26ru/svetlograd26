    <section class="sections">
      <h2 class="caption">РАЗДЕЛЫ ОБЪЯВЛЕНИЙ</h2>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <p class="all_announcements">
              Все обьявления в Москве / Недвижимость / Квартиры /
              <span class="gray">Однокомнатные</span>
            </p>
            <h3 class="buy_apartments">
              <span><?php the_title(); ?></span>
              <!-- <span class="buy_apartments_right">3 500 000 руб.</span> -->
            </h3>
            <?php
$images = get_field('foto_all');

if( $images ): ?>
    <div class="the_flat_slider-for">
        <?php foreach( $images as $image ): ?>
                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php

if( $images ): ?>
    <div class="the_flat_slider-nav">
        <?php foreach( $images as $image ): ?>
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endforeach; ?>
    </div>
<?php endif; ?>
            <!-- <div class="tel">+1 234 567 8900</div> -->
            <!-- <div class="write_message">Написать сообщение</div> -->
            <p class="flat_description"><?php the_content(); ?>
            </p>
            <div class="container">
            <div class="row">
            	<div class="features">
  <h4 class="features__title">Квартира</h4>
  <ul class="features__list">
    <li class="features__item">
      <span class="features__prop">Количество комнат</span>
      <span class="features__value">3</span>
    </li>
    <li class="features__item">
      <span class="features__prop">Этаж</span>
      <span class="features__value">5 из 23</span>
    </li>
    <li class="features__item">
      <span class="features__prop">Общая площадь</span>
      <span class="features__value">63,4 м<sup>2</sup></span>
    </li>
    <li class="features__item">
      <span class="features__prop">Площадь кухни</span>
      <span class="features__value">11 м<sup>2</sup></span>
    </li>
    <li class="features__item">
      <span class="features__prop">Жилая площадь</span>
      <span class="features__value">48 м<sup>2</sup></span>
    </li>
    <li class="features__item">
      <span class="features__prop">Санузел</span>
      <span class="features__value">раздельный</span>
    </li>
    <li class="features__item">
      <span class="features__prop">Балкон</span>
      <span class="features__value">да</span>
    </li>
  </ul>
</div>

              <div class="rejim">
              	<?php if( have_rows('rejim') ): ?>

	<ul class="rejim_ul">

<?php
$arr_1_7[1]= 'Понедельник';
$arr_1_7[2]= 'Вторник';
$arr_1_7[3]= 'Среда';
$arr_1_7[4]= 'Четверг';
$arr_1_7[5]= 'Пятница';
$arr_1_7[6]= 'Суббота';
$arr_1_7[7]= 'Воскресенье';
?>
	<?php while( have_rows('rejim') ): the_row();

		// vars
		$den_s = get_sub_field('den_s');
		$den_do = get_sub_field('den_do');
		$work_s = get_sub_field('work_s');
		$work_do = get_sub_field('work_do');
		$obed_s = get_sub_field('obed_s');
		$obed_do = get_sub_field('obed_do');
echo '<li>';
if (strlen($work_s)>0) {
	echo 'Работает: ' . $arr_1_7[$den_s] . ' - ' . $arr_1_7[$den_do] . ', время работы: ' . $work_s . ' - ' . $work_do. ', обед: ' . $obed_s . ' - ' . $obed_do;
}elseif($den_s===$den_do){
	echo 'Выходной: ' . $arr_1_7[$den_s];

}else{
	echo 'Выходные: ' . $arr_1_7[$den_s] . ' - ' . $arr_1_7[$den_do];

}

echo '</li>';
		?>


	<?php endwhile; ?>

	</ul>

<?php endif; ?>
              </div>
            </div>
            </div>
          </div>

          <div class="col-12 col-lg-4">
            <section class="vip_ads_flats">
              <h2 class="vip_ads_caption">VIP ОБЪЯВЛЕНИЯ</h2>
              <div class="vip_flats">
                <div class="vip_slide_1">
                  <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide1.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide2.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide3.jpg" alt="">
                </div>
                <div class="vip_slide_2">
                  <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide3.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide1.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide2.jpg" alt="">
                </div>
              </div>
              <!-- слайдер для адаптива -->
              <div class="vip_flats2">
                <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide1.jpg" alt="">
                <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide2.jpg" alt="">
                <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide3.jpg" alt="">
                <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide1.jpg" alt="">
                <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide2.jpg" alt="">
                <img src="<?php echo get_template_directory_uri();  ?>/images/flats_slide3.jpg" alt="">
              </div>
            </section>
            <!-- /.vip_ads -->
          </div>
        </div>
        <!-- /.row -->

    </section>