<?php
get_header(); // подключаем header.php
// include (TEMPLATEPATH . '/moduls/index/ads-cat.php');
// include (TEMPLATEPATH . '/moduls/carausel/vip-ads.php');
?>
<div class="sections">
	<h2 class="caption"><?php the_title(); ?></h2>
	<!-- <div class="container"> -->
		<!-- <div class="row"> -->
			<?php the_content(); ?>
		<!-- </div> -->
	<!-- </div> -->
</div>
<?php
// include (TEMPLATEPATH . '/moduls/index/top-organizations.php');
include (TEMPLATEPATH . '/moduls/carausel/partners.php');
// include (TEMPLATEPATH . '/moduls/index/vibor-nas-100.php');
// include (TEMPLATEPATH . '/moduls/index/ads-gorod.php');
get_footer(); // подключаем footer.php
?>