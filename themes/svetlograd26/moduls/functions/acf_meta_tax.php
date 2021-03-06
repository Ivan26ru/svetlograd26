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

// вывод прочих данных
function acf_other($attr = []){
	$acf_name='dop_info';// название произвольного поля
	$sub_field_1='name';
	$sub_field_2='value';

	// выбор режима
	if ($attr['type']==='category') {
	// Проверяет наличие прозвольного поля
		if( have_rows($acf_name) ):
		$nomer=0;
			// перебор данного произвольного поля
			while( have_rows($acf_name) ): the_row();
				$field1 = get_sub_field($sub_field_1);
				$field2 = get_sub_field($sub_field_2);
			endwhile;
		endif;//Проверка наличия произвольного поля

	}elseif($attr['type']==='post'){

			// Проверяет наличие прозвольного поля
		if( have_rows($acf_name) ):
			echo '<div class="features"><h4 class="features__title">Дополнительная информация</h4><ul class="features__list">';
			// перебор данного произвольного поля
			while( have_rows($acf_name) ): the_row();
				$field1 = get_sub_field($sub_field_1);
				$field2 = get_sub_field($sub_field_2);
				echo '<li class="features__item"><span class="features__prop">'.$field1 . '</span><span class="features__value">'. $field2 . '<span></li>';
			endwhile;
			echo '</ul></div>';
		endif;//Проверка наличия произвольного поля
	};//условие выбора режима
};


// вывод телефона
function tel($attr = []){
	// выбор режима
	if ($attr['type']==='category') {
	// Проверяет наличие прозвольного поля
		if( have_rows('tel_repeat') ):
		$nomer=0;
		echo '<p class="tel_a_category">';

			// перебор данного произвольного поля
			while( have_rows('tel_repeat') ): the_row();
				$tel = get_sub_field('tel');

				if ($nomer>0) {
					echo ", ";
				};

				$nomer++;
				echo '<a href="tel:'
				. phone_read($tel,"number")
				. '" class="tel_a_category">'
				. phone_read($tel,"text")
				. '</a>';
			endwhile;
			echo '</p>';
		endif;//Проверка наличия произвольного поля

	}elseif($attr['type']==='post'){

			// Проверяет наличие прозвольного поля
		if( have_rows('tel_repeat') ):
		$nomer=1;//счетчик

			// перебор данного произвольного поля
			while( have_rows('tel_repeat') ): the_row();
				$tel = get_sub_field('tel');

				echo '<li class="features__item"><span class="features__prop">Телефон';

				if ($nomer>1) {
					echo ' '.$nomer;
				};
				 ++$nomer;

				echo '</span><span class="features__value">'
				. '<a href="tel:'
				. phone_read($tel,"number")
				. '">'
				. phone_read($tel,"text")
				. '</a>'
				. '</span></li>';
			endwhile;
		endif;//Проверка наличия произвольного поля
	};//условие выбора режима
};

// вывод улицы
function ulica(){
	$cur_terms = get_the_terms( $post->ID, 'ulica' );
	foreach( $cur_terms as $cur_term ){
	  // echo '<a href="'. get_term_link( (int)$cur_term->term_id, $cur_term->taxonomy ) .'">'. $cur_term->name .'</a>,';
	  echo $cur_term->name .', ';
	}
};

// вывод адреса без улицы, то есть //дом 5 кв 7
function adress(){
	$acf_adress=get_field('adress');
	echo  $acf_adress;
};

// миниатюра плашки
function url_img_plashka($name_tax_cat,$id_tax_cat){
	$image = get_field( 'img_cat', $name_tax_cat . '_' . $id_tax_cat);
    // $image = get_term_meta('20', 'img_cat',true);
    if( $image ) {
    echo wp_get_attachment_image_url( $image,'plashka_index_210');
    }
};


// режим работы функция из организаций
// ['day'] сокращенные названия типа пн, вт, ср (по у молчанию длинные то есть понедельник, вторник)
function rejim_raboti($attr = []){
// var_dump($attr);
	// ['day'] короткие или длинные названия true/false
	// ['type'] вывод чистым html для записи clean/post
// Длинныое или короткое название дня
if ($attr['day']==='small') {
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

// функция проверки на разность значений
// function ifraznost($vol1, $vol2, $text){
// 	// var $itog='';//итоговое значение
// 	if ($vol1===$vol2) {
// 		$itog=$vol1;
// 	} else {
// 		$itog= $vol1 . $text . $vol2;
// 	};
// 	// return $itog;
// 	return $vol1 . $text . $vol2;
// };


// Проверяет наличие прозвольного поля
if( have_rows('rejim') ):

if ($attr['type']==='category') {
	// чистый код
	echo '<ul class="rejim_category">';

	// перебор данного произвольного поля
	while( have_rows('rejim') ): the_row();
			// переменные с поля
			// день
			$den_s = get_sub_field('den_s');
			$den_do = get_sub_field('den_do');
			if($den_s===$den_do){
				$den = $arr_1_7[$den_s];
			}else{
				$den = $arr_1_7[$den_s] . ' - '	. $arr_1_7[$den_do];
			};
			// время работы
			$work_s = get_sub_field('work_s');
			$work_do = get_sub_field('work_do');
			// обед
			$obed_s = get_sub_field('obed_s');
			$obed_do = get_sub_field('obed_do');
			if (strlen($obed_s)>0) {
				$obed=$obed_s . ' - ' . $obed_do;
			}else{
				$obed='без обеда';
			};

		echo '<li>';
	if (strlen($work_s)>0) {
		echo $den . ': ' . $work_s . ' - ' . $work_do. '</li><li>обед: ' . $obed ;
	}elseif($den_s===$den_do){
		echo 'выходной: ' . $arr_1_7[$den_s];
	}else{
		echo 'выходные: ' . $arr_1_7[$den_s] . ' - ' . $arr_1_7[$den_do];
	}
		echo '</li>';
	endwhile;
	echo '</ul>';

}elseif ($attr['type']==='post') {
	// для записи колонками
		echo '<div class="features"><h4 class="features__title">Режим работы</h4><ul class="features__list">';

	// перебор данного произвольного поля
	while( have_rows('rejim') ): the_row();
			// переменные с поля
			// день
			$den_s = get_sub_field('den_s');
			$den_do = get_sub_field('den_do');

			if($den_s===$den_do){
				$den = $arr_1_7[$den_s];
			}else{
				$den = $arr_1_7[$den_s] . ' - '	. $arr_1_7[$den_do];
			};

			// время работы
			$work_s = get_sub_field('work_s');
			$work_do = get_sub_field('work_do');
			// обед
			$obed_s = get_sub_field('obed_s');
			$obed_do = get_sub_field('obed_do');
			if (strlen($obed_s)>0) {
				$obed=$obed_s . ' - ' . $obed_do;
			}else{
				$obed='без обеда';
			};

		echo '<li class="features__item">';
	if (strlen($work_s)>0) {//если заполнено время работы
		echo '<span class="features__prop">'
		. $den
		. '</span><span class="features__value">'
		. $work_s
		. ' - '
		. $work_do
		. '</span></li>'
		. '<li class="features__item"><span class="features__prop">обед:</span><span class="features__value">'
		. $obed
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

};// category|post

endif;//Проверка наличия произвольного поля
};//.rejim_raboti

?>