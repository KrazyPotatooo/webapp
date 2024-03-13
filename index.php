<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style>

</style>
</head>
<body>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
  <div class="col-md-3 mb-2 mb-md-0">
    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
      <img class="bi me-2" src="img/logo2.jpg" alt="Logo" width="80" height="70">
    </a>
  </div>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="home.php" class="nav-link px-2 link-secondary">Home</a></li>
    <li><a href="about.php" class="nav-link px-2">About</a></li>
    <li><a href="menu.php" class="nav-link px-2">Menu</a></li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="cars.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cars</a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">JDM</a></li>
        <li><a class="dropdown-item" href="#">Classic Cars</a></li>
        <li><a class="dropdown-item" href="#">Hyper Cars</a></li>
      </ul>
    </li>
    <li><a href="contact.php" class="nav-link px-2">Contact</a></li>
  </ul>
  <div class="col-md-3 text-end">
    <a href="Login.php" class="btn btn-outline-primary me-2">Login</a>
    <a href="Signup.php" class="btn btn-primary">Sign-up</a>
  </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
