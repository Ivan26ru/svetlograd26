<?php


// функция превращает любое числов в строку формата XX-XX-X или X-XXX-XXX-XX-XX в читабельный и цифровой формат
function phone_read($phone,$type=''){
// $phone номер телефона
// $type тип вывода:
	// number: +71231234545
	// text: 8(123) 123-45-45
	if (strlen($phone)==5) {
		// echo "из 5 символов";
		$patterns_text = '/(\d{1})(\d{2})(\d{2})/';
		$replace_text = '$1-$2-$3';
		$phone_text = '8(86547) ' . preg_replace ($patterns_text, $replace_text, $phone);

		$phone_number = '+786547'.$phone;

	}elseif (strlen($phone)<=12) {
		// echo "из 11 или 12 символов";
		$patterns_text = '/(8|\+7){1}(\d{3})(\d{3})(\d{2})(\d{2})/';
		$replace_text = '8($2) $3-$4-$5';
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