<?php

  // ����޼��� 
  function alert ($str) {
    echo "<script>alert('{$str}')</script>";
  }

  // �������̵�
  function move ($str = false) {
    echo "<script>";
    echo $str ? "location.replace('{$str}')" : "history.back();";
    echo "</script>";
    exit;
  }

  // ���� �˻� + ���â + �������̵�
  function access ($bool, $msg, $url = false) {
    if (!$bool) { // ������ �������� ���ϸ�
      alert($msg); // ���â�� ��� ��
      move($url); // ������ �̵�
    }
  }

  // �� �ٷ� ���
  function println ($ele) {
    echo "<p>{$ele}</p>";
  }

  // ����׸� ���� print
  function print_pre ($ele) {
    echo "<pre>";
    print_r($ele);
    echo "</pre>";
  }

  // ������ ����
  function query ($sql, $arr = []) {
    $db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8","root","");
    $res = $db->query($sql);
    // ���� ����
    if ($res) {
      $db = null; // ���� ����
      return $res;
    } else {
      // ������ ���� �� �������� ���� ��� �� ���α׷� ����
      println($sql);
      print_pre($db->errorInfo());
      exit;
    }
  }

  // ���� ������ ��������
  function fetch ($sql) {
    return query($sql)->fetch(PDO::FETCH_OBJ);
  }

  // ���� ������ ��������
  function fetchAll ($sql) {
    return query($sql)->fetchAll(PDO::FETCH_OBJ);
  }

  // �������� ���� ��������
  function rowCount ($sql) {
    return query($sql)->rowCount();
  }