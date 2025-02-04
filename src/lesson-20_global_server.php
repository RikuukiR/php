<?php
// スーパーグローバル変数とは
// PHPでプリセットされているいくつかの特別な変数で、スクリプトのどこからでもアクセス可能です。

// $_SERVERについてのサンプルコード

// リクエストのメソッドを表示する
echo nl2br("リクエストのメソッド: " . $_SERVER['REQUEST_METHOD'] . "\n");

// クライアントのIPアドレスを表示する
echo nl2br("クライアントのIPアドレス: " . $_SERVER['REMOTE_ADDR'] . "\n");

// 実行されているスクリプトのパスを表示する
echo nl2br("実行されているスクリプトのパス: " . $_SERVER['SCRIPT_NAME'] . "\n");

// サーバーが使用しているポート番号を表示する
echo nl2br("サーバーが使用しているポート番号: " . $_SERVER['SERVER_PORT'] . "\n");

// ドキュメントルートのディレクトリパスを表示する
echo nl2br("ドキュメントルートのディレクトリパス: " . $_SERVER['DOCUMENT_ROOT'] . "\n");

// クライアントがリクエストを送信したホストのヘッダー値を表示する
echo nl2br("クライアントがリクエストを送信したホストのヘッダー値: " . $_SERVER['HTTP_HOST'] . "\n");

// サーバーのホスト名を表示する
echo nl2br("サーバーのホスト名: " . $_SERVER['SERVER_NAME'] . "\n");

// 実行されているスクリプトのファイル名を表示する(PHP_SELF)
echo nl2br("実行されているスクリプトのファイル名: " . $_SERVER['PHP_SELF'] . "\n");

// リクエストしたURI(REQUEST_URI)
echo nl2br("リクエストしたURI名: " . $_SERVER['REQUEST_URI'] . "\n");
