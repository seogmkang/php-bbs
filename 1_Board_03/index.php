<?php
// db connection
$db = new PDO("mysql:host=localhost;dbname=20190428;charset=utf8","root","");
$page = $_GET['page'] ?? 'list';
$idx = $_GET['idx'] ?? NULL;
$titles = [
  'list'=>'BBS LIST',
  'write'=>'BBS WRITE',
  'update'=>'BBS UPDATE'
];

if (isset($_POST['action'])) {include_once('./action.php');}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $titles[$page] ?></title>
  </head>
  <body>
    <?php include_once("./{$page}.php") ?>
  </body>
</html>