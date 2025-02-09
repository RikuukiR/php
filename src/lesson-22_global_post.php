<?php
// $_POST スーパーグローバル変数
// HTTP POSTメソッドを通じて送信されたデータを受け取るための配列です。

// 使用例
// HTMLフォームから送信されたデータを受け取る
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = htmlspecialchars($_POST['email']);
//     $password = htmlspecialchars($_POST['password']);
//     // フォームから受け取ったデータを処理
// }

// $_POST スーパーグローバル変数
// HTTP POSTメソッドを通じて送信されたデータを受け取るための配列です。

// 主な用途
// フォームデータの受け取り - ユーザーがフォームに入力したデータをサーバーで受け取る際に使用します。
// 大量のデータ送信 - GETメソッドに比べて大きなデータを送信することができます。
// データ転送量の比較
// $_GET - URLの長さに制限があるため、送信できるデータ量にも制限があります。一般的に数百バイト程度。
// URLの長さ上限はブラウザによって異なる。そこでよく出てくる数字は2083文字。これはIEが2083文字までしか対応していないことで、それに合わせる感じになったわけです。
// $_POST - HTTPボディを通じてデータを送るため、理論上はより大量のデータを送信できます。サーバー設定に依存しますが、一般的には数メガバイト以上のデータ送信が可能です。

// セキュリティ - POSTメソッドはURLにデータが表示されないため、パスワードなどの機密情報の送信に適しています。


// フォームからのデータを処理する
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>受け取ったフォームデータ:</h2>";
    foreach ($_POST as $key => $value) {
        echo nl2br("$key: $value\n");
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTメソッドのフォーム</title>
</head>

<body>
    <form action="" method="POST">
        <label for="email">メールアドレス：</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">パスワード：</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="送信">
    </form>
</body>

</html>