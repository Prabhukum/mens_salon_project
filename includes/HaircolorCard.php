-- <?php
	include("includes/config.php");
  include("includes/index.php");
  	// if(!$_SESSION['id'])
	// 	header("Location:login.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Men's Look</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" href="saloon/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->

    <style>
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .cta2-heading {
    position: relative;
    z-index: 1;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="app\carousel.css">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="app\saloon\favicon.ico" width="30" height="30" alt=""> Men's Saloon</a>
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
    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDarkLabel">Menu</button>
      </div>
    </div>
  </nav>
</header>

<main>
<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title text-light" id="offcanvasDarkLabel">Menu</h5>
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
    <?php
      if(!$_SESSION['id']) {
        echo '<a href="login.php" class="text-light">Login/Sign up</a><hr class=" text-light">';
      } else {
        echo '<a href="logout.php" class="text-light">Logout</a><hr class=" text-light">';
      }
    ?>
  </div>
</div>
<!-- End of offcanvas -->


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

 
   

    <!-- Three columns of text below the carousel -->


<!---------------------haircut for men &kids ------------------------------------->
      <?php
        $statement = $pdo->prepare("SELECT * FROM tbl_services where s_is_active=?");
        // $statement = $pdo->prepare("SELECT * FROM tbl_product");
        $statement->execute(array(1));
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);  
        $i = 0;                         
        foreach ($result as $row) {
          if($i == 0 || $i == 3){
            echo ' <div class="container-fluid marketing" id="scrolldown"><div class="row services">';
          }
      ?>      
        <div class="col-lg-4 mt-5">
          <a href="app/<?php echo $row['s_link']; ?>"><img src="app/saloon/<?php echo $row['s_image']; ?>" class="rounded mb-2" width="140" height="140" alt=""></a>  
          <h2 class="mt-lg-3"><?php echo $row['s_name']; ?></h2>
          <p class="mt-lg-4 px-lg-5"><?php echo $row['s_desc']; ?></p>
          <p><a class="btn btn-dark mt-lg-2" href="app/<?php echo $row['s_link']; ?>">View details &raquo;</a></p>
        </div>

     <?php
          if($i == 2 || $i == 5){
            echo '</div></div>';
          }
          $i++;
        }
      ?>	

<!----------------------------------------------------------------------------------------------------------->


    <!----------------- START THE FEATURETTES ------------>


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