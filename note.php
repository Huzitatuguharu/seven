<?php
include('functions.php');
$pdo = connect_to_db();

// SQL文の組み立て
$sql = 'SELECT * FROM goodbad_table';
// $sqlを代入
$stmt = $pdo->prepare($sql);
// へんすうにだいにゅう
$status = $stmt->execute();


// データの処理
if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // データの取得 fetchAll
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  foreach ($result as $record) {
    $output .= "<div class='card_parent'>";
    $output .= "<div class='cardurl'>{$record["bad_text"]}</div>";
    $output .= "<div class='cardgood'>{$record["good_text"]}</div>";

    // edit deleteリンを追加
    $output .= "<div class='btnarea'>";
    $output .= "<p><a href='edit.php?id={$record["id"]}'><span class='material-icons'>edit</span></a></p>";
    $output .= "<p><a href='delete.php?id={$record["id"]}'><span class='material-icons'>delete</span></a></p>";
    $output .= "</div>";
    $output .= "</div>";
  }
  // $recordの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
  // 今回は以降foreachしないので影響なし
  // unset($record);
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <title>BADUIメモ</title>
</head>



<body>
  <h1>
    <p class="title">おかしい？こうしよう</p>
  </h1>
  <div class="card">


    <?= $output ?>

  </div>

  <form class="memoarea" action="create.php" method="post">
    <div>
      <p>
        おかしい？
      </p>
      <textarea class="note_text" rows="4" name="bad_text"></textarea>
    </div>
    <div>
      <p>
        こうしよう
      </p><textarea class="note_text" rows="4" name="good_text"></textarea>
    </div>
    <div>
      <button id="save_btn">保存</button>
    </div>
    <a href="index.html" class="link" id="link_BAD">一覧を見る</a>
  </form>


</body>

</html>
