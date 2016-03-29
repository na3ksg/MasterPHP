<?php
session_start();

$count = 1;
if (isset($_SESSION["count"])) {
	$count = $_SESSION["count"];
	$count++;
}
$_SESSION["count"] = $count;
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>セッション変数のテスト</title>
	</head>
	<body>
		セッション変数のテスト<br> 
		<br>
		<?php
		if ($count == 1) {
			?>
			初めての訪問だよ<br>
			<br>
			セッション変数にデータがないよ<br>
			このページをリロードしてね<br>
			<?php
		} else {
			?>
			君の訪問は<?= $count ?>回目だよ！<br>
			<?php
		}
		?>
	</body>
</html>

