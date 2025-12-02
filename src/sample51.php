<?php
    //配列
    $stack = ["1", "2"];

    //配列$stackに"three", "four"を追加
    $count = array_push($stack, "three", "four");

    //出力
    echo "配列の要素数: " . $count;

    //配列の中身を出力
    print_r($stack);
    ?>