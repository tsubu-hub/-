<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを取得
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $school = htmlspecialchars($_POST['school']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $message = htmlspecialchars($_POST['message']);

    // 必要なデータだけを配列にする
    $data = [$name, $email, $school, $phone, $address, $message];

    // CSVファイルにデータを書き込む
    $file = fopen('filtered_entries.csv', 'a');

    // UTF-8 BOMを追加してエンコーディングを設定
    if (ftell($file) == 0) {
        fwrite($file, "\xEF\xBB\xBF");
    }

    fputcsv($file, $data);
    fclose($file);

    // 確認メッセージを表示
    echo "エントリーが送信されました。";
} else {
    // フォームからのPOSTリクエストでない場合のメッセージ
    echo "フォームを正しく送信してください。";
}
?>
