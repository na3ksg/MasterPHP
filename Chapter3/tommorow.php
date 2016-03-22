<?php
$timestamp = time() + (60 * 60 * 24);
$tommorow = date("Y年m月d日H時i分s秒", $timestamp);
echo "今から24時間後は" . $tommorow;


