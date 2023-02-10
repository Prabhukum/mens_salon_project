<?php
require 'login_ui.php';
  echo $ui_top;
?>

<?php
            if(isset($_POST['password']) && $_POST['reset_link_token'] && $_POST['email'])
            {
            include("includes/config.php");
            $emailId = $_POST['email'];
            $token = $_POST['reset_link_token'];
            $password = md5(sha1($_POST['password']));
            $statement = $pdo->prepare("SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `email`='".$emailId."'");
            $statement->execute();

            if ($statement->rowCount() > 0) {
            $statement = $pdo->prepare("UPDATE users set  password='" . $password . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE email='" . $emailId . "'");
            $statement->execute();
            echo '<p>Congratulations! Your password has been updated successfully.</p>
            <br><br><br>
            <div class="login-box">
              <a href="index.php"><input type="submit" value="Goto Home Page" class="submit"></a>
            </div>';
            }else{
            echo '<p>Something goes wrong. Please try again</p>';
            }
            }
        ?>

<?php
  echo $ui_bottom;
?>