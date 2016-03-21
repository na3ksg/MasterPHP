<?php
$str = "abc";
$byte = 16;

$flag = checkByte($str,$byte);
if($flag) {
	echo "OK";
} else {
	echo "ERR";
	echo $byte;
	echo "バイトをこえてるよ！";
}

function checkByte($str, $byte) {
	$strlen = strlen($str);
	if($strlen <= $byte) {
		return true;
	}
	return false;
}

