<?php
require 'login_ui.php';
  echo $ui_top;
?>
<form action="password-reset-token.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="login-box">
    <br>
    <br>
    <input type="submit" value="Get Link" name="password-reset-token" class="submit">
  </div>
</form>
<?php
  echo $ui_bottom;
?>