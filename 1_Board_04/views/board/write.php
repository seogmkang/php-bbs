<!--
  action="" ���� ó�� �� ��� ������������ ���۰��� �ѱ��
  ��, ������������ ./?page=view&idx=1  �� ���,
  ./?page=view&idx=1 ���ٰ� �Է� ������ �����Ѵ�.
  �׷��� index.php��
  if (isset($_POST['action'])) { }
  �κп��� ó���� �ϵ��� ��.
-->
<form action="" method="post">
  <fieldset>
    <legend>WRITE</legend>
    <!-- ������ ��� $_POST['action']�� insert �Ҵ� -->
    <input type="hidden" name="action" value="insert"> 
    <ul>
      <li>
        <label>
          TITLE
          <input type="text" name="subject">
        </label>
      </li>
      <li>
        <label>
          WRITER
          <input type="text" name="writer">
        </label>
      </li>
      <li>
        <label>
          CONTENTS
          <input type="text" name="content" size="80">
        </label>
      </li>
      <li>
        <button type="submit">FINISH</button>
        <button type="button" onclick="location.href = './'">CANCEL</button>
      </li>
    </ul>
  </fieldset>
</form>