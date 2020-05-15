<?php
// DB 연결
$db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8","root","");

// 주소에서 변수 가져오기
$page = $_GET['page'] ?? 'list';
$idx = $_GET['idx'] ?? NULL;

// 타이틀 설정
$titles = [
  'list'=>'BBS LIST',
  'write'=>'BBS WRITE',
  'update'=>'BBS UPDATE'
];