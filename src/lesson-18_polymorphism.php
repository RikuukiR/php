<?php
// ポリモーフィズムとは？
/*
- 同名のメソッドで異なるアクションをすること
- 複数のクラスで同じ名前のメソッドを定義していること
*/

// ポリモーフィズム（Polymorphism）の例

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

// 関数の定義
function animalMakesSound(Animal $animal)
{
    // 引数で渡されたオブジェクトの makeSound メソッドを呼び出します。
    // この関数は引数として Animal クラスのオブジェクトやそのサブクラスのオブジェクトを受け取ることができます。
    $animal->makeSound();
}

// オブジェクトの作成と関数の呼び出し
$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

animalMakesSound($animal); // 出力: 動物の音を出します。
animalMakesSound($dog);    // 出力: ワンワン
animalMakesSound($cat);    // 出力: ニャー
