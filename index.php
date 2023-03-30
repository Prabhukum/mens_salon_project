<?php
	include("includes/config.php");
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"> </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <link rel="stylesheet" href="includes\css\carousel.css">
    
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
      .bg-nav {
          background-color: #383838;
          font-family: cursive;
          color:#e1e4dc;
        }
    </style>
    <!-- Custom styles for this template -->
  </head>

  <header>
    <div class="container">


  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="..\app\saloon\favicon.ico" width="30" height="30" alt=""> Men's Saloon</a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#offcanvasDark" aria-controls="offcanvasDarkLabel" aria-expanded="false" aria-label="Toggle navigation"> -->
      <button class="btn btn-secondary d-sm-block d-md-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDarkLabel"><span class="navbar-toggler-icon"></span></button>
      
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
         <!--           <li class="nav-item">
            <a class="nav-link mr-15"href="login.php">Login/signUp <img src="app\icons\user.png" width="20" height="20" alt=""></i></a>
          </li> -->
        </ul>
    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDarkLabel">Menu</button>
      </div>
    </div>
  </nav>

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
          echo '<a href="../login.php" class="text-light">Login/Sign up</a><hr class=" text-light">';
        } else {
          echo '<a href="../logout.php" class="text-light">Logout</a><hr class=" text-light">';
        }
      ?>
    </div>
  </div>
</header>

<body>

<main>

<!-- End of offcanvas -->
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <video class="img-fluid" autoplay loop muted><source src="app\videos\V1 Adobeexpress.mp4" type="video/mp4" /></video>
        <div class="carousel-caption d-md-block">
          <h1>Salon at home experience</h1>
          <p class="mb-sm-2">"Welcome to the comfort of your own home..</p>
          <p><a class="btn btn-lg btn-dark" href="#scrolldown">Book Services &raquo;</a></p> 
        </div>
      </div>
      <div class="carousel-item">
        <video class="img-fluid" autoplay loop muted><source src="app\videos\pexels-dronca-rafael-7085993.mp4" type="video/mp4" /></video>
        <div class="carousel-caption d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <video class="img-fluid" autoplay loop muted><source src="app/videos/V3.mp4" type="video/mp4" /></video>
        <div class="carousel-caption d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


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
        <div class="py-3 bg-white">
          <div class="container w-100">
            <div class="card shadow card-body1">
               <div>
                 <a href="app/<?php echo $row['s_link']; ?>"><img src="app/saloon/<?php echo $row['s_image']; ?>" class="roundeds mt-4" width="220" height="220" alt=""></a>  
               </div>
                    <div>
                      <h2 class="mt-lg-3"><?php echo $row['s_name']; ?></h2>
                        <p class="mt-lg-4 px-lg-5"><?php echo $row['s_desc']; ?></p>
                        <p><a class="btn btn-dark mt-lg-2 mb-3" href="app/<?php echo $row['s_link']; ?>">View details &raquo;</a></p>
                   </div>
              </div>
          </div>
        </div>
      </div>

       <!-- <div class="col-lg-4  mt-5">
          <a href="app/<?php echo $row['s_link']; ?>"><img src="app/saloon/<?php echo $row['s_image']; ?>" class="rounded mb-2" width="240" height="240" alt=""></a>  
          <h2 class="mt-lg-3"><?php echo $row['s_name']; ?></h2>
          <p class="mt-lg-4 px-lg-5"><?php echo $row['s_desc']; ?></p>
          <p><a class="btn btn-dark mt-lg-2" href="app/<?php echo $row['s_link']; ?>">View details &raquo;</a></p>
        </div> -->

     <?php
          if($i == 2 || $i == 5){
            echo '</div></div>';
          }
          $i++;
        }
      ?>	

<!----------------------------------------------------------------------------------------------------------->


    <!----------------- START THE FEATURETTES ------------>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><a href="hair straightening page">Hair Straightening</a><span class="text-muted"><br>It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>

       <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <video class="img-fluid" autoplay loop muted><source src="app\videos\Production Id 3997179 Adobeexpress_preview.mp4" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" type="video/mp4" /></video>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><a href="app\facial.php">facial </a><span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="https://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>  -->
        <video class="img-fluid" autoplay loop muted><source src="app\videos\pexels-tima-miroshnichenko-7607766_AdobeExpress.mp4" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" type="video/mp4" /></video>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- <div class="row featurette"> image container backgound -->
      <div class="col-md-7">
        <h2 class="featurette-heading" class="rounded">And lastly,<a href="head massage page"><kbd>Head massage</kbd></a><span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
       <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="https://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>  -->
       <video class="img-fluid" autoplay loop muted><source src="app\videos\Pexels-Kelly-Lacy-9737984 Adobeexpress_preview.mp4" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" type="video/mp4" /></video>
      </div> 
    </div>
   
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
 
  </div><!-- /.container -->

  <!-- FOOTER -->

</main>
    </div>  

  </body>
  <?php require_once("app/footer.php"); ?>  
</html>


