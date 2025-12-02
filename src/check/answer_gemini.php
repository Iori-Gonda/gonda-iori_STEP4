//Geminiのコード
<?php

// エラー情報を保持する配列
$errors = [];
// フォームのフィールド名（仮にこのように設定します）
$fields = [
    'user_name',   // b-1: 利用者名
    'book_title',  // a)項目から必須と仮定
    'book_code',   // b-2: 図書コード
    'loan_period', // b-3: 貸出期間
    'remarks',     // 備考（必須ではないと仮定）
];

// POSTリクエストかどうかを確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- 1. データの安全な取得と未入力チェック ---
    $data = [];
    $required_fields = [
        'user_name'   => '利用者名',
        'book_title'  => '書籍タイトル',
        'book_code'   => '図書コード',
        'loan_period' => '貸出期間',
    ];

    foreach ($fields as $field_key) {
        // Null合体演算子とtrimでデータ取得（前後の空白を除去）
        $data[$field_key] = trim($_POST[$field_key] ?? '');
        
        // 必須項目チェック
        if (array_key_exists($field_key, $required_fields) && empty($data[$field_key])) {
            $errors[$field_key] = $required_fields[$field_key] . 'は必須項目です。入力してください。';
        }
    }
    
    // 未入力エラーがなければ、形式バリデーションに進む
    if (empty($errors)) {
        
        // --- 2. 形式バリデーション (正規表現チェック) ---

        // b-1: 利用者名 (日本語または英字のみ。数字、スペースNG)
        // \p{Script=...}とA-Za-zに一致（u:UTF-8対応）
        $pattern_user_name = '/^([\p{Script=Hiragana}\p{Script=Katakana}\p{Script=Han}A-Za-z]+)$/u';
        if (!preg_match($pattern_user_name, $data['user_name'])) {
            $errors['user_name'] = '利用者名は日本語または英字のみで入力してください。';
        }

        // b-2: 図書コード (英数字のみ、10文字以内)
        $pattern_book_code = '/^[A-Za-z0-9]{1,10}$/';
        if (!preg_match($pattern_book_code, $data['book_code'])) {
            $errors['book_code'] = '図書コードは英数字のみで10文字以内にしてください。';
        }

        // b-3: 貸出期間 (1〜30日の整数)
        $loan_period = intval($data['loan_period']);
        // 形式チェック: 純粋な数字か確認
        if (!preg_match('/^\d+$/', $data['loan_period'])) {
            $errors['loan_period'] = '貸出期間は数値のみで入力してください。';
        } 
        // 範囲チェック: 1〜30の間か確認
        else if ($loan_period < 1 || $loan_period > 30) {
            $errors['loan_period'] = '貸出期間は1日〜30日の間で入力してください。';
        }
    }

} else {
    // POSTリクエスト以外で直接アクセスされた場合
    $errors['general'] = 'フォームから送信してください。';
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認・バリデーション画面</title>
</head>
<body>
    <?php if (!empty($errors)): ?>
        <h1>❌ 入力エラー</h1>
        <p>以下の項目でエラーが発生しています。入力画面に戻って修正してください。</p>
        <ul style="color: red;">
            <?php foreach ($errors as $error_message): ?>
                <li><?= htmlspecialchars($error_message) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <h1>✅ 入力内容の確認</h1>
        <p>以下の内容でよろしければ、送信ボタンを押してください。</p>
        
        <dl>
            <dt>利用者名:</dt><dd><?= htmlspecialchars($data['user_name']) ?></dd>
            <dt>書籍タイトル:</dt><dd><?= htmlspecialchars($data['book_title']) ?></dd>
            <dt>図書コード:</dt><dd><?= htmlspecialchars($data['book_code']) ?></dd>
            <dt>貸出期間:</dt><dd><?= htmlspecialchars($data['loan_period']) ?>日</dd>
            <dt>備考:</dt><dd><?= htmlspecialchars($data['remarks']) ?></dd>
        </dl>
        
        <form action="post_data.php" method="POST">
            <?php foreach ($data as $key => $value): ?>
                <input type="hidden" name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($value) ?>">
            <?php endforeach; ?>
            <button type="submit">送信</button>
        </form>
    <?php endif; ?>
    
    <hr>
    <a href="form_book.php">入力画面に戻る</a>
</body>
</html>