<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPのテスト</title>
</head>
<body>
   <?php 
   if(isset($_POST["gender"]) && ($_POST["gender"] == "男" || $_POST["gender"] == "女")) {
	   echo "性別：<br>";
	   echo $_POST["gender"];
   } else {
	   echo "性別を選んでね！<br>";
   }
   ?>
</body>
</html>
