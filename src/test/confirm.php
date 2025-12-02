<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <h1>入力内容確認</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $question = $_POST["question"];
        $gender = $_POST["gender"];

        //バリデーション
        //名前
        if(!preg_match("/^[\p{Script=Hiragana}\p{Script=Katakana}\p{Script=Han}a-zA-Z\s]+$/u", $name)) {
            echo '<div class="error-message">';
            echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
            echo '</div>';
        //年齢
        } elseif (!is_numeric($age) || $age < 0 || $age > 150) {
            echo '<div class="error-message">';
            echo "<p>年齢は0から150の間で入力してください。</p>";
            echo '</div>';
        //電話番号
        } elseif (!preg_match("/^[\d\-]+$/", $tel)) {
            echo '<div class="error-message">';
            echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
            echo '</div>';
        //メールアドレス
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div class="error-message">';
            echo "<p>メールアドレスの形式が正しくありません。</p>";
            echo '</div>';
        //住所
        } elseif (!preg_match("/^[\p{Script=Hiragana}\p{Script=Katakana}\p{Script=Han}]+$/u", $address)) {
            echo '<div class="error-message">';
            echo "<p>住所はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
            echo '</div>';
        } else {
            // 入力内容の表示
            echo "<p>名前:". htmlspecialchars($name, ENT_QUOTES, 'UTF-8'). "</p>";
            echo "<p>年齢:". htmlspecialchars($age, ENT_QUOTES, 'UTF-8'). "</p>";
            echo "<p>電話番号:". htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'). "</p>";
            echo "<p>メールアドレス:". htmlspecialchars($email, ENT_QUOTES, 'UTF-8'). "</p>";
            echo "<p>住所:". htmlspecialchars($address, ENT_QUOTES, 'UTF-8'). "</p>";
            echo "<p>質問:". nl2br(htmlspecialchars($question, ENT_QUOTES, 'UTF-8')). "</p>";
            echo "<p>性別:". htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'). "</p>";
        }
    //未入力エラー
    } else {
        echo '<div class="error-message">';
        echo "<p>データが送信されていません。</p>";
        echo '</div>';
    }
    ?>

    <a href="form.php" class="back-button">戻る</a>

</body>
</html>