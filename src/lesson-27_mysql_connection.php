
<?php
    // phpinfo();

// MySQLデータベースへの接続
// PDOクラスを使用して、MySQLデータベースに接続します。
// PDOコンストラクタには、データベースのホスト名、データベース名、ユーザー名、パスワードが必要です。
// host=localhost: データベースのホスト名を指定します。ローカルホストの場合は「localhost」となります。
// dbname=example_db: データベース名を指定します。接続先のデータベースの名前です。
// 'username': データベースにアクセスするためのユーザー名を指定します。
// 'password': データベースにアクセスするためのパスワードを指定します。
try {
    // Local環境で接続する場合 host=127.0.0.1
    // $pdo = new PDO('mysql:host=127.0.0.1;dbname=development', 'm_user', 'm_user');

    // Dockerで接続する場合 host=mysql or CONTAINER_NAME
    $pdo = new PDO('mysql:host=mysql;dbname=development', 'm_user', 'm_user');
    echo "MySQLデータベースへの接続が成功しました。\n";
} catch (Exception $e) {
    die("接続エラー: {$e->getMessage()}");
}

?>
