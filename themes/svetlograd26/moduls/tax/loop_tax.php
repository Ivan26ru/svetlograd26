<?php //шаблон вывода циклом таксономии ?>
<div class="work_containers row">
	<!-- миниатюра -->
    <div class="work_images1 img_all_auto_100 col-md-3 col-sm-6 text-center">
    <a href="<?php echo get_permalink($post_id); ?>">
      <?php if ( has_post_thumbnail()) { ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('plashka_index_210'); ?>
   </a>
 <?php }else{ ?>
<img src="https://svetlograd26.ru/wp-content/uploads/2018/10/no_foto-150x150.jpg">
 	<?php } ?>
    </a>
    </div>
    <!-- контакты -->
    <div class="work_central_block1 col-sm-6">
      <a href="<?php echo get_permalink($post_id); ?>" class="work_capture"><?php echo get_the_title( $query->post->ID ); ?></a>
      <!-- <p class="work_description">Тип организации (Ломбард)</p> -->
      <p class="work_description">Светлоград, <?php ulica(); ?> <?php adress(); ?> <?php the_field('adress'); ?></p>
      <?php tel(array('type' => 'category', )); ?>
      <!-- <p class="work_price">30 000 руб.</p> -->
    </div>
    <!-- режим работы -->
    <div class="work_right_block1 col-md-3 d-none d-md-block text-right">
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