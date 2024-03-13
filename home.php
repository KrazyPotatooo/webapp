<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img class="bi me-2" src="img/logo2.jpg" alt="Logo" width="80" height="70">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
        <li><a href="#" class="nav-link px-2">Menu</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cars</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">JDM</a></li>
            <li><a class="dropdown-item" href="#">Classic Cars</a></li>
            <li><a class="dropdown-item" href="#">Hyper Cars</a></li>
          </ul>
        </li>
        <li><a href="#" class="nav-link px-2">Contact</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
    <div class="container">
  <div class="py-5 d-flex justify-content-center align-items-center">
    <h1 class="display-5 fw-bold text-white">JDM CARS GARAGE</h1>
    <div class="col-lg-6 mx-auto">
      <p class="fs-5 mb-4">This article provides an in-depth explainer on the Japanese domestic market (JDM) automotive scene — from JDM history and nostalgic cars to tuning styles and legality issues. Read on to learn all about the world of JDM cars and tuning</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Order Now</button>
        <button type="button" class="btn btn-outline-light btn-lg px-4">Learn About Us</button>
      </div>
    </div>
  </div>
</div>



<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="../img/r34.jpg" class="d-block w-1000" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nissan R34</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="../img/supra1.jpg" class="d-block w-1000" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Toyota Supra MK4</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="1000">>
      <img src="../img/NSX.jpg" class="d-block w-1000" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Honda NSX</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
