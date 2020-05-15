<?php
  // 기존의 입력 정보 가져오기
  $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
  $row = $db->query($sql)->fetch(PDO::FETCH_OBJ);
?>
<ul>
  <li><?php echo $row->idx ?></li>
  <li><?php echo $row->writer ?></li>
  <li><?php echo $row->subject ?></li>
  <li><?php echo $row->reg_date ?></li>
  <li><?php echo $row->content ?></li>
</ul>
<p>
  <a href="./?page=update&amp;idx=<?php echo $idx?>">UPDATE</a>
  <a href="./delete.php?idx=<?php echo $idx?>">DELETE</a>
  <a href="./">LIST</a>
</p>