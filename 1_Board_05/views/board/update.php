<?php
  // 기본 DB 정보 가져오기
  $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
  $row = fetch($sql);
?>
<form action="" method="post">
  <fieldset>
    <legend>WRITE</legend>
    <input type="hidden" name="action" value="update">
    <ul>
      <li>
        <label>
          TITLE
          <input type="text" name="subject" value="<?php echo $row->subject?>">
        </label>
      </li>
      <li>
        <label>
          WRITER
          <input type="text" name="writer" value="<?php echo $row->writer?>">
        </label>
      </li>
      <li>
        <label>
          CONTENTS
          <input type="text" name="content" value="<?php echo $row->content?>" size="80">
        </label>
      </li>
      <li>
        <button type="submit">FINISH</button>
        <button type="button" onclick="location.href = './?page=view&amp;idx=<?php echo $idx?>'">CANCEL</button>
      </li>
    </ul>
  </fieldset>
</form>