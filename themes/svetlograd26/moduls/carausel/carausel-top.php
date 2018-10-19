<?php if( have_rows('publicity', 'option') ): ?> <!-- проверяет , есть ли данные -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <?php 
      $raz=true;

      while( have_rows('publicity', 'option') ): the_row(); ?><!-- перебирает данные -->

        <div class="carousel-item <?php if($raz){echo 'active';$raz=false;}; ?>">

          <img class="first-slide" src="<?php echo get_sub_field('image')['url'];?>" alt="<?php the_sub_field('description'); ?>">


          <div class="container">
            <div class="telephone">
              <p><?php echo get_sub_field('description');?></p> <!--описание-->
              <!-- <i class="fa fa-phone" aria-hidden="true"></i> -->
              <!-- <a href="tel:+996312512095">+996 312 512095</a> -->
            </div>
          </div>
        </div>

      <?php endwhile; ?>
   
    </div>


      <div class="controllers">

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i><!--КНОПКА НАЗАД-->
        </a>
        <!--Индикаторы-->
        <ol class="carousel-indicators">
          <?php $raz=true; $N=0;
           while( have_rows('publicity', 'option') ): the_row(); ?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $N++; ?>" class="<?php if($raz){echo 'active';$raz=false;}; ?>"></li>
          
          <?php endwhile; ?>
        </ol>

        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i><!--КНОПКА ВПРЕРЁД-->
        </a>
        <span class="on_the_rights">На правах рекламы</span>
      </div>

<?php endif; ?>
    <!-- end myCarousel-->