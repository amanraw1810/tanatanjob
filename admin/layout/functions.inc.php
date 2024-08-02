<?php
error_reporting(0);
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($way,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($way,$str);
	}
}
?>