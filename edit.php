<?php

// 関数ファイル読み込み
include("functions.php");
// 送信されたidをgetで受け取る
$id = $_GET['id'];

// DB接続して、id名でテーブルから検索
$pdo = connect_to_db();
$sql = 'SELECT * FROM goodbad_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
// バインド
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
// ごにょごにょでーた
$status = $stmt->execute();
// fetch()で1レコード取得できる．
if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>編集画面</title>
</head>

<body>

  <form class="memoarea" action="update.php" method="POST">


    <div>
      <p>
        おかしい？
      </p>
      <textarea class="note_text" rows="4" name="bad_text" value="<?= $record["bad_text"] ?>"><?= $record["bad_text"] ?></textarea>
    </div>

    <div>
      <p>
        こうしよう
      </p>
      <textarea class="note_text" rows="4" name="good_text" value="<?= $record["good_text"] ?>"><?= $record["good_text"] ?></textarea>
    </div>

    <!-- 隠してid送る -->
    <input type="hidden" name="id" value="<?= $record['id'] ?>">

    <div>
      <button id="save_btn">保存</button>
    </div>

    <p>
      <a href="note.php">一覧画面</a>
    </p>

  </form>
</body>

</html>
