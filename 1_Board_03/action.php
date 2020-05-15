<?php

extract($_POST);
$sql = "";
$url = './';

// query sentence
switch($action) {
  case 'insert':
    $sql = "
      INSERT INTO board SET
      subject = '{$subject}',
      writer = '{$writer}',
      content = '{$content}',
      reg_date = now();
    ";
  break;
  case 'update':
    $sql = "
      UPDATE board SET
      subject = '{$subject}',
      writer = '{$writer}',
      content = '{$content}'
      WHERE idx = '{$idx}';
    ";
  break;
  case 'delete':
  $sql = "DELETE FROM board WHERE idx = '{$idx}'";
  break;
}

if ($db->query($sql)) {
  header('Location:'.$url);
} else {
  print_r($db->errorInfo());
}
exit;
?>