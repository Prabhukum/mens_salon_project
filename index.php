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
    <title>Sholinghur Saloon</title>

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
      <a class="navbar-brand" href="#"> <img src="app\saloon\favicon.ico" width="30" height="30" alt=""> mens salon</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <?php
          if(!$_SESSION['id']) {
            echo '          <li class="nav-item">
            <a class="nav-link mr-15"href="login.php">Login/signUp <img src="app\icons\user.png" width="20" height="20" alt=""></i></a>
          </li>';
          } else {
            echo '          <li class="nav-item">
            <a class="nav-link "href="logout.php">LogOut</a>
          </li>';
          }
          ?>
        </ul>
       
        <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Select Location
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Tiruttani</a></li>
    <li><a class="dropdown-item" href="#">Sholingur</a></li>
    <li><a class="dropdown-item" href="#">Arakkonam</a></li>
    <li><a class="dropdown-item" href="#">Arcot</a></li>
  </ul>
</div>
    
      </div>
    </div>
  </nav>
</header>

<main>
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
        <div class="carousel-caption dd-md-block">
          <h5></h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <video class="img-fluid" autoplay loop muted><source src="app/videos/V3.mp4" type="video/mp4" /></video>
        <div class="carousel-caption d-md-block">
          <h5></h5>
          <p>Some representative placeholder content for the third slide.</p>
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

  <div class="container-fluid marketing" id="scrolldown">
   

    <!-- Three columns of text below the carousel -->
    <div class="row services">

              <!---------------------haircut for men &kids ------------------------------------->
      
        <div class="col-lg-4 mt-5 ">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
       <a href="app\Hair color Card-Section.html"><img src="app/saloon/pexels-kevin-bidwell-9491365.jpg" class="rounded mb-2" width="140" height="140" alt=""></a>  
        <h2 class="mt-lg-3">Haircut for Men & Kid's</h2>
        <p class="mt-lg-4 px-lg-5">Get the perfect look with our expert haircuts for men and kids. Trust us for a fresh, clean cut every time.</p>
        <p><a class="btn btn-dark mt-lg-2" href="app\haircut for men & kid's Card-Section.php">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

       <!------------------------------------ Hair color -------------------->
      <div class="col-lg-4 mt-5">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <a href="app\Hair color Card-Section.html"><img src="app/saloon/pexels-john-diez-7389074.jpg" class="mb-2  hover-zoom ripple rounded ripple-surface" width="140" height="140" alt=""></a>
        <h2 class="mt-lg-1">Hair color</h2>
        <p class="mt-lg-4 px-lg-5">Experience the convenience of at-home hair coloring with our selection of premium hair color products.</p>
        <p><a class="btn btn-dark mt-lg-3" href="app\Hair color Card-Section.html">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <!------------------------------------- shave/beard ---------------------------------------------- -->
      <div class="col-lg-4 mt-5">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <a href="Shave_Beard_Card_Section.html"><img src="app/saloon/pexels-cottonbro-studio-3998419 (1).jpg" class="rounded mb-2" width="140" height="140" alt=""></a>
        <h2 class="mt-lg-1">Shave/beard</h2>
        <p class="mt-lg-4 px-lg-5">Get a smooth and clean shave from the comfort of your own home with our selection of top-quality shaving products.</p>
        <p><a class="btn btn-dark mt-lg-3" href="app\Shave_Beard_Card_Section.html">View details &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <div class="row">
      <!------------------------------------- tatoo ------------------------------------------>
      <div class="col-lg-4  p-3 ">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <a href="Tatoo Card-Section.html"><img src="app/saloon/pexels-fulvio-pessi-4655687.jpg" class="rounded" width="140" height="140" alt=""></a>
        <h2 class="mt-lg-3">Tatoo's</h2>
        <p>Express your individuality with our range <br>of top-quality tattoo products,<br>our tattoo products are <br>the perfect choice for you.</p>
        <p><a class="btn btn-dark mt-lg-3" href="app\Tatoo Card-Section.html" >View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->


     <!---------------------------------- bridal makeup -------------------------------------->
      <div class="col-lg-4 p-3">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <a href="Bridal_Makeup_Card_Section.html"><img src="app/saloon/pexels-cottonbro-studio-3998419 (1).jpg" class="rounded" width="140" height="140" alt=""></a>
        <h2 class="mt-lg-3">Bridal makeup</h2>
        <p class="mt-lg-4 px-lg-5">Look stunning on your special day with our bridal makeup services.tutud yhdfghxdgh rtysetys dstfhhtu</p>
        <p><a class="btn btn-dark mt-lg-4" href="app\Bridal_Makeup_Card_Section.html">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <!------------------------------ ear &body piercing -------------------------------------------->
      <div class="col-lg-4  p-3">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <a href="Ear & Body Piercing.html" ><img src="app/saloon/pexels-maiza-campos-11390512.jpg"class="rounded" width="140" height="140" alt=""></a>
        <h2 class="mt-lg-1">Ear & Body <br>piercing</h2>
        <p class="mt-lg-4 px-lg-5">Add a touch of elegance to your look with our range of ear piercings.</p>
        <p><a class="btn btn-dark mt-lg-3" href="app\Ear & Body Piercing.html">View details &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

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
        <h2 class="featurette-heading"><a href="faical page">facial </a><span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="https://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>  -->
        <video class="img-fluid" autoplay loop muted><source src="app\videos\pexels-tima-miroshnichenko-7607766_AdobeExpress.mp4" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" type="video/mp4" /></video>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette"> <!-- image container backgound -->
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
  <footer class="container d-sm-block">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot;  <a href="#">Contact Us</a></p>
  </footer>
</main>
      
  </body>
 
</html>
