<?php
	include("../includes/config.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Beard Styles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"> </script>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet"/>
  <!-- Owl corousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
  <!-- Checking purpose -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="..\includes\css\tatoo_session.css" rel="stylesheet">

  <link href="..\includes\css\beard.css" rel="stylesheet">
</head>
<script>
 
</script>
<header>
  <nav class="navbar navbar-expand-md navbar-dark  d-flex  fixed-relative bg-nav">
    <div class="container-fluid">
      <a class="navbar-brand " href="#"> <img src="..\app\saloon\favicon.ico" width="30" height="30" alt=""> Men's Saloon</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0"> </ul>
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


<div class="header">
 </div>
    <div class="container content-items">
      <div class="content-text mt-5">
        <div class="banner d-lg-flex justify-content-between">
          <div class="banner-content">
            <h1>Beard <b>& shaving services</b> at home</h1>
            <h3>Sit back and relax</h3>
          </div>
          <div class="banner-button m-lg-auto">
            <button class="btn-lg book-btn">Book Now</button>
          </div>
        </div>
        <hr class="my-lg-4 my-sm-2">


<body>

<div class="container text-center my-3">
    <h2 class="font-weight-light">FEATURED</h2>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
              <?php
                $statement = $pdo->prepare("SELECT * FROM tbl_product where ecat_id =? AND p_is_featured=?");
                $statement->execute(array(300,1));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);     
                $i = 0;                         
                foreach ($result as $row) {
                  if($i == 0){
                    echo '<div class="carousel-item active">';
                    $i++;
                  } else {
                    echo '<div class="carousel-item">';
                  }
              ?>
                    <div class="col-md-4">
                        <div class="card-image">
                            <div class="card-image mb-45 text-center">
                         <div class="img-fluid">
                              <img class="img-fluid" src="saloon\300x300\<?php echo $row['p_featured_photo']; ?>">
                              <div class="cost-featured">
                                  <span><i class="fa fa-rupee"></i><?php echo $row['p_current_price']; ?></span>
                              </div>
                            <div class="product-action">
                                <div class="product-action-style">
                                   <a href="#"> <i class="fa fa-plus"></i> </a> <a href="#"> <i class="fa fa-heart"></i> </a> <a href="#"> <i class="fa fa-shopping-cart"></i> </a>
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
            <a class="carousel-control-prev " href="#recipeCarousel" role="button" data-slide="prev">
              <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
           		
        </div>
    </div>
</div>
<script >
  $('#recipeCarousel').carousel({
    interval: 3000
  })
  
  $('.carousel .carousel-item').each(function(){
      var minPerSlide = 3;
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      
      for (var i=0;i<minPerSlide;i++) {
          next=next.next();
          if (!next.length) {
              next = $(this).siblings(':first');
            }
          
          next.children(':first-child').clone().appendTo($(this));
        }
  });
</script>

<div class="main">
  <h1>Tatoo session</h1>
  <ul class="cards">
  <?php
    $statement = $pdo->prepare("SELECT * FROM tbl_product where ecat_id =? AND p_is_active=?");
    $statement->execute(array(200,1));
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);      
    foreach ($result as $row) {
  ?>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
        <img src="saloon/<?php echo $row['p_featured_photo']; ?>"></div>
         <div class="card_content">
          <h2 class="card_title"><?php echo $row['p_name']; ?></h2>
          <p class="card_text"><?php echo $row['p_description']; ?></p>
          <!-- <p class="card_text"><?php echo $row['p_short_description']; ?></p> -->
          <p class="item-price strike item-price1"><strike>₹<?php echo $row['p_old_price']; ?></strike> <b>₹<?php echo $row['p_current_price']; ?> </b></p>
          <!-- <button class="btn-small-ser mt-2" type="button"> Book now </button> -->
        
        
          <!-- Button trigger modal -->
          <div class="container">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add to cart
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        hi
        <hr class="my-lg-4 my-sm-2">
      </div>
      <div class="modal-body">
      hello
        <hr class="my-lg-4 my-sm-2">
      </div>
      <div class="modal-body">
      hw r u
        <hr class="my-lg-4 my-sm-2">
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">confirm</button>
      </div>
    </div>
  </div>
</div>
</div>
          <a href="#" class="btn-small-ser mt-2">Add to Cart</a>
                         
                         
        </div>
      </div>
    </li>
    <?php
      }
    ?>	
  </ul>
</div>
</div>  
</div>  
</div>  
                       <!----------------- footer ------------------------->
</body>
<?php require_once("footer.php"); ?>  
</html>