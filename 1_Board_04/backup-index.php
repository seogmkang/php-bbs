<?php
  // �� ���� ��������
  include_once('./core/config.php');

  // ������ ������ �� ó��
  if (isset($_POST['action'])) {
    include_once('./actions/board.php');
  }
  include_once('./views/template/header.php');
  include_once("./views/board/{$page}.php");
  include_once('./views/template/footer.php');