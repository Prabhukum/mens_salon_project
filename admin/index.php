<?php
	include("../includes/config.php");
	ini_set("display_errors","0");
	include("../includes/queries.php");
	
	if($_SESSION['is_admin'])
        header("Location:product.php");
    else if($_POST["username-ver"] && $_POST["password-ver"])
	{
		$username = $_POST["username-ver"];
		$password = md5(sha1($_POST["password-ver"]));
		
		// $userData = login($username, $password);
        $statement = $pdo->prepare("Select * from users Where username = ? && password = ? && is_admin = ?");
		$statement->execute(array($username,$password,1));
		if ($statement->rowCount() > 0)
		{
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $user) {
                echo $user['id'];
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['is_admin'] = $user['is_admin'];
                header("Location:product.php");
            }
		}
		else
			$error = "*** Please enter Proper credentials.";
	}
	else
		$error = "";
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Mens Look Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="../includes/css/login.css" rel="stylesheet">
      <script src="../includes/js/jquery.min.js"></script>
      <script src="../includes/js/jquery-ui.min.js"></script>
      <link rel="icon" href="../includes/images/favicon.ico" type="image/x-icon"/>
   </head>
   <body>
        <div class="content ">

        <div class="container">

            <div class="connexion">
            <div class="contact-form">
                <form method="POST" id="login">
                    <label>Username</label>
                    <input type="text" id="username" name="username-ver">
                    <label>Password</label>
                    <input type="password" id="password" name="password-ver">
                    <br>
                    <br>
                    <br>
                    </div>
                    <div class="login-box">
                        <input class="submit" value="SIGN IN" type="submit">
                    </div>
                    <br>
                    <?php echo $error; ?>
                    <?php echo $error_res; ?>
                </form>
                </div>
                <hr>
            </div>
        </div>
        </div>
   </body>
</html>