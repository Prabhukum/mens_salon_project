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
              </div>
        </div>
        </div>
   </body>
</html>