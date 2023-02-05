<?php
	include("includes/config.php");
	ini_set("display_errors","0");
	include("includes/queries.php");
	
	if($_SESSION['id'])
		header("Location:app/index.php");
    else if($_POST["username-ver"] && $_POST["password-ver"])
	{
		$username = $_POST["username-ver"];
		$password = md5(sha1($_POST["password-ver"]));
		
		$userData = login($username, $password);

		if (mysqli_num_rows($userData) > 0)
		{
			$user = mysqli_fetch_assoc($userData);
			$_SESSION['id'] = $user['id'];
			$_SESSION['username'] = $user['username'];
			header("Location:app/index.php");
		}
		else
			$error = "*** Please enter Proper credentials.";
	}
    else if ($_POST["username-res"] && $_POST["password-res"] && $_POST["email-res"] && $_POST["phone-res"]) {
        $username = $_POST["username-res"];
		$password = md5(sha1($_POST["password-res"]));
        $email = $_POST["email-res"];
        $phone = $_POST["phone-res"];

        $error_res = register($username, $password, $email, $phone);
        if($error_res == true) {
            $error = $error_res = "";
        } else {
            $error = "*** Please enter Proper credentials.";
            $error_res = "";
        }
    }
	else
		$error = "";
?>

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
      <link rel="icon" href="includes/images/favicon.ico" type="image/x-icon"/>
   </head>
   <body>
        <div class="content">

        <div class="container">

            <div class="menu">
                <a href="#connexion" class="btn-connexion">
                    <h2>Login</h2>
                </a>
                <a href="#enregistrer" class="btn-enregistrer active">
                    <h2>Register</h2>
                </a>
            </div>
            <div class="connexion">
            <div class="contact-form">
                <form method="POST" id="login">
                    <label>Username</label>
                    <input type="text" id="username" name="username-ver">
                    <label>Password</label>
                    <input type="password" id="password" name="password-ver">

                    <div class="check">
                    <label>
                        <input id="check" type="checkbox" class="checkbox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
                            <path class="path-back"
                                d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6" />
                            <path class="path-moving"
                                d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6" />
                        </svg>
                    </label>
                    <h3>Keep me signed in</h3>
                    
                    </div>
                    <div class="login-box">
                        <input class="submit" value="SIGN IN" type="submit">
                    </div>
                    <br>
                    <?php echo $error; ?>
                    <?php echo $error_res; ?>
                    <br>
                </form>
                </div>
                <hr>
                <a href="forget-password.php">
                    <h4>Forgot password?</h4>
                </a>
            </div>
            <div class="enregistrer active-section">
                <div class="contact-form">
                <form method="POST" id="register">
                    <label>Username</label>
                    <input placeholder="" type="text" name="username-res">
                    <label>E-mail</label>
                    <input placeholder="" type="text" name="email-res">
                    <label>Phone</label>
                    <input placeholder="" type="text" name="phone-res">
                    <label>Password</label>
                    <input type="password" placeholder="" name="password-res">
                    <div class="check">
                    <label>
                        <input id="check" type="checkbox" class="checkbox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
                            <path class="path-back"
                                d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6" />
                            <path class="path-moving"
                                d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6" />
                        </svg>
                    </label>
                    <h3>I agree</h3>
                    </div>
                    <div class="login-box">
                    <input class="submit" value="SIGN UP" type="submit">
                    </div>
                    <?php echo $error_res; ?><br>
                    <br>
                </form>
                </div>
            </div>
        </div>
        </div>
   </body>
   <script id="rendered-js">
      $('.btn-enregistrer').click(function () {
          $('.connexion').addClass('remove-section');
          $('.enregistrer').removeClass('active-section');
          $('.btn-enregistrer').removeClass('active');
          $('.btn-connexion').addClass('active');
      });
      
      $('.btn-connexion').click(function () {
          $('.connexion').removeClass('remove-section');
          $('.enregistrer').addClass('active-section');
          $('.btn-enregistrer').addClass('active');
          $('.btn-connexion').removeClass('active');
      });
   </script>
</html>