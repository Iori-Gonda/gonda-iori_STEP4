<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>図書貸し出し申請フォーム</title>
    <link rel="stylesheet" href="answer_style_book.css">
</head>
<body>
    <h1>図書貸し出し申請フォーム</h1>
    <form action="confirm_book.php" method="post" id="form">
        <!--利用者名-->
        <p><label for="name">利用者名:</label></p>
        <p><input type="text" id="name" name="name" required></p>
        <!--書籍タイトル-->
        <p><label for="book_title">書籍タイトル:</label></p>
        <p><input type="text" id="book_title" name="book_title" required></p>
        <!--図書コード-->
        <p.<label for="book_code">図書コード（例：A1234）:</label></p>
        <p><input type="text" id="book_code" name="book_code" required></p>
        <!--貸出期間（日数）:-->
        <p><label for="rental_period">貸出期間（日数）:</label></p>
        <p><input type="number" id="rental_period" name="rental_period"  min="1" max="30" step="1" required></p>
        <!--備考-->
        <p><label for="notes">備考（任意）:</label></p>
        <textarea id="notes" name="notes" rows="5"></textarea>

        <!--ボタン-->
        <p><button type="submit">申請する</button></p>
    </form>
</body>
</html>