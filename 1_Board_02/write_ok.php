<?php
  // DB ����
  $db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8","root","");

  // ������ �ۼ�
  $sql = "
    INSERT INTO board SET
    subject = '{$_POST['subject']}',  # ����
    writer = '{$_POST['writer']}',    # �ۼ���
    content = '{$_POST['content']}',  # ����
    reg_date = now();                 # �ۼ���
  ";
  if ($db->query($sql)) { // ������ ����
    header('Location:./'); // �������� ���������� ����Ǹ� list.php�� �̵�
  } else {
    print_r($db->errorInfo());    // �������� ������ ������ ���� ���
  }