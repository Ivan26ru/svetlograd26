<?php 
// вывод плашек на главной для таксономии
function fareach_tax_cat_index($tax_slug){
	$all_categories = get_categories('taxonomy='.$tax_slug);

	foreach( $all_categories as $single_cat ){?>
	          <div class="col-6 col-md-3 col-sm-4">
	            <div class="sssa">
	              <img class="sssa_images" src="<?php url_img_plashka($single_cat->taxonomy,$single_cat->term_id);?>" alt="">

	              <div class="sssa_description_block">
	                <p class="sssa_description"><?php echo $single_cat->name; ?></p>
	              </div>
	              <a href="<?php echo get_term_link($single_cat->term_id,$single_cat->taxonomy); ?>" class="sssa_hover">
	              	<?php slova_plashka($single_cat->taxonomy,$single_cat->term_id); ?>
	              </a>
	            </div>
	          </div>
	        <!-- /.row ads_sections -->
		<?php 
	}
}
 ?>