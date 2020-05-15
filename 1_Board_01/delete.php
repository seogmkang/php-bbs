<?php
// db connection
$db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8","root","");

// query statement
$sql = "DELETE FROM board WHERE idx = '{$_GET['idx']}'";

if($db->query($sql)){
  header('Location:./index.php');
} else {
  print_r($db->errorInfo());
}
?>