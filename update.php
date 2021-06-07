<?php
// 各値をpostで受け取る
$id = $_POST['id'];

include('functions.php');
$pdo = connect_to_db();

// 変数格納！重要！
$good_text = $_POST['good_text'];
$bad_text = $_POST['bad_text'];

// idを指定して更新するSQLを作成
$sql = "UPDATE goodbad_table SET good_text=:good_text, bad_text=:bad_text WHERE id=:id";



// ばいんど
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':bad_text', $bad_text, PDO::PARAM_STR);
$stmt->bindValue(':good_text', $good_text, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// postで受けとる
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理中止
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // 正常に実行された場合は一覧ページファイルに移動し，処理実行
  header("Location:note.php");
  exit();
}
