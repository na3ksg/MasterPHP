<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPのテスト</title>
</head>
<body>
   <?php 
   if($_POST["team"] != "") {
	   echo 'Jリーグチーム：<br>';
	   echo $_POST["team"];
   } else {
	   "選んでね！<br>";
   }
   ?>
</body>
</html>
