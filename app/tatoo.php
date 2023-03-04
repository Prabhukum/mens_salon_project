<?php
	include("../includes/config.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Different Tattoo Styles</title>
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
<link href="..\includes\css\tatoo_session.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">


<!-- swiper.js -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-nav">
    <div class="container-fluid">
      <a class="navbar-brand " href="#"> <img src="..\app\saloon\favicon.ico" width="30" height="30" alt=""> Men's Saloon</a>
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

<div class="header">
 </div>
    <div class="container content-items">
      <div class="content-text mt-5">
      <div class="banner d-lg-flex justify-content-between">
        <div class="banner-content">
          <h1>Best Tatoo <b>Designs for men</b> at home</h1>
          <h3>Sit back and relax</h3>
        </div>
      <div class="banner-button m-lg-auto">
        <button class="btn-lg book-btn">Book Now</button>
      </div>
      </div>
        <hr class="my-lg-4 my-sm-2">

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

<!-- tatoo add session -->
<body>
  <div class="container swiper mySwiper">
    <div class="card_content swiper-wrapper">
      <div class="cards swiper-slide">
        <img src="..\app\saloon\pexels-dmitry-zvolskiy-1805600.jpg " alt=""/>
        <div class="title">
          <h2>tatoo add</h2>
        </div>
        <div class="content">
          <p>checking paragraph</p>
          <div class="social_icons">
        <i class="bx bxl-facebook-circle"></i>
        <i class="bx bxl-github"></i>
        <i class="bx bxl-instagram-alt"></i>
        <i class="bx bxl-twitter"></i>
          </div>
        </div>
      </div>
      <div class="cards swiper-slide">
        <img src="..\app\saloon\pexels-dmitry-zvolskiy-1805600.jpg " alt=""/>
        <div class="title">
          <h2>tatoo add</h2>
        </div>
        <div class="content">
          <p>checking paragraph</p>
          <div class="social_icons">
        <i class="bx bxl-facebook-circle"></i>
        <i class="bx bxl-github"></i>
        <i class="bx bxl-instagram-alt"></i>
        <i class="bx bxl-twitter"></i>
          </div>
        </div>
      </div>
      <div class="cards swiper-slide">
        <img src="..\app\saloon\pexels-dmitry-zvolskiy-1805600.jpg " alt=""/>
        <div class="title">
          <h2>tatoo add</h2>
        </div>
        <div class="content">
          <p>checking paragraph</p>
          <div class="social_icons">
        <i class="bx bxl-facebook-circle"></i>
        <i class="bx bxl-github"></i>
        <i class="bx bxl-instagram-alt"></i>
        <i class="bx bxl-twitter"></i>
          </div>
        </div>
      </div>
      <div class="cards swiper-slide">
        <img src="..\app\saloon\pexels-dmitry-zvolskiy-1805600.jpg " alt=""/>
        <div class="title">
          <h2>tatoo add</h2>
        </div>
        <div class="content">
          <p>checking paragraph</p>
          <div class="social_icons">
        <i class="bx bxl-facebook-circle"></i>
        <i class="bx bxl-github"></i>
        <i class="bx bxl-instagram-alt"></i>
        <i class="bx bxl-twitter"></i>
          </div>
        </div>
      </div>
      <div class="cards swiper-slide">
        <img src="..\app\saloon\pexels-dmitry-zvolskiy-1805600.jpg " alt=""/>
        <div class="title">
          <h2>tatoo add</h2>
        </div>
        <div class="content">
          <p>checking paragraph</p>
          <div class="social_icons">
        <i class="bx bxl-facebook-circle"></i>
        <i class="bx bxl-github"></i>
        <i class="bx bxl-instagram-alt"></i>
        <i class="bx bxl-twitter"></i>
          </div>
        </div>
      </div>

    </div>
      <div class="swiper-pagination"></div>
  </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      centeredSlides: false,
      slidesPerGroupSkip: 1,
      grabCursor: true,
      keyboard: {
      enabled: true,
      },
      breakpoints: {
       
        0: {
          slidesPerView: 1,
          slidesPerGroup: 2,
        },

        689: {
          slidesPerView: 2,
          slidesPerGroup: 2,
        },

       789: {
          slidesPerView: 3,
          slidesPerGroup: 2,
        },
        969: {
          slidesPerView:4,
          slidesPerGroup: 3,
        },
      },
      scrollbar: {
        el: ".swiper-scrollbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

<body>

<div class="main">
  <h1>Tatoo session</h1>
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
        <img src="..\app\saloon\pexels-dmitry-zvolskiy-1805600.jpg"></div>
         <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <p class="item-price strike item-price1 "><strike>₹ 500<?php echo $row['p_old_price']; ?></strike> <b>
            <?php echo $row['p_current_price']; ?>₹ 55/- </b></p>
          <button class="btn-small-ser mt-2" type="button"> Book now </button>
          <a href="#" class="btn-small-ser mt-2">Add to Cart</a>
                         
                         
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="..\app\saloon\pexels-dmitry-zvolskiy-1805600.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <p class="item-price strike item-price1 "><strike>₹ 500<?php echo $row['p_old_price']; ?></strike> <b>
            <?php echo $row['p_current_price']; ?>₹ 55/- </b></p>
          <button class="btn-small-ser mt-2" type="button"> Book now </button>
          <a href="#" class="btn-small-ser mt-2">Add to Cart</a>
                         
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="..\app\saloon\pexels-dmitry-zvolskiy-1805600.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <p class="item-price strike item-price1 "><strike>₹ 500<?php echo $row['p_old_price']; ?></strike> <b>
            <?php echo $row['p_current_price']; ?>₹ 55/- </b></p>
          <button class="btn-small-ser mt-2" type="button"> Book now </button>
          <a href="#" class="btn-small-ser mt-2">Add to Cart</a>
                         
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="..\app\saloon\pexels-gabriel-lara-3657562.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <p class="item-price strike item-price1 "><strike>₹ 500<?php echo $row['p_old_price']; ?></strike> <b>
            <?php echo $row['p_current_price']; ?>₹ 55/- </b></p>
          <button class="btn-small-ser mt-2" type="button"> Book now </button>
          <a href="#" class="btn-small-ser mt-2">Add to Cart</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="..\app\saloon\pexels-cottonbro-studio-4125587.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <p class="item-price strike item-price1 "><strike>₹ 500<?php echo $row['p_old_price']; ?></strike> <b>
            <?php echo $row['p_current_price']; ?>₹55/- </b></p>
         
          <button class="btn-small-ser mt-2" type="button"> Book now </button>
          <a href="#" class="btn-small-ser mt-2">Add to Cart</a>
                         
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="..\app\saloon\pexels-dmitry-zvolskiy-1805600.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <p class="item-price strike item-price1 "><strike>₹ 500<?php echo $row['p_old_price']; ?></strike> <b>
            <?php echo $row['p_current_price']; ?>₹ 55/- </b></p>
          <button class="btn-small-ser mt-2" type="button"> Book now </button>
          <a href="#" class="btn-small-ser mt-2">Add to Cart</a>             
        </div>
      </div>
    </li>
  </ul>
</div>
</div>  
<h3 class="made_by">Made with ♡</h3>
</body>
</html>