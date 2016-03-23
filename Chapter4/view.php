<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPのテスト</title>
</head>
<body>
	<?php
	echo $_POST["onamae"] . "ちゃん、からのメッセージ！";
	echo "<br><br>";
	echo "本文：<br>";
	echo nl2br($_POST["honbun"]);
	?>
    
</body>
</html>
