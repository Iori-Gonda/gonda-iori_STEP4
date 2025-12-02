<?php
    //ネストされた配列（＝多次元配列）
    $nestedArray = [
        "fruits" => ["apple", "banana"],
        "numbers" => [1, 2, 3],
        "nested" => [
            "a",
            "b",
            "c" => ["x", "y", "z"]
        ]
    ];

    //配列の中身を出力
    print_r($nestedArray);

    //要素数の再帰的カウント
    echo count($nestedArray, COUNT_RECURSIVE);
    ?>

ネストされた配列の定義 (3-11行目)
$nestedArray に3つのキーを持つ配列を定義
"fruits": 文字列の配列
"numbers": 数値の配列
"nested": さらにネストされた配列（"c" キーに配列が入る）
配列の出力 (14行目)
print_r() で配列の構造を表示
再帰的な要素数のカウント (17行目)
count($nestedArray, COUNT_RECURSIVE) で全階層の要素数を合計
COUNT_RECURSIVE を指定すると、ネストされた配列内の要素も再帰的にカウント
実行結果の例：
print_r() で配列の構造が表示される
count() は全階層の要素数を返す（例：この場合、すべての要素を合計すると11個）