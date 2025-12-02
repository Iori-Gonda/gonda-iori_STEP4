<?php
// 都市名を格納した配列を定義
// インデックス: 0=tokyo, 1=osaka, 2=nagoya, 3=kyoto
$cities = array ("tokyo", "osaka", "nagoya", "kyoto");

// array_splice()関数で配列の要素を削除
// 第1引数: 対象の配列（参照渡し）
// 第2引数: 開始位置（インデックス2 = "nagoya"の位置）
// 第3引数: 削除する要素の数（1つ）
// 結果: インデックス2の"nagoya"が削除される
array_splice ($cities, 2, 1);

// 削除後の配列を表示
// 出力: Array ( [0] => tokyo [1] => osaka [2] => kyoto )
print_r ($cities);
?>