<?php
// DB connection
$db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8", "root", "");
// Query sentence
$sql = "
  INSERT INTO board SET
  subject = '{$_POST['subject']}', # subject
  writer = '{$_POST['writer']}', # writer
  content = '{$_POST['content']}', # content
  reg_date = now(); # subject
";
if ($db->query($sql)) {
  header('Location:./index.php');
} else {
  print_r($db->errorInfo());
}
?>