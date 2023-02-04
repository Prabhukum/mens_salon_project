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
              
        <?php
            if(isset($_POST['password']) && $_POST['reset_link_token'] && $_POST['email'])
            {
            include("includes/config.php");
            $emailId = $_POST['email'];
            $token = $_POST['reset_link_token'];
            $password = md5(sha1($_POST['password']));
            $query = mysqli_query($dbcon,"SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `email`='".$emailId."'");
            $row = mysqli_num_rows($query);
            if($row){
            mysqli_query($dbcon,"UPDATE users set  password='" . $password . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE email='" . $emailId . "'");
            echo '<p>Congratulations! Your password has been updated successfully.</p>';
            }else{
            echo "<p>Something goes wrong. Please try again</p>";
            }
            }
        ?>

        </div>
        </div>
        </div>
   </body>
</html>