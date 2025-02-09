 <?php
    //1. セッションの開始: PHPでセッションを使用する前には、session_start() 関数を呼び出してセッションを開始する必要があります。これにより、サーバー側でセッションが生成され、クライアントにセッションIDが送信されます。
    //2. セッション変数の利用: $_SESSION スーパーグローバル配列を通じて、セッション変数を設定、取得、更新することができます。これにより、異なるページ間でユーザー情報などのデータを保持することが可能です。
    //3. セッションの終了: セッションを終了するには、session_destroy() 関数を使用します。これにより、サーバー上のセッションデータが削除され、セッションIDも無効になります。また、特定のセッション変数だけを削除する場合は unset() 関数を使用します。

    // セッションの開始
    session_start();

    // セッションを設定するボタンがクリックされた場合
    if (isset($_POST['set_session'])) {
        // フォームから受け取った値をセッションに設定します。
        $_SESSION['email'] = $_POST['email_session'];
        $_SESSION['password'] = $_POST['password_session'];
        echo "<p>Sessionを設定しました。</p>";
    }

    // セッションを確認するボタンがクリックされた場合
    if (isset($_POST['check_session'])) {
        // セッションの値を表示します。
        echo "<h3>Sessionの確認</h3>";
        if (isset($_SESSION['email'])) {
            echo "<p>Email: " . $_SESSION['email'] . "</p>";
        }
        if (isset($_SESSION['password'])) {
            echo "<p>Password: " . $_SESSION['password'] . "</p>";
        }
    }
    // セッションを削除するボタンがクリックされた場合
    if (isset($_POST['delete_session'])) {
        // セッションを削除します。
        session_unset();
        session_destroy();
        echo "<p>Sessionを削除しました。</p>";
    }
    ?>

 <!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>セッションの設定と削除</title>
 </head>

 <body>
     <h2>セッションの設定と確認</h2>
     <form action="" method="POST">
         <label for="email_session">メールアドレス:</label>
         <input type="text" id="email_session" name="email_session" required>
         <label for="password_session">パスワード:</label>
         <input type="password" id="password_session" name="password_session" required>
         <input type="submit" name="set_session" value="Sessionを設定する">
         <input type="submit" name="check_session" value="Sessionを確認する">
         <input type="submit" name="delete_session" value="Sessionを削除する">
     </form>
 </body>

 </html>