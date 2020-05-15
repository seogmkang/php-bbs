<?php
  /*
  $_POST�� key���� ������ �Ҵ��Ѵ�.
  $_POST['action'] => $action
  $_POST['subject'] => $subject
  $_POST['writer'] => $writer
  $_POST['content'] => $content
   */
  extract($_POST);
  $sql = "";    // sql �ʱ�ȭ
  $url = './';  // ������ ó�� �� �̵��� �ּ�

  // ������ �ۼ�
  switch ($action) {
    case 'insert' :
      $sql = "
        INSERT INTO board SET
        subject = '{$subject}',  # ����
        writer = '{$writer}',    # �ۼ���
        content = '{$content}',  # ����
        reg_date = now();                 # �ۼ���
      ";
    break;
    case 'update' :
      $sql = "
        UPDATE board SET
        subject = '{$subject}',  # ����
        writer = '{$writer}',    # �ۼ���
        content = '{$content}'  # ����
        WHERE idx = '{$idx}'
      ";
      $url = './?page=view&idx='.$idx;
    break;
    case 'delete' :
      $sql = "DELETE FROM board WHERE idx = '{$idx}';";
    break;
  }

  if ($db->query($sql)) {       // ������ ����
    header('Location:'.$url);   // �������� ���������� ����Ǹ� ������ �̵�
  } else {
    print_r($db->errorInfo());  // �������� ������ ������ ���� ���
  }

  // action.php�� �ҷ��� ���, action.php �ڿ� ��µ� ������ ������ �Ѵ�.
  exit;