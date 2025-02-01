<?php
// テーブルに基づいて値を検証する関数
function validateValues($var)
{
    // if($var) の結果を確認
    $if_result = $var ? 'TRUE' : 'FALSE';

    // isset($var) の結果を確認
    $isset_result = isset($var) ? 'TRUE' : 'FALSE';

    // empty($var) の結果を確認
    $empty_result = empty($var) ? 'TRUE' : 'FALSE';

    // is_null($var) の結果を確認
    $is_null_result = is_null($var) ? 'TRUE' : 'FALSE';

    // 結果を表示
    echo "if(\$var): $if_result, isset(\$var): $isset_result, empty(\$var): $empty_result, is_null(\$var): $is_null_result" . PHP_EOL;
}

// 各値を検証する
echo "値が1の場合" . PHP_EOL;
validateValues(1);

echo "値が空文字列の場合" . PHP_EOL;
validateValues("");

echo "値が文字列の0の場合" . PHP_EOL;
validateValues("0");

echo "値が数値の0の場合" . PHP_EOL;
validateValues(0);

echo "値がNULLの場合" . PHP_EOL;
validateValues(NULL);

echo "変数が未定義の場合" . PHP_EOL;
// 変数が未定義の場合、issetで警告が出るのでエラーレポートを抑制
error_reporting(0);
validateValues($undefined_variable);

echo "値が空の配列の場合" . PHP_EOL;
validateValues(array());

echo "値が1つの要素を持つ配列の場合" . PHP_EOL;
validateValues(array(1));
