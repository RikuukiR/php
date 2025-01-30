<?php

// integer: 整数
// 整数値を表現するためのデータ型です。正負の整数値を扱います。
$number = 10;
// echo gettype()

// float: 浮動小数点数
// 小数点を含む数値を表現するためのデータ型です。浮動小数点数とも呼ばれます。
$pi = 3.14;

// string: 文字列
// 文字列を表現するためのデータ型です。シングルクォートまたはダブルクォートで囲んだ文字列を表現します。
$name = "Monsho";

// boolean: 真偽値
// 真 (true) または偽 (false) の2つの値のみを持つデータ型です。条件式の評価などに使用されます。
$is_active = true;
if($is_active){
    echo "稼働中です";
}else{
    echo "停止中です";
}

// array: 配列
// 複数の値を格納するためのデータ型です。インデックス付きまたは連想配列として使用できます。
$colors = array("red", "green", "blue");
$area = ["tokyo","osaka","hokkaido"];
$postCode = [1000001, 1000002];
//数字も可

// object: オブジェクト
// クラスのインスタンスを表現するためのデータ型です。プロパティとメソッドを持ちます。
class Person {
public $name;
public $age;
}
$person = new Person();
$person->name = "Taro";
$person->age = 30;

// NULL: ヌル
// 値が存在しないことを表す値です。変数が初期化されていない場合や、値を明示的にNULLに設定した場合に使用されます。
$myGirlFriend = null;