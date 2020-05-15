<?php
// db connection
$db = new PDO("mysql:host=localhost;dbname=20190428;charset=utf8","root","");
$page = $_GET['page'] ?? 'list';
$idx = $_GET['idx'] ?? NULL;
$titles = [
  'list'=>'BBS LIST 02',
  'write'=>'BBS WRITE 02',
  'view'=>'BBS VIEW',
  'update'=>'BBS UPDATE 02'
];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $titles[$page] ?></title>
  </head>
  <body>
    <?php include_once("./{$page}.php"); ?>
  </body>
</html>