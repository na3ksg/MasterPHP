<?php
$member = array("name" => "田中太郎", "age" => 23, "tall" => 170);

foreach ($member as $key => $value) {
	if ($key == "name") {
		$title = "名前";
	} else if ($key == "age") {
		$title = "年齢";
	} else if ($key == "tall") {
		$title = "身長";
	}
	echo "$title : $value";
	echo "<br>";
}