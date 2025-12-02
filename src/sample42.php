<?php
$numbers = array (10, 5, 8, 3, 1);

//sort関数で昇順にソート
sort ($numbers);

print_r ($numbers);
?>

このコードは、2つの引数を受け取り、それらを足し算して返すユーザー定義関数の例です。
主な内容：
関数定義（3-6行目）：
name() 関数は $cytech と $engineer の2つの引数を受け取る
2つの値を足し算して $result に格納
return で結果を返す
関数呼び出し（9行目）：
name(2, 1) を呼び出し、結果（3）を echo で表示
実行すると、画面に 3 が表示されます。