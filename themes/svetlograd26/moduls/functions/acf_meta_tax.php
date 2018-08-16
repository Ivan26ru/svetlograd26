<?php
// функции для работы с метаполями acf в таксономиях рубрик

// повторитель описания при наведения на плашку
function slova_plashka($name_tax_cat,$id_tax_cat){
 $rows = get_field( 'tegi_opisanie', $name_tax_cat . '_' . $id_tax_cat);
 // var_dump($rows);
 if($rows)
 {

     foreach($rows as $row)
     {

         echo '<p class="sssa_index_hover_description">' . $row['slovo'] . '</p>';
     }
 }

}

// миниатюра плашки
function url_img_plashka($name_tax_cat,$id_tax_cat){
	$image = get_field( 'img_cat', $name_tax_cat . '_' . $id_tax_cat);
    // $image = get_term_meta('20', 'img_cat',true);
    if( $image ) {
    echo wp_get_attachment_image_url( $image,'plashka_index_210');
    }
}
?>