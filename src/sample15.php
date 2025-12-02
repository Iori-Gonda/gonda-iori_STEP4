<?php
//負の数で割る場合
$numerator = 10;
$denominator = -3;

//答えは-3
echo intdiv($numerator. $denominator);

//割り切れる場合
$numerator = 20;
$denominator = 4;

//答えは5
echo intdiv($numerator. $denominator);

//割る数の方が大きい場合
$numerator = 5;
$denominator = 10;

//答えは0.5
echo intdiv($mumerator, $denominator);
?>