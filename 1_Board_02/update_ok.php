<?php
  // DB ����
  $db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8","root","");

  // ������ �ۼ�
  $sql = "
    UPDATE board SET
    subject = '{$_POST['subject']}',  # ����
    writer = '{$_POST['writer']}',    # �ۼ���
    content = '{$_POST['content']}'  # ����
    WHERE idx = '{$_GET['idx']}'
    
  ";
  if ($db->query($sql)) { // ������ ����
    header('Location:./?page=view&idx='.$_GET['idx']); // �������� ���������� ����Ǹ� list.php�� �̵�
  } else {
    print_r($db->errorInfo());    // �������� ������ ������ ���� ���
  }