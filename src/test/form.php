<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>申請内容確認</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>フォーム入力</h1>
    <form action="confirm.php" method="post" id="form">
    <!--名前-->
    <p><label for="name">名前:</label></p>
    <p><input type="text" id="name" name="name" required></p>

    <!--年齢-->
    <p><label for="age">年齢:</label></p>
    <p><input type="text" id="age" name="age" required></P>

    <!--電話番号-->
    <p><label for="tel">電話番号:</label></p>
    <p><input type="tel" id="tel" name="tel" required></P>

    <!--メアド-->
    <p><label for="email">メールアドレス:</label></p>
    <p><input type="email" id="email" name="email" required></p>

    <!--住所-->
    <p><label for="address">住所:</label></p>
    <p><input type="text" id="address" name="address" required></p>

    <!--質問-->
    <p><label for="question">質問:</label></p>
    <p><input type="text" id="question" name="question" required></p>

    <!--性別-->
    <p><label for="gender">性別:</label></p>
    <select name="gender" id="gender">
        <option value="">選択してください</option>
        <option value="男性">男性</option>
        <option value="女性">女性</option>
    </select>

    <!--ボタン-->
    <p><button type="submit">送信</button></p>
    </form>
</body>
</html>