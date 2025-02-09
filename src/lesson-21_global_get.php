<!DOCTYPE html>
<html lang="ja">
<?php
// $_GETについての説明

// $_GET
// URLのクエリ文字列から送信されたデータを含む連想配列です。HTTP GETメソッドで送信されたデータにアクセスするために使用されます。

// サンプルコード
// 以下のURLにクエリ文字列を追加してアクセスすると、そのクエリ文字列の内容が$_GET変数に反映されます。
// http://example.com/page.php?key1=value1&key2=value2

// クエリ文字列 "key1=value1&key2=value2" を受け取って、その内容を出力します。
if (!empty($_GET)) {
    echo "<h2>受け取ったフォームデータ:</h2>";
    foreach ($_GET as $key => $value) {
        echo nl2br("$key: $value\n");
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの例</title>
</head>

<body>
    <form action="" method="GET">
        <label for="email">メールアドレス：</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">パスワード：</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="送信">
    </form>
</body>

</html>