<?php
    //ユーザー定義関数を定義「2つの引数あり」
    function name($cytech, $engineer) {
        $result = $cytech + $engineer;
        return $result;
    }

    //関数を呼び出して結果を表示する
    echo name(2, 1);
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