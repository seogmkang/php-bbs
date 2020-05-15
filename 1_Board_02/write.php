<form action="./write_ok.php" method="post">
  <fieldset>
    <legend>WRITE</legend>
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