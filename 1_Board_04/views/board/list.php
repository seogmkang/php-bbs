<?php
  $rows = $db->query("SELECT * FROM board")->fetchAll(PDO::FETCH_OBJ);
  foreach ($rows as $row) {
?>
  <li>
    <?php echo $row->idx ?> /
    <a href="./?page=view&amp;idx=<?php echo $row->idx?>"><?php echo $row->subject ?></a> /
    <?php echo $row->writer?> /
    <?php echo $row->reg_date?>
  </li>
<?php
  }
?>
</ul>
<p>
  <a href="./?page=write">WRITE</a>
</p>