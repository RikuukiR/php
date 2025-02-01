<?php

// -- 文字列関数:
// strlen(): 文字列の長さを返す関数
// substr(): 文字列の一部を取り出す関数
// strpos(): 文字列内の特定の部分文字列が最初に現れる位置を返す関数

// -- 配列関数:
// count(): 配列の要素の数を返す関数
// array_push(): 配列の最後に1つ以上の要素を追加する関数
// array_pop(): 配列の最後の要素を取り出して削除する関数
// array_merge(): 2つ以上の配列を結合する関数

// -- 正規表現関数:
// preg_match(): 正規表現を使用して文字列がマッチするかどうかを確認する関数
// preg_replace(): 正規表現を使用して文字列内のマッチした部分を置換する関数
// preg_split(): 正規表現にマッチした部分で文字列を分割し、配列として返す関数



// -- 文字列関数:
// strlen(): 文字列の長さを返す関数
$str = "Hello, world!";
$length = strlen($str);
echo nl2br("文字列の長さ: $length\n");

// substr(): 文字列の一部を取り出す関数
$substring = substr($str, 0, 5); // "Hello"
echo nl2br("部分文字列: $substring\n");

// strpos(): 文字列内の特定の部分文字列が最初に現れる位置を返す関数
$position = strpos($str, "world");
echo nl2br("部分文字列が最初に現れる位置: $position\n");

// -- 配列関数:
// count(): 配列の要素の数を返す関数
$colors = array("red", "green", "blue");
$element_count = count($colors);
echo nl2br("配列の要素数: $element_count\n");

// array_push(): 配列の最後に1つ以上の要素を追加する関数
array_push($colors, "yellow", "orange");
print_r($colors);

// array_pop(): 配列の最後の要素を取り出して削除する関数
$last_color = array_pop($colors);
echo nl2br("最後の要素: $last_color\n");
print_r($colors);

// array_merge(): 2つ以上の配列を結合する関数
$more_colors = array("pink", "purple");
$all_colors = array_merge($colors, $more_colors);
print_r($all_colors);

// -- 正規表現関数:
// preg_match(): 正規表現を使用して文字列がマッチするかどうかを確認する関数
$pattern = "/world/";
if (preg_match($pattern, $str)) {
    echo nl2br("文字列がマッチしました。\n");
} else {
    echo nl2br("文字列がマッチしませんでした。\n");
}

// preg_replace(): 正規表現を使用して文字列内のマッチした部分を置換する関数
$new_str = preg_replace("/world/", "PHP", $str);
echo nl2br("置換後の文字列: $new_str\n");

// preg_split(): 正規表現にマッチした部分で文字列を分割し、配列として返す関数
$split_str = "apple,banana,orange";
$fruits = preg_split("/,/", $split_str);
print_r($fruits);
