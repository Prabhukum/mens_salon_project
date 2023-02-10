<?php
require 'login_ui.php';
  echo $ui_top;
?>

<div class="card">
        <div class="card-header text-center" style="font-size: 25px;padding: 10px 80px;">
                Reset Password
        </div>
        <div class="card-body">
                <?php
        if($_GET['key'] && $_GET['token'])
        {
        include("includes/config.php");
        $email = $_GET['key'];
        $token = $_GET['token'];
        // $query = mysqli_query($dbcon,"SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `email`='".$email."';");
        $statement = $pdo->prepare("SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `email`='".$email."'");
        $statement->execute();
        $curDate = date("Y-m-d H:i:s");
        if ($statement->rowCount() > 0) {
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as $row) {
                        $expTime = $row['exp_date'];
                }
        if($expTime >= $curDate){ ?>
                <form action="update-forget-password.php" method="post">
                        <input type="hidden" name="email" value="<?php echo $email;?>">
                        <input type="hidden" name="reset_link_token" value="<?php echo $token;?>">
                        <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name='password' class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" name='cpassword' class="form-control">
                        </div>
                        <div class="login-box">
                                <br>
                                <br>
                                <input type="submit" name="new-password" value="Reset" class="submit">
                        </div>
                </form>
                <?php } } else{
                echo "<p>This forget password link has been expired</p>";
        }
        }
        ?>
        </div>
        </div>
<?php
  echo $ui_bottom;
?>