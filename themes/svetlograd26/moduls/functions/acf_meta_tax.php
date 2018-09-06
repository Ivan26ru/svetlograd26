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
			// перебор данного произвольного поля
			while( have_rows('tel_repeat') ): the_row();
				$tel = get_sub_field('tel');
				$tel_text = $tel;
				$tel_number = $tel;
				if (iconv_strlen($tel)===5) {
					$tel_text='8(86547)' . $tel;
					$tel_number='886547' . $tel;
				};
				echo '<a href="tel:'. $tel_number.'">' . $tel_text . '</a><br>';
			endwhile;
		endif;//Проверка наличия произвольного поля

	}elseif($attr['type']==='post'){

			// Проверяет наличие прозвольного поля
		if( have_rows('tel_repeat') ):
		$nomer=1;
			// перебор данного произвольного поля
			while( have_rows('tel_repeat') ): the_row();
				echo '<li class="features__item"><span class="features__prop">Телефон';
				if ($nomer>1) {
					echo ' '.$nomer;
				};
				 ++$nomer;
				echo '</span><span class="features__value">';

				$tel = get_sub_field('tel');
				$tel_text = $tel;
				$tel_number = $tel;
				if (iconv_strlen($tel)===5) {
					$tel_text='8(86547)' . $tel;
					$tel_number='886547' . $tel;
				};
				echo '<a href="tel:'. $tel_number.'">' . $tel_text . '</a>';
				echo '</span></li>';
			endwhile;
		endif;//Проверка наличия произвольного поля
	};//условие выбора режима
};

// вывод улицы
function ulica(){
	$cur_terms = get_the_terms( $post->ID, 'ulica' );
	foreach( $cur_terms as $cur_term ){
	  echo '<a href="'. get_term_link( (int)$cur_term->term_id, $cur_term->taxonomy ) .'">'. $cur_term->name .'</a>,';
	}
}

// вывод адреса без улицы, то есть //дом 5 кв 7
function adress(){
$acf_adress=get_field('adress');
echo $acf_adress;
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

// Проверяет наличие прозвольного поля
if( have_rows('rejim') ):

if ($attr['type']==='category') {
	// чистый код
	echo '<ul class="rejim_category">';

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
		echo $arr_1_7[$den_s] . ' - ' . $arr_1_7[$den_do] . ': ' . $work_s . ' - ' . $work_do. '</li><li>обед: ' . $obed_s . ' - ' . $obed_do;
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

};// category|post

endif;//Проверка наличия произвольного поля
};

?>