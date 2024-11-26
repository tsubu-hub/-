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
    $player1_1 = htmlspecialchars($_POST['player11']);
    $kana1_1 = htmlspecialchars($_POST['kana11']);
    $grade1_1 = htmlspecialchars($_POST['grade11']);
    $player2_1 = htmlspecialchars($_POST['player21']);
    $kana2_1 = htmlspecialchars($_POST['kana21']);
    $grade2_1 = htmlspecialchars($_POST['grade21']);
    $player2_2 = htmlspecialchars($_POST['player22']);
    $kana2_2 = htmlspecialchars($_POST['kana22']);
    $grade2_2 = htmlspecialchars($_POST['grade22']);
    $player3_1 = htmlspecialchars($_POST['player31']);
    $kana3_1 = htmlspecialchars($_POST['kana31']);
    $grade3_1 = htmlspecialchars($_POST['grade31']);
    $player4_1 = htmlspecialchars($_POST['player41']);
    $kana4_1 = htmlspecialchars($_POST['kana41']);
    $grade4_1 = htmlspecialchars($_POST['grade41']);
    $player5_1 = htmlspecialchars($_POST['player51']);
    $kana5_1 = htmlspecialchars($_POST['kana51']);
    $grade5_1 = htmlspecialchars($_POST['grade51']);
    $player6_1 = htmlspecialchars($_POST['player61']);
    $kana6_1 = htmlspecialchars($_POST['kana61']);
    $grade6_1 = htmlspecialchars($_POST['grade61']);

    // データを保存する処理（例：データベースに保存、ファイルに書き込むなど）
    // ここでは例としてファイルに書き込む方法を示します
    $file = 'form_data.txt';
    $current = file_get_contents($file);
    $current .= "学校名: $school\n記入者氏名: $name\n記入者メールアドレス: $email\n";
    $current .= "12/14日引率者氏名: $leader_14\n12/15日引率者氏名: $leader_15\n12/21日引率者氏名: $leader_21\n";
    $current .= "12/14日緊急連絡先: $phone_14, 連絡先氏名: $name_14\n";
    $current .= "12/15日緊急連絡先: $phone_15, 連絡先氏名: $name_15\n";
    $current .= "12/21日緊急連絡先: $phone_21, 連絡先氏名: $name_21\n";
    $current .= "男子シングルス1部: $player11, $kana11, $grade11\n";
    $current .= "男子ダブルス: 選手1: $player21, $kana21, $grade21; 選手2: $player22, $kana22, $grade22\n";
    $current .= "男子シングルス2部: $player31, $kana31, $grade31\n";
    $current .= "女子シングルス1部: $player41, $kana41, $grade41\n";
    $current .= "女子ダブルス: $player51, $kana51, $grade51\n";
    $current .= "女子シングルス2部: $player61, $kana61, $grade61\n";
    file_put_contents($file, $current);

    // ユーザーに対するフィードバック
    echo "送信が完了しました。";
}
?>
