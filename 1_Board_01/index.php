<?php
// DB Connection
$db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8","root","");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>BBS BOARD</title>
  </head>
  <body>
    <ul>
    <?php
      $data = $db->query("SELECT * FROM board")->fetchAll(PDO::FETCH_OBJ);
      foreach($data as $row) {
    ?>
      <li>
        <?php echo $row->idx ?> /
        <a href="./view.php?idx=<?php echo $row->idx ?>"><?php echo $row->subject ?></a> /
        <?php echo $row->writer ?> /
        <?php echo $row->reg_date ?> /
      </li>
    <?php  } ?>
    </ul>
    <p>
      <a href="./write.php">WRITE BBS</a>
    </p>    
  </body>
</html>