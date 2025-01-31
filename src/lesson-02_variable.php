<?php

// 変数名はアルファベットまたはアンダースコア（_）で始める必要があります。
$variable_name = "value";
echo $variable_name;

// 変数名には数字を使用できますが、先頭に数字を置くことはできません。
$variable1 = 10;

// 大文字と小文字は区別されます。
$Variable = "value2";
$variable = "value3";

// 変数名にはアルファベット、数字、アンダースコア以外の文字は使用できません。
// また、予約語（キーワード）も変数名として使用できません。
// 例外的に、$this は特別な変数名として予約されています。
// 以下は変数名として正しくありません。
// $123variable //❌
// $my-variable //❌
// $if //❌

// PHPは動的型付け言語なので、変数の型は宣言する必要はありません。
$dynamic_variable = 5;
$dynamic_variable = "string";

// ただし、変数に初期値を代入する際にその値の型が決まります。
// 例えば、$int_variableに整数を代入すると、$int_variableは整数型になります。
$int_variable = 10; // 整数型
$string_variable = "Hello"; // 文字列型

// PHP 7以降では、型宣言として厳密な型を指定することも可能です。
// これにより、関数の引数や戻り値の型を厳密に指定することができます。
function add(int $a, int $b): int {
return $a + $b;
}