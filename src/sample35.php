<?php
//配列
$colors = array ("red", "green");
//語尾の最後に要素を追加
$new_length = array_push ($colors, "blue", "yellow");

//出力
echo "配列の長さは： $new_length\n";
print_r ($colors);
?>