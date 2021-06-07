<?php
// idをgetで受け取る
$id = $_GET['id'];


include('functions.php');
$pdo = connect_to_db();

// idを指定して更新するSQLを作成 -> 実行の処理
$sql = 'DELETE FROM goodbad_table WHERE id=:id';

// ばいんど
$stmt = $pdo->prepare($sql);
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
