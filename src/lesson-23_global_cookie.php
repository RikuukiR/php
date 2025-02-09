<?php
// クッキーの処理
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cookieを設定するボタンがクリックされた場合
    if (isset($_POST['set_cookie'])) {
        // フォームから受け取った値をCookieに設定します。
        setcookie("email", $_POST['email'], time() + (86400 * 30), "/");
        setcookie("password", $_POST['password'], time() + (86400 * 30), "/");
        echo "<p>Cookieを設定しました。</p>";
    }
    // Cookieを確認するボタンがクリックされた場合
    if (isset($_POST['check_cookie'])) {
        // Cookieの値を表示します。
        echo "<h3>Cookieの確認</h3>";
        echo "<p>Email: " . $_COOKIE['email'] . "</p>";
        echo "<p>Password: " . $_COOKIE['password'] . "</p>";
    }
    // Cookieを削除するボタンがクリックされた場合
    if (isset($_POST['delete_cookie'])) {
        // Cookieを削除します。
        setcookie("email", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");
        echo "<p>Cookieを削除しました。</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookieの設定と削除</title>
</head>

<body>
    <h2>Cookieの設定と確認</h2>
    <form action="" method="POST">
        <label for="email">メールアドレス:</label><br />
        <input type="text" id="email" name="email" required><br />
        <label for="password">パスワード:</label><br />
        <input type="password" id="password" name="password" required><br /><br />
        <input type="submit" name="set_cookie" value="Cookieを設定する"><br />
        <input type="submit" name="check_cookie" value="Cookieを確認する"><br />
        <input type="submit" name="delete_cookie" value="Cookieを削除する"><br />
    </form>
</body>

</html>