<?php
// 継承（Inheritance）の例

// 親クラス
class Animal
{
    public function makeSound()
    {
        echo "動物の音を出します。\n";
    }
}

// 子クラス1
class Dog extends Animal
{
    public function makeSound()
    {
        echo "ワンワン\n";
    }
}

// 子クラス2
class Cat extends Animal
{
    public function makeSound()
    {
        echo "ニャー\n";
    }
}

// オブジェクトの作成とメソッドの呼び出し
$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

$animal->makeSound(); // 出力: 動物の音を出します。
$dog->makeSound();    // 出力: ワンワン
$cat->makeSound();    // 出力: ニャー
