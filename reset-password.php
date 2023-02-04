<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Sholinghur Saloon</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="includes/css/login.css" rel="stylesheet">
      <script src="includes/js/jquery.min.js"></script>
      <script src="includes/js/jquery-ui.min.js"></script>
   </head>
   <body>
        <div class="content">
        <div class="container">
        <div class="connexion">

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
        $query = mysqli_query($dbcon,
        "SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `email`='".$email."';"
        );
        $curDate = date("Y-m-d H:i:s");
        if (mysqli_num_rows($query) > 0) {
        $row= mysqli_fetch_array($query);
        if($row['exp_date'] >= $curDate){ ?>
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
        </div>
        </div>
        </div>
   </body>
</html>