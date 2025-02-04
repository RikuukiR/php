<?php
// PHP の DateTime クラスは日付と時刻を操作するための強力なツールです。
// エディター内のコメントに以下の箇条書きで説明します。

// 日付と時刻の取得:
$date = new DateTime();
// 現在の日付と時刻を取得します。
echo nl2br($date->format('Y-m-d H:i:s') . "\n");

// 特定の日付と時刻を指定して DateTime オブジェクトを作成:
$birthday = DateTime::createFromFormat('Y-m-d', '1990-05-20');
// '1990-05-20' の日付を表す DateTime オブジェクトを作成します。

// 日付の操作:
$birthday->modify('+1 year');
// 誕生日から1年後の日付に変更します。
echo nl2br($birthday->format('Y-m-d') . "\n");

// 日付の比較:
$today = new DateTime();
if ($today > $birthday) {
    echo nl2br("今日は誕生日の後です。\n");
} elseif ($today < $birthday) {
    echo nl2br("誕生日まであと少しです。\n");
} else {
    echo nl2br("今日は誕生日です！\n");
}

// 他にも、日付の加算や減算、曜日の取得、日付間の差分計算など、さまざまな操作が可能です。
