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
    $player1_1 = htmlspecialchars($_POST['player1-1']);
    $kana1_1 = htmlspecialchars($_POST['kana1-1']);
    $grade1_1 = htmlspecialchars($_POST['grade1-1']);
    $player2_1 = htmlspecialchars($_POST['player2-1']);
    $kana2_1 = htmlspecialchars($_POST['kana2-1']);
    $grade2_1 = htmlspecialchars($_POST['grade2-1']);
    $player2_2 = htmlspecialchars($_POST['player2-2']);
    $kana2_2 = htmlspecialchars($_POST['kana2-2']);
    $grade2_2 = htmlspecialchars($_POST['grade2-2']);
    $player3_1 = htmlspecialchars($_POST['player3-1']);
    $kana3_1 = htmlspecialchars($_POST['kana3-1']);
    $grade3_1 = htmlspecialchars($_POST['grade3-1']);
    $player4_1 = htmlspecialchars($_POST['player4-1']);
    $kana4_1 = htmlspecialchars($_POST['kana4-1']);
    $grade4_1 = htmlspecialchars($_POST['grade4-1']);
    $player5_1 = htmlspecialchars($_POST['player5-1']);
    $kana5_1 = htmlspecialchars($_POST['kana5-1']);
    $grade5_1 = htmlspecialchars($_POST['grade5-1']);
    $player6_1 = htmlspecialchars($_POST['player6-1']);
    $kana6_1 = htmlspecialchars($_POST['kana6-1']);
    $grade6_1 = htmlspecialchars($_POST['grade6-1']);

    // データを保存する処理（例：データベースに保存、ファイルに書き込むなど）
    // ここでは例としてファイルに書き込む方法を示します
    $file = 'form_data.txt';
    $current = file_get_contents($file);
    $current .= "学校名: $school\n記入者氏名: $name\n記入者メールアドレス: $email\n";
    $current .= "12/14日引率者氏名: $leader_14\n12/15日引率者氏名: $leader_15\n12/21日引率者氏名: $leader_21\n";
    $current .= "12/14日緊急連絡先: $phone_14, 連絡先氏名: $name_14\n";
    $current .= "12/15日緊急連絡先: $phone_15, 連絡先氏名: $name_15\n";
    $current .= "12/21日緊急連絡先: $phone_21, 連絡先氏名: $name_21\n";
    $current .= "男子シングルス1部: $player1_1, $kana1_1, $grade1_1\n";
    $current .= "男子ダブルス: 選手1: $player2_1, $kana2_1, $grade2_1; 選手2: $player2_2, $kana2_2, $grade2_2\n";
    $current .= "男子シングルス2部: $player3_1, $kana3_1, $grade3_1\n";
    $current .= "女子シングルス1部: $player4_1, $kana4_1, $grade4_1\n";
    $current .= "女子ダブルス: $player5_1, $kana5_1, $grade5_1\n";
    $current .= "女子シングルス2部: $player6_1, $kana6_1, $grade6_1\n";
    file_put_contents($file, $current);

    // ユーザーに対するフィードバック
    echo "送信が完了しました。";
}
?>
