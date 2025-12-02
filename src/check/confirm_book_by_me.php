//最初に自分で考えたやつ

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>名前表示</title>
</head>
<body>
    <h1>利用者名:</h1>
    <?php
        //POSTリクエストから名前を取得して表示する
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //送信されたデータから名前を取り出す
            $name = $_POST["name"];
            //名前が日本語、英数字、スペースのみで構成されているかどうかを確認する
            if (preg_match("/^[あ-んa-zA-Z0-9\s]+$/", $name)) {
                echo "<p>{$name}</p>";
            } else {
                echo "<p>名前は半角英数字および一部の記号のみで入力してください</p>";
            }
        } else {
            echo "<p>全ての項目を入力してください</p>";

            //送信されたデータから書籍タイトルを取り出す
            $bookName = $_POST["bookName"];

            //送信されたデータから図書コードを取り出す
            $bookCode = $_POST["bookCode"];
            //図書コードが英数字のみで10文字以内かどうかを確認する
            if(preg_match("/^[a-zA-Z0-9]{1,10}$/", $bookCode))
        }
    ?>
    <a href="contact.php">戻る</a>
</body>
</html>