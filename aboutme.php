<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet"/>
</head>
<body> 
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">Zushi's website</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="aboutme.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="aboutme.php" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section class="bg-dark text-light p-5 pt-lg-5 text-center text-sm-start"  id = "home">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Hello! i'm zushi, a<span class="text-danger"> web developer </span></h1>
       
            <button class="btn btn-success my-4">
            <a href="aboutme.php" class="nav-link text-light">More about me</a>
            </button>
          </div>
          <img class="img-fluid w-50 my-5" src="./images/149855141_1824180587756221_3844186070643977362_n.jpg"/>
        </div>
      </div>
    </section>

<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"  id = "home">
      <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
          <img class="img-fluid w-50  my-2 me-auto" src="./images/149855141_1824180587756221_3844186070643977362_n.jpg"/>
          <div class="mx-5">
            <h1>Contact me at<span class="text-danger mx-2"> tphan5901@gmail.com </span></h1>     
          </div>
        </div>
        
        </div>
      </div>
    </section>

    <footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-lg-left">
    <div class="row text-center text-lg-left">

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-success">About</h5>
          <p>
            <a href="aboutme.php" class="text-white" style="text-decoration: none;">Developer</a>
          </p>
        
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-success">Terms of use</h5>
          <p>
            <a href="" class="text-white" style="text-decoration: none;">Copyright infringement</a>
          </p>
          <p>
            <a href="https://getbootstrap.com/docs/4.1/getting-started/introduction/" class="text-white" style="text-decoration: none;">Source Library</a>
          </p>
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-success">Social media</h5>
          <p>
            <a href="" class ="btn-floating btn-sm text-white" style="font-size:15px;">
              <i class="fab fa-instagram mr-3"></i> Instagram
            </a>
          </p>
          <p>
            <a href="" class ="btn-floating btn-sm text-white" style="font-size:15px;">
              <i class="fab fa-patreon mr-3"></i> Patreon
            </a>
          </p>
          <p>
            <a href="" class ="btn-floating btn-sm text-white" style="font-size:15px;">
              <i class="fab fa-twitter mr-3"></i> Twitter
            </a>
          </p>
      </div>
    </div>
          <hr class="mb-3">

    </div>
  </div>
</footer>

<div class="bg-primary p-2 text-center text-light">
  <p> All rights reserved© Hentai stash webshop</p>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>