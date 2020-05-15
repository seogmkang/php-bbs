<!DOCTYPE html>
<html lang="us">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
    $db= new PDO("mysql:host=127.0.0.1;dbname=20190416;charset=utf8","root","");
    if(isset($_POST['action'])){
      switch($_POST['action']){
        case 'insert' :
        $sql = "INSERT INTO comment(idx, content,reg_date) VALUES(null, '{$_POST['content']}', now())";
        break;
        case 'update' :
          $sql = "UPDATE comment SET content='{$_POST['content']}' WHERE idx='{$_POST['idx']}'";
          break;
        case 'delete' :
          $sql = "DELETE FROM comment WHERE idx='{$_POST['idx']}'";
          break;
      }
      $db->query($sql);
    }

    $data = $db->query("SELECT * FROM comment")->fetchAll();

    foreach($data as $list){
      echo "<p>{$list['idx']} / {$list['content']} / {$list['reg_date']}</p>";
    }
  ?>

<form action="" method="post">
  <fieldset><legend>Add</legend>
    <input type="hidden" name="action" value="insert">
    <input type="text" name="content" size="60" placeholder="Contents">
    <input type="submit" value="Submit">
    </fieldset>
</form>

<form action="" method="post">
  <fieldset><legend>Update</legend>
    <input type="hidden" name="action" value="update">
    <input type="text" name="idx" size="10" placeholder="Number">
    <input type="text" name="content" size="60" placeholder="Contents">
    <input type="submit" value="Submit">
    </fieldset>
</form>

<form action="" method="post">
  <fieldset><legend>Delete</legend>
    <input type="hidden" name="action" value="delete">
    <input type="text" name="idx" size="10" placeholder="Number">
    <input type="submit" value="Submit">
    </fieldset>
</form>

</body>  
</html>