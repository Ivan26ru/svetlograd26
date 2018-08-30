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

// режим работы функция из организаций
// ['day'] сокращенные названия типа пн, вт, ср (по у молчанию длинные то есть понедельник, вторник)
function rejim_raboti($attr = []){
// var_dump($attr);
	// ['day'] короткие или длинные названия true/false
	// ['html'] вывод чистым html для записи clean/single
// Длинныое или короткое название дня
if ($attr['day']??null) {
	$arr_1_7[1]= 'Пн';
	$arr_1_7[2]= 'Вт';
	$arr_1_7[3]= 'Ср';
	$arr_1_7[4]= 'Чт';
	$arr_1_7[5]= 'Пт';
	$arr_1_7[6]= 'Сб';
	$arr_1_7[7]= 'Вс';
} else{
	$arr_1_7[1]= 'Понедельник';
	$arr_1_7[2]= 'Вторник';
	$arr_1_7[3]= 'Среда';
	$arr_1_7[4]= 'Четверг';
	$arr_1_7[5]= 'Пятница';
	$arr_1_7[6]= 'Суббота';
	$arr_1_7[7]= 'Воскресенье';
};

// if ($attr['html']==='clean') {
// 	// чистый код
// 	$arr_html['before']='';//до
// 	$arr_html['after']='';//после
// 	$arr_html['ul_class']='rejim_ul';
// 	$arr_html['li_class']='';
// 	$arr_html['li_before']='Работаетдо: ';
// 	$arr_html['name']='';
// 	$arr_html['value']='';

// }elseif ($attr['html']==='single') {
// 	$arr_html['before']='';//до
// 	$arr_html['after']='';//после
// 	$arr_html['ul_class']='rejim_ul';
// 	$arr_html['li_class']='';
// 	$arr_html['li_before']='Работаетдо: ';
// 	$arr_html['name']='';
// 	$arr_html['value']='';
// };


// Проверяет наличие прозвольного поля
if( have_rows('rejim') ):
	// echo '<div class="rejim">';




if ($attr['html']==='category') {
	// чистый код
	echo '<ul>';

// перебор данного произвольного поля
while( have_rows('rejim') ): the_row();
		// переменные с поля
		$den_s = get_sub_field('den_s');
		$den_do = get_sub_field('den_do');
		$work_s = get_sub_field('work_s');
		$work_do = get_sub_field('work_do');
		$obed_s = get_sub_field('obed_s');
		$obed_do = get_sub_field('obed_do');

	echo '<li>';
if (strlen($work_s)>0) {
	echo $arr_1_7[$den_s] . ' - ' . $arr_1_7[$den_do] . ', время работы: ' . $work_s . ' - ' . $work_do. ', обед: ' . $obed_s . ' - ' . $obed_do;
}elseif($den_s===$den_do){
	echo 'Выходной: ' . $arr_1_7[$den_s];
}else{
	echo 'Выходные: ' . $arr_1_7[$den_s] . ' - ' . $arr_1_7[$den_do];
}
	echo '</li>';
endwhile;
echo '</ul>';


}elseif ($attr['html']==='single') {
	// для записи колонками
		echo '<div class="features"><h4 class="features__title">Режим работы</h4><ul class="features__list">';

// перебор данного произвольного поля
while( have_rows('rejim') ): the_row();
		// переменные с поля
		$den_s = get_sub_field('den_s');
		$den_do = get_sub_field('den_do');
		$work_s = get_sub_field('work_s');
		$work_do = get_sub_field('work_do');
		$obed_s = get_sub_field('obed_s');
		$obed_do = get_sub_field('obed_do');

	echo '<li class="features__item">';
if (strlen($work_s)>0) {
	echo '<span class="features__prop">'
	. $arr_1_7[$den_s]
	. ' - '
	. $arr_1_7[$den_do]
	. '</span><span class="features__value">'
	. $work_s
	. ' - '
	. $work_do
	. '</span></li>'
	. '<li class="features__item"><span class="features__prop">обед:</span><span class="features__value">'
	. $obed_s
	. ' - '
	. $obed_do
	. '</span>';
}elseif($den_s===$den_do){
	echo '<span class="features__prop">Выходной:</span>'
	. '<span class="features__value">' . $arr_1_7[$den_s] . '</span>';
}else{
	echo '<span class="features__prop">Выходные:</span>'
	. '<span class="features__value">' . $arr_1_7[$den_s] . ' - ' . $arr_1_7[$den_do] . '</span>';
}
	echo '</li>';
endwhile;
echo '</ul></div>';

};// category|single

endif;//Проверка наличия произвольного поля
};

?>