<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからのデータを取得
    $school = htmlspecialchars($_POST['school']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $leader_14 = htmlspecialchars($_POST['leader14']);
    $leader_15 = htmlspecialchars($_POST['leader15']);
    $leader_21 = htmlspecialchars($_POST['leader21']);
    $phone_14 = htmlspecialchars($_POST['phone14']);
    $name_14 = htmlspecialchars($_POST['name14']);
    $phone_15 = htmlspecialchars($_POST['phone15']);
    $name_15 = htmlspecialchars($_POST['name15']);
    $phone_21 = htmlspecialchars($_POST['phone21']);
    $name_21 = htmlspecialchars($_POST['name21']);
    $player11 = htmlspecialchars($_POST['player11']);
    $kana11 = htmlspecialchars($_POST['kana11']);
    $grade11 = htmlspecialchars($_POST['grade11']);
    $player21 = htmlspecialchars($_POST['player21']);
    $kana21 = htmlspecialchars($_POST['kana21']);
    $grade21 = htmlspecialchars($_POST['grade21']);
    $player22 = htmlspecialchars($_POST['player22']);
    $kana22 = htmlspecialchars($_POST['kana22']);
    $grade22 = htmlspecialchars($_POST['grade22']);
    $player31 = htmlspecialchars($_POST['player31']);
    $kana31 = htmlspecialchars($_POST['kana31']);
    $grade31 = htmlspecialchars($_POST['grade31']);
    $player41 = htmlspecialchars($_POST['player41']);
    $kana41 = htmlspecialchars($_POST['kana41']);
    $grade41 = htmlspecialchars($_POST['grade41']);
    $player51 = htmlspecialchars($_POST['player51']);
    $kana51 = htmlspecialchars($_POST['kana51']);
    $grade51 = htmlspecialchars($_POST['grade51']);
    $player61 = htmlspecialchars($_POST['player61']);
    $kana61 = htmlspecialchars($_POST['kana61']);
    $grade61 = htmlspecialchars($_POST['grade61']);

    // メール内容の構築
    $message = "送信が完了しました。以下確認用の記入内容です。\n\n";
    $message .= "学校名: $school\n";
    $message .= "記入者氏名: $name\n\n";
    $message .= "出場選手エントリー内容:\n";
    $message .= "- 男子シングルス1部: $player11,$kana11,$grade11\n";
    $message .= "- 男子ダブルス: $player21,$kana21,$grade21,$player22,$kana22,$grade22\n";
    $message .= "- 男子シングルス2部: $player31,$kana31,$grade31\n";
    $message .= "- 女子シングルス1部: $player41,$kana41,$grade41\n";
    $message .= "- 女子ダブルス: $player51,$kana51,$grade51\n";
    $message .= "- 女子シングルス2部: $player61,$kana61,$grade61\n\n";
    $message .= "上記内容をご確認ください。";

    // メールの送信
    mail($email, "エントリーフォームの確認", $message);

    // ユーザーに対するフィードバック
    echo "送信が完了しました。以下確認用の記入内容です。\n\n$message";
}
?>
