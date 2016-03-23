<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPのテスト</title>
</head>
<body>
   <?php
   if(isset($_POST["team"])) {
	   echo "好きなJリーグチームは以下のとおりです<br><br>";
	   foreach ($_POST["team"] as $team) {
		   echo $team;
		   echo "<br>";
	   } 
   } else {
	   echo "好きなJリーグチームはありません。";
   }
   ?>
</body>
</html>
