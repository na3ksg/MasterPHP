<?php
function db_connect() {
    $db_user = "";// ユーザー名 
    $db_pass = "";// パスワード
    $db_host = "";// ホスト名
    $db_name = "";// データベース名
    $db_type = "";// データベースの種類
    
    $dsn = "$db_type:host=$db_host;
            dbname=$db_name;charset=utf8";
    
    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        echo "接続しました。<br>";
    } catch(PDOExeption $Exception) {
        die('エラー：' . $Exception->getMessage());
    }
    return $pdo;
}
?>

