<?php
// db connection
$db = new PDO("mysql:hostname=localhost;dbname=20190428;charset=utf8","root","");
// query statement
$sql = "
  INSERT INTO board SET
  subject = '{$_POST['subject']}',
  writer = '{$_POST['writer']}',
  content = '{$_POST['content']}',
  reg_date = now()
";
if($db->query($sql)){
  header('Location:./index.php');
} else {
  print_r($db->errorInfo());
}
?>