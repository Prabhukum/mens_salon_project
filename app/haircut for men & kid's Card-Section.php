<?php
	include("../includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>HairCut for Men's & Kids</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>
  <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
rel="stylesheet"
/>
<!-- Owl corousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />
<!-- Checking purpose -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="../includes/css/hair_cut_for_men.css" rel="stylesheet">
</head>

<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="..\app\saloon\favicon.ico" width="30" height="30" alt=""> Men's Saloon</a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#offcanvasDark" aria-controls="offcanvasDarkLabel" aria-expanded="false" aria-label="Toggle navigation"> -->
      <button class="btn btn-secondary d-sm-block d-md-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDarkLabel"><span class="navbar-toggler-icon"></span></button>
      
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
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
</header>

<body>
  <div class="header">
 </div>
    <div class="container content-items">
      <div class="content-text mt-5">
      <div class="banner d-lg-flex justify-content-between">
        <div class="banner-content">
          <h1>Best  <b>gromming for men</b> at home</h1>
          <h3>Sit back and relax</h3>
        </div>
      <div class="banner-button m-lg-auto">
        <button class="btn-lg book-btn">Book Now</button>
      </div>
      </div>
        <hr class="my-lg-4 my-sm-2">

        <!-- Featured services links -->
        
        <div class="container-xl">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-info">Featured <b>Services</b></h2>
              <div id="myCarousel" class="carousel slide d-none d-lg-block" data-ride="carousel" data-interval="0">
              <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
              
              </ol>   
              <!-- Wrapper for carousel items -->
              <div class="carousel-inner ">
                <div class="item carousel-item active">
                  <div class="row">


                  <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_featured=? AND p_is_active=?");
                    // $statement = $pdo->prepare("SELECT * FROM tbl_product");
                    $statement->execute(array(1,1));
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                  ?>
                    <div class="col-sm-3">
                      <div class="thumb-wrapper bg-dark">
                         
                        <div class="img-box">
                          <img src="saloon/<?php echo $row['p_featured_photo']; ?>" class="img-fluid" alt="<?php echo $row['p_name']; ?>">									
                        </div>
                        <div class="thumb-content">
                          <h><?php echo $row['p_name']; ?></h>									
                          <div class="star-rating">
                            <ul class="list-inline">
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              
                            </ul>
                          </div>
                          <p class="item-price"><strike>₹<?php echo $row['p_old_price']; ?></strike> <b><?php echo $row['p_current_price']; ?> </b></p>
                          
                          <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>						
                      </div>
                    </div>

                    <?php
                    }
                  ?>		
                    </div>				
                  </div>
                </div>
              </div>
              <!-- Carousel controls -->
              <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
               <!-- For small devices -->
              <div class="container d-lg-none d-md-block d-sm-block">
               <div class="owl-carousel owl-theme">

               <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_featured=? AND p_is_active=?");
                    // $statement = $pdo->prepare("SELECT * FROM tbl_product");
                    $statement->execute(array(1,1));
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                  ?>
                <div class="item"><div class="thumb-wrapper bg-dark">
                         
                  <div class="img-box">
                    <img src="saloon/<?php echo $row['p_featured_photo']; ?>" class="img-fluid" alt="<?php echo $row['p_name']; ?>">									
                  </div>
                  <div class="thumb-content">
                    <h><?php echo $row['p_name']; ?></h>									
                    <div class="star-rating">
                      <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                       
                      </ul>
                    </div>
                    <p class="item-price"><strike>₹<?php echo $row['p_old_price']; ?></strike> <b><?php echo $row['p_current_price']; ?> </b></p>
         
                    <a href="#" class="btn btn-primary btn-small">Add to Cart</a>
                  </div>						
                </div></div>

                <?php
                    }
                ?>	
              </div>
            </div>
            </div>
          </div>
        </div>
        <hr class="my-4">
        <!-- Services-list -->
        <section>
          <h1 class="d-flex justify-content-center">Hair Care</h1>
          <div class="container py-5 d-none d-lg-block">

          <?php
                $statement = $pdo->prepare("SELECT * FROM tbl_product where ecat_id =?");
                $statement->execute(array(105));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                foreach ($result as $row) {
            ?>

            <div class="row justify-content-center mb-3">
              <div class="col-md-12 col-xl-10">
                <div class="card shadow-5-strong border-0 bg-dark rounded">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                          <img src="icons/<?php echo $row['p_featured_photo']; ?>"
                            class="w-100"/>
                          <a href="#!">
                            <div class="hover-overlay">
                              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5><?php echo $row['p_name']; ?></h5>
                           <div class="d-flex flex-row">
                            <span class="mt-1">• <?php echo $row['p_service_time']; ?></span>
                        </div>
                        <div class="mt-3 mb-0 text-muted small">
                          <span><?php echo $row['p_description']; ?></span><br>
                          <span class="text-primary"> • </span>
                          <span><?php echo $row['p_short_description']; ?></span>
                          <span class="text-primary"> • </span>
                          <span><?php echo $row['p_feature']; ?><br /></span>
                        </div>
                        <p class="mt-4 mb-4 mb-md-0">Let your hair do the talking.</p>
                      </div>

                      <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                        <div class="d-flex flex-row align-items-center mb-1">
                          <h4 class="mb-1 me-1">₹<?php echo $row['p_current_price']; ?></h4>
                          <span class="text-danger"><s>₹<?php echo $row['p_old_price']; ?></s></span>
                        </div>
                        <h6 class="text-success">Free home services</h6>
                        <div class="d-flex flex-column mt-4">
                            <button class="btn-small-ser mt-2" type="button">
                            Book now
                          </button>
                          <button class="btn-small-ser mt-2" type="button">
                            Add to wishlist
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <?php
                }
            ?>	
            </div>

          <!-- Small devices -->
          <div class="container py-5 d-lg-none d-md-block d-sm-block">

          <?php
                $statement = $pdo->prepare("SELECT * FROM tbl_product where ecat_id =?");
                $statement->execute(array(105));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                foreach ($result as $row) {
            ?>

          <div class="row justify-content-center mb-3">
          <div class="col-md-12 col-xl-10">
          <div class="card shadow-5-strong border-0 bg-dark rounded">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                          <img src="icons/<?php echo $row['p_featured_photo']; ?>"
                            class="w-100"/>
                          <a href="#!">
                            <div class="hover-overlay">
                              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-xl-6">
                        <h5><?php echo $row['p_name']; ?></h5>
                        
                        <div class="d-flex flex-row">
                       
                            <span class="mt-1">• <?php echo $row['p_service_time']; ?></span>
                        </div>
                        <div class="mt-3 mb-0 text-muted small">
                          <span><?php echo $row['p_description']; ?></span>
                          <span class="text-primary"> • </span>
                          <span><?php echo $row['p_short_description']; ?></span>
                          <span class="text-primary"> • </span>
                          <span><?php echo $row['p_feature']; ?><br /></span>
                        </div>
                       
                        <p class="mt-4 mb-4 mb-md-0">Let your hair do the talking.</p>
                      </div>
                      <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                        <div class="d-flex flex-row align-items-center mb-1">
                          <h4 class="mb-1 me-1">₹<?php echo $row['p_current_price']; ?></h4>
                          <span class="text-danger"><s>₹<?php echo $row['p_old_price']; ?></s></span>
                        </div>
                        <h6 class="text-success">Free home services</h6>
                        <div class="d-flex flex-column mt-4">
                          
                          <button class="btn-small-ser mt-2" type="button">
                            Book now
                          </button>
                          <button class="btn-small-ser mt-2" type="button">
                            Add to wishlist
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
                    }
            ?>	


          </div>
        </section>
      </div>
    </div>
   <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">
<?php require_once("footer.php"); ?>  
</div>
<!-- End of .container -->
    
</body>
<!-- Owl Corousl -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>
<script>

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
  </script> 
</html>