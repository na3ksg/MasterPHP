<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPのテスト</title>
</head>
<body>
	確認画面
	<form name="form1" method="post" action="view.php">
	<?php
	echo "名前："; 
	echo $_POST["onamae"];
	echo "<br><br>";
	echo "本文：<br>";
	echo nl2br($_POST["honbun"]);
	?>
	<br>
	<input type="submit" value="確認" name="confirm">
	<input type="submit" value="戻る" name="back">
	<input type="hidden" name="user_id" value="<?=$_POST["user_id"]?>">
	<input type="hidden" name="onamae" value="<?=$_POST["onamae"]?>">
	<input type="hidden" name="honbun" value="<?=$_POST["honbun"]?>">	
	</form>
    
</body>
</html>
