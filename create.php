<?php
var_dump($_POST);

// 値の確認
if (
  !isset($_POST['good_text']) || $_POST['good_text'] == '' ||
  !isset($_POST['bad_text']) || $_POST['bad_text'] == ''
) {
  exit('ParamError');
}
// 変数格納
$good_text = $_POST['good_text'];
$bad_text = $_POST['bad_text'];

include('functions.php');
$pdo = connect_to_db();


// SQL実行
$sql = 'INSERT INTO
goodbad_table(id, good_text,bad_text,created)
VALUES(NULL, :good_text, :bad_text, sysdate())';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':good_text', $good_text, PDO::PARAM_STR);
$stmt->bindValue(':bad_text', $bad_text, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  header('Location:note.php');
}
