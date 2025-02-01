<?php
// クラスの定義:
// 日本食クラスは日本料理の設計図です。料理名や材料、調理方法などが含まれます。
// クラスは class キーワードを使用して定義されます。
class JapaneseFood
{
    // プロパティの定義:
    // 料理の情報を保持する変数です。クラスの中で宣言され、オブジェクトごとに異なる値を持つことができます。
    public $dishName;
    public $ingredients;
    public $cookingMethod;

    // コンストラクタ:
    // 料理名や材料、調理方法などを指定して日本食オブジェクトを作成します。
    public function __construct($dishName, $ingredients, $cookingMethod)
    {
        $this->dishName = $dishName;
        $this->ingredients = $ingredients;
        $this->cookingMethod = $cookingMethod;
    }

    // メソッドの定義:
    // 料理の調理方法を示す関数です。オブジェクトの振る舞いを定義します。
    public function cook()
    {
        echo "$this->dishName を作ります。材料: $this-> ingredients、調理方法: $this->cookingMethod\n";
    }
}

// クラスのインスタンス化:
// 日本食クラスからオブジェクトを作成するプロセスです。new キーワードを使用して行います。
$sushi = new JapaneseFood("寿司", "魚、ご飯、海苔", "握り寿司の作り方");
$ramen = new JapaneseFood("ラーメン", "麺、チャーシュー、スープ", "ラーメンの茹で方");

// オブジェクトのプロパティへのアクセス:
echo nl2br("料理名: $sushi-> dishName、材料: $sushi->ingredients\n"); // 出力: 料理名: 寿司、材料: 魚、ご飯、海苔
echo nl2br("料理名: $ramen-> dishName、材料: $ramen->ingredients\n"); // 出力: 料理名: ラーメン、材料: 麺、チャーシュー、スープ

// オブジェクトのメソッドの呼び出し:
$sushi->cook(); // 出力: 寿司 を作ります。材料: 魚、ご飯、海苔、調理方法: 握り寿司の作り方
$ramen->cook(); // 出力: ラーメン を作ります。材料: 麺、チャーシュー、スープ、調理方法: ラーメンの茹で方
