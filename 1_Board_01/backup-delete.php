<?php
  // DB ����
  $db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8","root","");

  // ������ �ۼ�
  $sql = "
    DELETE FROM board WHERE idx = '{$_GET['idx']}';
  ";
  if ($db->query($sql)) { // ������ ����
    header('Location:./index.php'); // �������� ���������� ����Ǹ� list.php�� �̵�
  } else {
    print_r($db->errorInfo());    // �������� ������ ������ ���� ���
  }