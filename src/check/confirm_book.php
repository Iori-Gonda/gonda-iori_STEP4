<!--STEP4-4理解度チェック答え-->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>申請内容確認</title>
    <link rel="stylesheet" href="answer_style_confirm.css">
</head>
<body>
    <h1>申請内容の確認</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $book_title = $_POST["book_title"];
        $book_code = $_POST["book_code"];
        $rental_period = $_POST["rental_period"];
        $notes = $_POST["notes"];

        // バリデーション
        if (!preg_match("/^[\p{Script=Hiragana}\p{Script=Katakana}\p{Script=Han}A-Za-z\s]+$/u", $name)) {
            echo '<div class="error-message">';
            echo "<p>利用者名は日本語または英字のみで入力してください。</p>";
            echo '</div>';
        } elseif (!preg_match("/^[a-zA-Z0-9]{1,10}$/", $book_code)) {
            echo '<div class="error-message">';
            echo "<p>図書コードは英数字のみで10文字以内にしてください。</p>";
            echo '</div>';
        } elseif (!is_numeric($rental_period) || $rental_period < 1 || $rental_period > 30) {
            echo '<div class="error-message">';
            echo "<p>貸出期間は1日~30日の間で入力してください。</p>";
            echo '</div>';
        } else {
            // 入力内容の表示
            echo "<p>利用者名:". htmlspecialchars($name, ENT_QUOTES, 'UTF-8'). "</p>";
            echo "<p>書籍タイトル: ". htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'). "</p>";
            echo "<p>図書コード: {$book_code}</p>";
            echo "<p>貸出期間: {$rental_period}日</p>";
            echo "<p>備考:". nl2br(htmlspecialchars($notes, ENT_QUOTES, 'UTF-8')) . "</p>";
        }
    } else {
        echo '<div class="error-message">';
        echo "<p>データが送信されていません。</p>";
        echo '</div>';            
    }
    ?>
    
    <a href="form_book.php" class="back-button">戻る</a>

</body>
</html>