    <section class="sections">
      <h2 class="caption">РАЗДЕЛЫ ОБЪЯВЛЕНИЙ</h2>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
              <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
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
  <h4 class="features__title">Данные организации</h4>
  <ul class="features__list">
    <li class="features__item">
      <span class="features__prop">Адрес</span>
      <span class="features__value">Светлоград,<br><?php ulica(); ?><br><?php adress(); ?></span>
    </li>
<?php tel(); ?>
  </ul>
</div>
<?php rejim_raboti(array('html'=>'single', )); ?>
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