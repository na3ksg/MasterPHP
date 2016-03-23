<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPのテスト</title>
</head>
<body>
   <?php 
   if(isset($_POST["soccer"])) {
	   $soccer = implode("と", $_POST["soccer"]);
	   echo "好きなJリーグチームは";
	   echo $soccer;
	   echo "です";
   } else {
   	echo "好きなJリーグチームはありません。";
   }
   ?>
</body>
</html>
