<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=20190428;charset=utf8","root","");
$sql = "SELECT * FROM board WHERE idx='{$_GET['idx']}'";
$row = $db->query($sql)->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BBS UPDATE</title>
</head>
<body>
  <form action="./update_ok.php?idx=<?php echo $_GET['idx']?>" method="POST">
    <fieldset>
      <legend>UPDATE</legend>
      <ul>
        <li>
          <label>
            TITLE COLUMN
            <input type="text" name="subject" value="<?php echo $row->subject ?>">
          </label>
        </li>
        <li>
          <label>
            WRITER COLUMN
            <input type="text" name="writer" value="<?php echo $row->writer ?>">
          </label>
        </li>
        <li>
          <label>
            CONTENTS COLUMN
            <input type="text" name="content" value="<?php echo $row->content ?>" size="80">
          </label>
        </li>
        <li>
          <label>
            <button type="submit">FINISH</button>
            <button type="button" onclick="location.href='./view.php?idx=<?php echo $row->idx ?>'">CANCEL</button>
          </label>
        </li>
      </ul>
    </fieldset>
  </form>
</body>
</html>