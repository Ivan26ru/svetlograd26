<?php if( have_rows('our_partners', 'option') ): ?> <!-- проверяет , есть ли данные -->
    <section class="sections">
      <h2 class="caption">НАШИ ПАРТНЁРЫ</h2>
      <div class="multiple-items">


	 <?php while( have_rows('our_partners', 'option') ): the_row(); ?><!-- перебирает данные -->

        <div><img src="<?php echo get_sub_field('image')['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('description'); ?>"></div><!-- выводит -->

    <?php endwhile; ?>


      </div>
      <a href="#" class="our_parters_button">Все партнёры</a>
    </section>
    <!-- /.sections -->
<?php endif; ?>


    
