<form  method="post">
<label>Hobby</label>
<br><br>
<input type="checkbox" name="hobby[]" value="reading" />reading<br />
<input type="checkbox" name="hobby[]" value="gardening" />gardening<br />
<input type="checkbox" name="hobby[]" value="traveling" />traveling<br />
<br>
  <input type="submit" value="Submit">Submit</form>
</form>

<?php
 print_r($_POST["hobby"]);
?>