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
        <div class="connexion">

        <?php
	use PHPMailer\PHPMailer\PHPMailer;
	//use mailer\src\Exception;
	require 'mailer/src/PHPMailer.php';
	require 'mailer/src/Exception.php';
	require 'mailer/src/SMTP.php';

if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    include("includes/config.php");
     
    $emailId = $_POST['email'];
 
    $result = mysqli_query($dbcon,"SELECT * FROM users WHERE email='" . $emailId . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($dbcon,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
      if ($mode == "local") {
        $link = "<a href='http://localhost/SS/reset-password.php?key=" . $emailId . "&token=" . $token . "'>Click To Reset password</a>";
      } elseif ($mode == "production") {
        $link = "<a href='https://sholinghur-saloon.my-style.in/reset-password.php?key=" . $emailId . "&token=" . $token . "'>Click To Reset password</a>";
      }
    require_once('vendor/autoload.php');
 
    $mail = new PHPMailer();
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "theenderxxx@gmail.com";
    // GMAIL password
    $mail->Password = "gquentacdtfjzdga";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='theenderxxx@gmail.com';
    $mail->FromName='Saloon Sholinghur Admin';
    $mail->AddAddress($emailId, 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Use this link to Reset your Password '.$link.'';
    if($mail->Send())
    {
      echo '<p>Check Your Email and Click on the link sent to your email.</p>
      <br><br><br>
      <div class="login-box">
        <a href="login.php"><input type="submit" value="Goto Login Page" class="submit"></a>
      </div>';
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
}
?>

        </div>
        </div>
   </body>
</html>