<?php
// DB ����
$db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8","root","");

// �ּҿ��� ���� ��������
$page = $_GET['page'] ?? 'list';
$idx = $_GET['idx'] ?? NULL;

// Ÿ��Ʋ ����
$titles = [
  'list'=>'BBS LIST',
  'write'=>'BBS WRITE',
  'update'=>'BBS UPDATE'
];