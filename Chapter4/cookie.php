<?php
$count = 1;
if (isset($_COOKIE["count"])) {
	$count = $_COOKIE["count"];
	$count++;
}
setcookie("count", $count, time() + 10);
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>クッキーのテスト</title>
	</head>
	<body>
		クッキーのテスト<br>
		<br>
		<?php
		if ($count == 1) {
			?>
			初めての訪問だよ<br>
			<br>
			クッキー情報はありません。<br>
			ページをリロードしてね<br>
			<?php
		} else {
			?>
			きみの訪問は<?= $count ?>回目だよ<br>
			<br>
			10秒以内にリロードするとカウントアップするよ！
			<?php
		}
		?>

	</body>
</html>

