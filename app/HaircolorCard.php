<?php
	include("../includes/config.php");
    include("/app/index.php");
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HairColor</title>
        <link rel="stylesheet" href="../includes/css/haircolor.css">
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="app\saloon\favicon.ico" width="30" height="30" alt=""> mens salon</a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#offcanvasDark" aria-controls="offcanvasDarkLabel" aria-expanded="false" aria-label="Toggle navigation"> -->
      <button class="btn btn-secondary d-sm-block d-md-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDarkLabel"><span class="navbar-toggler-icon"></span></button>
      
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">TIRUTTANI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SHOLINGUR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ARAKKONAM</a>
          </li> -->
          <!-- <?php
          if(!$_SESSION['id']) {
            echo '          <li class="nav-item">
            <a class="nav-link mr-15"href="login.php">Login/signUp <img src="app\icons\user.png" width="20" height="20" alt=""></i></a>
          </li>';
          } else {
            echo '          <li class="nav-item">
            <a class="nav-link "href="logout.php">LogOut</a>
          </li>';
          }
          ?> -->
        </ul>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDarkLabel">Toggle top offcanvas</button>
      </div>
    </div>
  </nav>
        </header>
    <main>
<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title text-light" id="offcanvasDarkLabel">Offcanvas top</h5>   
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  
  <div class="offcanvas-body">
    <?php 
      $statement = $pdo->prepare("SELECT * FROM navbar");
      $statement->execute();
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);  
      foreach ($result as $row) { 
    ?>
      <a href="#" class="text-light"><?php echo $row['nav_item']; ?></a><hr class=" text-light">
   <?php
      }
    ?>
  </div>
</div>


    <div class="container" style="margin-top:50px;">
        <div class="row">
            
        <div class="col-md-3">
                <div class="card-sl">
                  
                <div class="card-image">
                        <img src="../app/icons/perm-men-hairstyles-wavy-bowl-cut-medium-layered-683x1024.jpg" />
                    </div>
                       <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                    <div class="card-heading">
                        Audi Q8
                    </div>
                    <div class="card-text">
                        Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
                    </div>
                    <div class="card-text">
                        $67,400
                    </div>
                    <a href="#" class="card-button"> Purchase</a>
                </div>
            </div>
        </div>  

          <!-- FOOTER -->
  <footer class="container d-sm-block">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot;  <a href="#">Contact Us</a></p>
  </footer>
        </main>
    </body>
    </html>