<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>トレイトのテスト</title>
	</head>
	<body>
		<font size="4">トレイトのテスト</font>
		<br><br>
		<?php

		class User {

			private $name = NULL;

			public function print_hello() {
				echo $this->name;
				echo "さん、こんにちは！<br>";
			}

		}

		trait SayMorning {

			public function print_morning() {
				echo $this->name;
				echo "さん、おはようございます！<br>";
			}

		}

		class Guest extends User {

			use SayMorning;

			private $name = "ゲスト";

			public function print_hello() {
				echo $this->name;
				echo "さん、はじめまして！<br>";
			}

		}

		$newuser = new Guest();
		$newuser->print_hello();
		$newuser->print_morning();
		?>
	</body>
</html>

