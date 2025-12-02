<?php
    //変数
    $factor = 10;

    //匿名関数の定義
    $multiplier = function($number) use ($factor) {
        return $number * $factor;
    };

    //匿名関数の呼び出し
    echo $multiplier(5);
?>

$multiplier = function($number) use ($factor) {...} (6行目) の説明
・匿名関数（クロージャ）を変数 $multiplier に代入。
・$number: 関数の引数。
・use ($factor): 外部変数 $factor を関数内で使用可能にする。
    ↑でクロージャが有効になる

echo $multiplier(5); (11行目) の説明
・$multiplier を 5 で呼び出し。
・結果は 5 * 10 = 50。
・出力: 50