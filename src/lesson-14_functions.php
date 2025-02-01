<?php
// 関数の定義と呼び出し:
// 関数を定義するにはfunctionキーワードを使用します。
// 関数名、引数リスト、関数本体を指定します。
function describe_food($dish)
{
    echo nl2br("この料理は$dish です。\n");
}

// 定義した関数を呼び出します。
describe_food("寿司"); // 出力: この料理は寿司です。

// 引数と戻り値:
// 関数は引数を受け取ることもできます。
// 戻り値はreturn文を使用して指定します。
function make_sushi($ingredients)
{
    return "寿司が作られました。使用された食材: $ingredients";
}

// 関数の戻り値を変数に代入して使用することもできます。
$sushi = make_sushi("マグロ、サーモン、アボカド");
echo nl2br($sushi . "\n"); // 出力: 寿司が作られました。使用された食材: マグロ、サーモン、アボカド

// デフォルト引数:
// 引数にデフォルト値を指定することができます。
// デフォルト値を持つ引数は呼び出し時に省略することができます。
function cook_ramen($toppings = "チャーシュー")
{
    return "ラーメンが調理されました。トッピング: $toppings";
}

// デフォルト引数を使用して関数を呼び出します。
$ramen = cook_ramen(); // デフォルト引数が適用されます。
echo nl2br($ramen . "\n"); // 出力: ラーメンが調理されました。トッピング: チャーシュー

// 可変長引数:
// 関数に可変長の引数を受け取ることができます。
// func_get_args関数を使用して引数のリストを取得します。
function make_tempura(...$ingredients)
{
    $tempura = "天ぷらが作られました。使用された食材: ";
    foreach ($ingredients as $ingredient) {
        $tempura .= "$ingredient, ";
    }
    return rtrim($tempura, ", ");
}

// 可変長引数を使用して関数を呼び出します。
$tempura = make_tempura("えび", "かぼちゃ", "ししとう");
echo nl2br($tempura . "\n"); // 出力: 天ぷらが作られました。使用された食材: えび, かぼちゃ, ししとう
