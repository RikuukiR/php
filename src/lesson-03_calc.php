<?php

// 算術演算子
$sum = 10 + 5; // 加算
$diff = 10 - 5; // 減算
$product = 10 * 5; // 乗算
$quotient = 10 / 5; // 除算
$remainder = 10 % 3; // 剰余

// 代入演算子
$number = 10;
$number += 5; // $number = $number + 5;
$number -= 5; // $number = $number - 5;
$number *= 5; // $number = $number * 5;
$number /= 5; // $number = $number / 5;
$number %= 3; // $number = $number % 3;

// 比較演算子
$result1 = (5 == 5); // 等しい
$result2 = (5 != 3); // 等しくない
$result3 = (5 < 10); // より小さい
    $result4=(10> 5); // より大きい
    $result5 = (5 <= 5); // 以下
        $result6=(5>= 3); // 以上

        // 論理演算子
        $logical_and = ($result1 && $result2); // 論理積（AND）
        $logical_or = ($result3 || $result4); // 論理和（OR）
        $logical_not = !($result5); // 論理否定（NOT）

        // 三項演算子
        $message = ($result1) ? "True" : "False"; // 条件 ? 真の場合の値 : 偽の場合の値

        // 文字列演算子
        $string1 = "Hello ";
        $string2 = "World!";
        $concatenated_string = $string1 . $string2; // 文字列の連結

        // 配列演算子
        $array1 = array(1, 2, 3);
        $array2 = array(4, 5, 6);
        $merged_array = $array1 + $array2; // 配列のマージ