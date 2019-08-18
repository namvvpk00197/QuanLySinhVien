<?php 
function stripUnicode($str){
	if(!$str) return false;
	$unicode = array(
		'a'=>'á|à|ả|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|ã|â|ầ|ấ|ẩ|ẫ|ậ',
		'A'=>'À|Á|Ả|Ã|Ạ|Ă|Ằ|Ắ|Ẳ|Ẵ|Ặ|Â|Ầ|Ấ|Ẩ|Ẫ|Ậ',
		'D'=>'Đ',
		'd'=>'đ',
		'e'=>'è|é|ẻ|ẽ|ẹ|ê|ề|ế|ể|ễ|ệ',
		'Ê'=>'È|É|Ẻ|Ẽ|Ẹ|Ề|Ế|Ể|Ễ|Ệ|Ê',
		'I'=>'Ì|Í|Ỉ|Ĩ|Ị',
		'i'=>'ì|ỉ|ĩ|ị',
		'o'=>'ò|ó|ỏ|õ|ọ|ô|ồ|ố|ổ|ỗ|ộ|ơ|ờ|ớ|ở|ỡ|ợ',
		'O'=>'Ò|Ó|Ỏ|Õ|Ọ|Ô|Ồ|Ố|Ổ|Ỗ|Ộ|Ơ|Ờ|Ớ|Ở|Ỡ|Ợ',
		'U'=>'Ù|Ú|Ủ|Ũ|Ụ|Ừ|Ứ|Ử|Ữ|Ự',
		'u'=>'ù|ú|ủ|ũ|ụ|ừ|ứ|ử|ữ|ự',
		'y'=>'ỳ|ý|ỷ|ỹ|ỵ',
		'Y'=>'Ỳ|Ý|Ỷ|Ỹ|Ỵ',
		
	);
	foreach($unicode as $khongdau=>$codau){
		$arr = explode("|",$codau);
		$str = str_replace($arr, $khongdau, $str);
	}
	return($str);
}
function changeTitle($str){
	$str=trim($str);
	if($str=="") return "";
	$str =  str_replace('"','', $str);
	$str =  str_replace("'",'', $str);
	//$str = mb_convert_case($str,MB_CASE_TITLE,"utf-8");
	$str = mb_convert_case($str,MB_CASE_TITLE, "utf-8");
	$str = str_replace(' ', '-', $str);
	return $str;
}

?>