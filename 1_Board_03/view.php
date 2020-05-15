<?php
$sql = "SELECT * FROM board WHERE idx = '{$idx}'";
$row = $db->query($sql)->fetch(PDO::FETCH_OBJ);
?>
<form action="" method="POST">
  <input type="hidden" name="action" value="delete">
</form>
<ul>
  <li><?php echo $row->idx ?></li>
  <li><?php echo $row->writer ?></li>
  <li><?php echo $row->subject ?></li>
  <li><?php echo $row->reg_date ?></li>
  <li><?php echo $row->content ?></li>        
</ul>
<p>
  <a href="./?page=update&amp;idx=<?php echo $idx?>">UPDATE</a>
  <a href="#" onclick="document.forms[0].submit(); return false;">DELETE</a>
  <a href="./">LIST</a>
</p>
