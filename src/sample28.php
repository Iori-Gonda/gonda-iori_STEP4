<?php
    $count = 1;
    do {
        echo "カウント： $count\n";
        $count++;
    } while ($count <= 5);
/*
2行目: $count = 1; — カウンタを1に初期化
3行目: do { — do-whileループの開始
4行目: echo "カウント： $count\n"; — 現在の値を出力（末尾に改行）
5行目: $count++; — カウンタを1増やす
6行目: } while ($count <= 5); — カウンタが5以下なら繰り返す

do-whileとwhileの違い
while: 最初に条件をチェック（条件が偽なら実行されない）
do-while: 最初に1回実行してから条件をチェック（少なくとも1回は実行）
*/
?>