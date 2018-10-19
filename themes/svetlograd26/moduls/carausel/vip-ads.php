<?php if( have_rows('vip_publicity', 'option') ): ?> <!-- проверяет , есть ли данные -->
<section class="vip_ads">
      <h2 class="caption">VIP ОБЪЯВЛЕНИЯ</h2>
      <div class="vip_carousel">

        <?php while( have_rows('vip_publicity', 'option') ): the_row(); ?><!-- перебирает данные -->

          <img class="first-slide" src="<?php echo get_sub_field('image')['url'];?>" alt="<?php the_sub_field('description'); ?>">

        <?php endwhile; ?>
      </div>
      <span class="on_the_rights">На правах рекламы</span>
    </section>
<?php endif; ?>
    <!-- /.vip_ads -->