<!--
  action="" 으로 처리 할 경우 현재페이지로 전송값을 넘긴다
  즉, 현재페이지가 ./?page=view&idx=1  일 경우,
  ./?page=view&idx=1 에다가 입력 정보를 전송한다.
  그러면 index.php의
  if (isset($_POST['action'])) { }
  부분에서 처리를 하도록 함.
-->
<form action="" method="post">
  <fieldset>
    <legend>WRITE</legend>
    <!-- 전송할 경우 $_POST['action']에 insert 할당 -->
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