<?php //шаблон вывода циклом таксономии ?>
<div class="work_containers">
    <div class="work_images">
      <img src="<?php echo get_template_directory_uri();  ?>/images/mabi.jpg" alt="">
    </div>
    <div class="work_central_block">
      <a href="<?php echo get_permalink($query->post->ID ); ?>" class="work_capture"><?php echo get_the_title( $query->post->ID ); ?></a>
      <p class="work_description work_place">Тип организации (Ломбард)</p>
      <p class="work_description">Светлоград, <?php ulica(); ?> <?php adress(); ?></p>
      <?php tel(array('type' => 'category', )); ?>
      <!-- <p class="work_price">30 000 руб.</p> -->
    </div>
    <div class="work_right_block">
      <div class="work_icons_container">
      <?php rejim_raboti(array('type'=>'category', 'day'=> 'small',)); ?>
    <!--<div class="work_icons crown"></div>
        <div class="work_icons star"></div>
        <div class="work_icons up"></div> -->
        <!-- <div class="work_icons square"></div> -->
      </div>
      <!-- <p class="work_description area">работает/закрыто/обед</p> -->
      <!-- <p class="floor_number">18/<span>23</span> эт.</p> -->
      <?php the_date('','<p class="work_description date_placement">добавлено: ','</p>'); ?>
    </div>
</div>