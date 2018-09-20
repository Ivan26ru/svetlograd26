<?php


// функция превращает любое числов в строку формата XX-XX-... или XXX-XX-XX-... в зависимости от четности кол-ва цифр
function phone_read($phone,$type=''){
	if (strlen($phone)==5) {
		// echo "из 5 символов";
		$patterns_text = '/(\d{1})(\d{2})(\d{2})/';
		$replace_text = '$1-$2-$3';
		$phone_text = '+786547'.$phone;

		$phone_number = preg_replace ($patterns_number, $replace_number, $phone);

	}elseif (strlen($phone)<=12) {
		// echo "из 11 или 12 символов";
		$patterns_text = '/(8|\+7){1}(\d{3})(\d{3})(\d{2})(\d{2})/';
		$replace_text = '8($2)$3-$4-$5';
		$phone_text = preg_replace ($patterns_text, $replace_text, $phone);

		$patterns_number = '/(^8)/';
		$replace_number = '+7';
		$phone_number = preg_replace ($patterns_number, $replace_number, $phone);
	}


if ($type==='number') {
		$number=$phone_number;
	}elseif ($type==='text') {
		$number=$phone_text;
};
	return $number;

};

?>