<?php
// db connection
$db = new PDO("mysql:host=localhost;dbname=20190428;charset=utf8","root","");
$sql = "SELECT * FROM board WHERE idx='{$_GET['idx']}'";
$row = $db->query($sql)->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <title>BBS VIEW</title>
  </head>

  <body>
    <ul>
      <li><?php echo $row->idx ?></li>
      <li><?php echo $row->writer ?></li>
      <li><?php echo $row->subject ?></li>
      <li><?php echo $row->reg_date ?></li>
      <li><?php echo $row->content ?></li>            
    </ul>

    <p>
      <a href="./update.php?idx=<?php echo $row->idx?>">UPDATE</a>
      <a href="./delete.php?idx=<?php echo $row->idx?>">DELETE</a>
      <a href="./index.php">LIST</a>
    </p>
  </body>
</html>