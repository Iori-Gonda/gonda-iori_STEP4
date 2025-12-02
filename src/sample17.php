<?php
$number1 = 10;
$number2 = 5;

//等しいかどうか
var_dump($number1 == $number2); //false
var_dump($number1 != $number2); //true

//大小比較
var_dump($number1 > $number2); //true
var_dump($number1 < $number2); //false

//文字列の比較
$string1 = "Hello";
$string2 = "hello";

var_dump($string1 == $string2); //false
var_dump($string1 === $string2); //false
/*
どっちもfalseになる理由
==: 値が等しいかを比較。PHPの文字列比較は大文字小文字を区別するため、"Hello" と "hello" は等しくない → false
===: 値と型の両方が等しいかを比較。文字列型同士なので型は一致するが、値が異なる → false
*/

//配列の比較
$array1 = [1, 2, 3];
$array2 = ["1", "2", "3"];

var_dump($array1 == $array2); //true
var_dump($array1 === $array2); //fakse 配列の要素の型（整数 vs 文字列）が異なるため → false
?>