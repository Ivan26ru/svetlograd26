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
              <ul class="info_list">
                <li><span class="info_name">name01</span><span class="info_value">value001</span></li>
                <li><span class="info_name">name02</span><span class="info_value">value002</span></li>
                <li><span class="info_name">name03</span><span class="info_value">value003</span></li>
                <li><span class="info_name">name04</span><span class="info_value">value004</span></li>
                <li><span class="info_name">name05</span><span class="info_value">value005</span></li>
                <li><span class="info_name">name06</span><span class="info_value">value006</span></li>
                <li><span class="info_name">name07</span><span class="info_value">value007</span></li>
                <li><span class="info_name">name08</span><span class="info_value">value008</span></li>
                <li><span class="info_name">name09</span><span class="info_value">value009</span></li>
                <li><span class="info_name">name10</span><span class="info_value">value010</span></li>
              </ul>
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
              <div class="row">
                <div class="col-6">
                  <p class="the_flat_capture">Квартира</p>
                  <p class="the_flat_description">Количество комнат <span class="gray_line">_________________</span></p>
                  <p class="the_flat_description">Этаж <span class="gray_line">_________________________________</span></p>
                  <p class="the_flat_description">Общая площадь <span class="gray_line">____________________</span></p>
                  <p class="the_flat_description">Площадь кухни <span class="gray_line">_____________________</span></p>
                  <p class="the_flat_description">Жилая площадь <span class="gray_line">____________________</span></p>
                  <p class="the_flat_description">Санузел <span class="gray_line">_____________________________</span></p>
                  <p class="the_flat_description">Балкон <span class="gray_line">______________________________</span></p>
                  <p class="the_flat_capture">Дом</p>
                  <p class="the_flat_description">Тип здания <span class="gray_line">_________________________</span></p>
                  <p class="the_flat_description">Серия здания <span class="gray_line">_______________________</span></p>
                  <p class="the_flat_description">Год постройки <span class="gray_line">______________________</span></p>
                  <p class="the_flat_description">Лифт <span class="gray_line">_________________________________</span></p>
                  <p class="the_flat_description">Жилой комплекс <span class="gray_line">____________________</span></p>
                </div>
                <div class="col-6">
                  <p class="the_flat_capture">&nbsp;</p>
                  <p class="the_flat_description">3</p>
                  <p class="the_flat_description">5 из 23</p>
                  <p class="the_flat_description">63,4 м<sup>2</sup></p>
                  <p class="the_flat_description">11 м<sup>2</sup></p>
                  <p class="the_flat_description">48 м<sup>2</sup></p>
                  <p class="the_flat_description">раздельный</p>
                  <p class="the_flat_description">да</p>
                  <p class="the_flat_capture">&nbsp;</p>
                  <p class="the_flat_description">монолитное</p>
                  <p class="the_flat_description">индивидуальный проект</p>
                  <p class="the_flat_description">2013</p>
                  <p class="the_flat_description">да</p>
                  <p class="the_flat_description">Андреевский</p>
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