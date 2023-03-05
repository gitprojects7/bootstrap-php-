<?php
include('./includes/connect.php');
include('./functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel = "stylesheet" href = "style.css"/>
    <title>Manga webshop</title>
    <style>
 
  body{
    overflow-x: hidden;
  }
  .logo{
    width: 14%;
  }
  </style>
  </head>
<body>
      <!-- navbar -->
      <div class = "container-fluid p-0 bg-dark">
        <nav class="navbar navbar-expand-md bg-dark">
  <div class="container-fluid">
    <img src = "./images/qnk6acmurfe61.jpg" class = "logo mt-3">
<!--    <a class="navbar-brand text-light mx-2" href="http://image.olch.biz/images/a1352/002.jpg"> 
      Secret hentai stash
    </a>
    -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="active text-light mx-2" style="text-decoration: none;" href="index.php">Home</a>
        </li>
      </ul>
      <form class="d-flex col-md-3 pull-right" action="search_product.php" method = "get">
        <input class="form-control" type="search" placeholder="Search...." name = "search_data">
        <button   type="submit" style='font-size:12px' value = "Search" class = "btn btn-primary" name = "search_data_product">
        <i class='fas fa-search'></i>
      </form>  
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <ul class="navbar-nav me-auto">
        <li class='nav-item'>
          <a class='nav-link text-light mx-2' style="text-decoration: none;" href='https://safebooru.org/samples/3301/sample_fa6e3049c9029607f0df389f44321dca848d50c6.jpg?3431972'>Secret Hentai stash!</a>
        </li>
  </ul>
</nav>

<div class="row px-1 mt-3">
  <div class="col-md-10 mb-4 m-auto md-3">
    <div class="row">
    <!--fetching data from functions folder in common_functions-->
    <?php 
  getproducts();
 ?>
<!--
      <div class="col-md-4">
      <div class="card" >
  <img src="./images/149855141_1824180587756221_3844186070643977362_n.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ganyu</h5>
    <p class="card-text">Delectable babe</p>
    <a href="#" class="btn btn-success">Add to cart</a>
    <a href="#" class="btn btn-danger">View more</a>
    </div>
  </div>
</div>

    <div class="col-md-4">
      <div class="card" >
        <img src="./images/f04otistevq81.png" class="card-img-top img-fluid" >
    <div class="card-body">
      <h5 class="card-title">Ganyu</h5>
      <p class="card-text">Snack</p>
      <a href="#" class="btn btn-success">Add to cart</a>
      <a href="#" class="btn btn-danger">View more</a>
    </div>
  </div>
</div>
   
      <div class="col-md-4">
      <div class="card" >
  <img src="./images/Cii2cT2UYAAK4ya.jpg" class="card-img-top img-fluid" >
  <div class="card-body">
    <h5 class="card-title">Decandant babe</h5>
    <p class="card-text">Pure nectarine.</p>
    <a href="#" class="btn btn-success">Add to cart</a>
    <a href="#" class="btn btn-danger">View more</a>
      </div>
    </div>
  </div>
        -->
      </div>
    </div>
 </div>

<?php
  include("./includes/footer.php")
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous"></script>
</body>