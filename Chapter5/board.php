<?php
class Board {
	public $subject = "初投稿です！";
	public $name = "秋元真夏";
	public  $contents = "こんにちは！";
	public function dispArticle() {
		echo "件名：".$this->subject."<br>";
		echo "名前：".$this->name."<br>";
		echo "内容：".$this->contents."<br>";
	}
}
$board = new Board;
$board->dispArticle();

