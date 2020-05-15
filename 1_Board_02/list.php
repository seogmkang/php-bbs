<?php
$rows = $db->query("SELECT * FROM board")->fetchAll(PDO::FETCH_OBJ);
foreach($rows as $list) {
?>
  <li>
    <?php echo $list->idx ?> /
    <a href="./?page=view&amp;idx=<?php echo $list->idx ?>"><?php echo $list->subject ?></a> /
    <?php echo $list->writer ?> /
    <?php echo $list->reg_date ?>
  </li>
<?php
}
?>
<p>
  <a href="./?page=write">WRITE</a>
</p>