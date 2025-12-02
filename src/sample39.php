<?php
$array1 = array ("a" => "東京", "b" => "大阪", "c" => "福岡");
$array2 = array ("b" => "群馬", "d" => "大分");

//+演算子を使用し配列を結合
$merged_array = $array1 + $array2;

print_r ($merged_array);
?>