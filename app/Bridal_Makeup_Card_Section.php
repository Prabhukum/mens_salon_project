<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bridal Session</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Menslook</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- End Example Code -->
    <style>
      .card{
        background-color:grey;
        margin:4px;
     
      }
      .card-body{
        padding:16px;
        border-radius:8px;
      }
      .card-title{
          font-size:  20px;
          padding: 15px;
          margin:12px;
      }
      .card-text{
          font-size:  20px;
          margin:12px;
      }
      .cardimage{
        height:80px;
        width:80px;
      }
    
.book-btn{
    color: #eeeeeec2 ;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #f6fe0063;
    padding: 15px 14px;
    margin-top: 5px;
    line-height: 16px;
    border-radius: 50px;
    font-family: 'Lucida Handwriting', sans-serif;
  }
  .book-btn:hover {
    color: #eeeeeec2 ;
    background: #e6ee0144;
    box-shadow: none;
    font-family: 'Lucida Handwriting', sans-serif;
  }
  .btn-small-ser {
    color: #eeeeeec2 ;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #f6fe0063;
    padding: 6px 14px;
    margin-top: 5px;
    line-height: 16px;
    border-radius: 35px;
    font-family: 'Lucida Handwriting', sans-serif;
  }
  .btn-small-ser:hover {
    color:#eeeeeec2 ;
    background:#83850fce ; /*  #7ac400; */
    box-shadow: none;
    font-family: 'Lucida Handwriting', sans-serif;
  }
  /* For small devices button */
  
  .btn-small {
    color:  #7ac400;
    font-size: 10px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    font-family: 'Lucida Handwriting', sans-serif;
    border: 1px solid #f6fe0063;
    padding: 6px 14px;
    margin-top: 5px;
    line-height: 13px;
    border-radius: 20px;
  }
  .btn-small:focus {
    color: #e1e4dc;
    background: #7ac400;
    box-shadow: none;
    font-family: 'Lucida Handwriting', sans-serif;
  }
  @media screen (768 width) {
    
  }
  .favourite-places-bg-container {
  background-image: url("https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/towerbg.png");
  height: 100vh;
  background-size: cover;
}

.favourite-places-heading {
  color: white;
  font-family: "Roboto";
  font-size: 28px;
  font-weight: bold;
  padding: 24px;
}

.favourite-place-card-container {
  background-color: white;
  border-radius: 8px;
  padding: 16px;
}

.favourite-place-card-heading {
  color: #0f0e46;
  font-family: "Roboto";
  font-size: 23px;
  font-weight: bold;
}

.favourite-place-card-description {
  color: #6c6b70;
  font-family: "Roboto";
  font-size: 13px;
}

.favourite-place-card-image {
  width: 80px;
  height: 100px;
}

    </style>

        <h1 class=" d-flex justify-content-center head mb-3">Bridal session</h1>
        <div class="favourite-places-bg-container">
      <h1 class="favourite-places-heading">Favourite Places</h1>
      <div class="favourite-place-card-container col-sm-6 d-flex justify-content-center">
        <div>
          <h1 class="favourite-place-card-heading">Taj Mahal</h1>
          <p class="favourite-place-card-description">
            If there was just one symbol to represent all of India, it would be
            the Taj Mahal
          </p>
        </div>
        <img
          src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/tajmahal-img.png"
          class="favourite-place-card-image"
        />
      </div>
    </div>
        <!-- <div class="row">
      <div class="col-sm-6 col-lg-12 mb-3 mb-sm-0">
        <div class="card">
        
        <div class="card-body d-flex flex-row justify-content-center">
          
            <div>
              <h5 class="card-title">Special title</h5>
              <p class="card-text"> as a natural lead-in to additional content.</p>
              <a href="#" class="btn book-btn ">book now</a> 
              <a href="#" class="btn book-btn">add 2 cart</a>
            </div>
            
            <div>
            <img src="https://images.pexels.com/photos/12699537/pexels-photo-12699537.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="d-flex flex-row justify-content-center cardimage">
       </div>

          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div> -->
  </body>

 
  <?php require_once("footer.php"); ?>  
</html>