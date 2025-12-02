<?php
/*
設問1:配列の作成とアクセス
1、フルーツの名前を含む配列 $fruits を作成してください。
*フルーツ名は任意とし、4つ以上の長さにして下さい。
*/
$fruits = array ("apple", "strawberry", "grape", "peach");

//2、配列 $fruits の最初の要素を出力してください。
echo $fruits [0];

//3、配列 $fruits の3番目の要素を出力してください。
echo $fruits [2];
?>

<?php
/*
設問2:連想配列
1、学生の名前と年齢を含む連想配列 $students を作成してください。
キーとして"John", "Jane", "Bob" を使用し、それぞれの年齢を値として設定してください。
年齢は、「Johnは20, Janeは22, Bobは19」とします。
*/
$students = array (
    "John" => 20;
    "Jane" => 22;
    "Bob" => 19;
);

//2、"Jane"の年齢を出力してください。
echo $person ["Jane"];

//3、"Bob" の年齢を出力してください。
echo $person ["Bob"];
?>

<?php
/*
設問3:多次元配列
1、クラスの各学生の名前と科目ごとの点数を含む多次元配列 $class を作成し、
以下のようにしてください。
John: Math、85, English、78
Jane: Math、92, English、88
Bob: Math、74, English、81
*/
$class = [
    "John" => [
        "Math" => 85,
        "English" => 78
    ],
    "Jane" => [
        "Math" => 92,
        "English" => 88
    ],
    "Bob" => [
        "Math" => 74,
        "English" => 81
    ]
];
/*
何をしているコードか（やさしく）
多次元の連想配列 $class を作成しています。
第1階層のキーは学生名（"John", "Jane", "Bob"）。
第2階層の連想配列に、科目名（"Math", "English"）とその点数（整数）が入っています。
つまり、「名前 → 科目 → 点数」の階層でデータを管理しています。
*/

//2、John の Math の点数を出力してください。
echo $class["John"]["Math"];

//3、Jane の English の点数を出力してください。
echo $class["Jane"]["English"];
?>

<?php
/*
設問4:配列操作(追加、削除、ソート等)
1、数字の配列 $numbers を作成してください。
配列には3,1,4,1,5,9を含めてください。
*/
$numbers = array(3,1,4,1,5,9);

//2、配列 $numbers の末尾に数字2を追加してください。
array_push($numbers, 2);

//3、配列 $numbers の2番目の要素を削除してください。
unset($numbers[2]); //誤り！！　2番目のインデックスは1！！

//4、配列 $numbers を昇順にソートしてください。
sort($numbers);

//5、ソートされた配列 $numbers を出力してください。
print_r($numbers);
?>

<?php
/*
設問5:文字列関数(strlen、str_replace、substr等)
1、文字列 "Hello, World!" を変数 $stringに代入してください。
*/
$string = "Hello, World!";

/*
2、文字列 $stringの長さを計算し、出力してください。
(strlen 関数を使用)
*/
$length = stlen($string); //代入は省略可能
echo $length;

/*
3、文字列 $string の "World" を "PHP" に置き換えて、出力してください。
(str_replace 関数を使用)
*/
$new_string = str_replace("World", "PHP", $string); //代入は省略可能
echo $new_string;

/*4、文字列 $string の最初の5文字を取得し、出力してください。
(substr 関数を使用)
*/
$length2 = substr($string, 0, 5); //代入は省略可能
echo $length2;