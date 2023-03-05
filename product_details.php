<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel = "stylesheet" href = "style.css"/>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <title>Manga webshop</title>
  </head>
  <style>
    .logo {
    width: 10%;
    height: 10%;
}
  body{
    overflow-x: hidden;
   padding-top: 210px;
 }
  </style>
<body>
     <!-- navbar -->
     <div class = "container-fluid p-0 bg-dark">
        <nav class="navbar navbar-expand-md bg-dark">
  <div class="container-fluid fixed-top bg-dark">
    
    <img src = "./images/qnk6acmurfe61.jpg" class = "logo my-3">
   <!-- <a class="navbar-brand text-light mx-2" href="index.php">Asianbabes</a> -->
<!--    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>  -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item me-auto">
          <a class="nav-link active text-light" aria-current="page"  href="index.php">Home</a>
        </li>
        <li class="nav-item me-auto">
          <a class="nav-link text-light" href="display_all.php">Doujin</a>
        </li>
      </ul>
      <form class="d-flex col-md-3 pull-right" action="search_product.php" method = "get">
        <input class="form-control" type="search" placeholder="Search...." name = "search_data">
        <button type="submit" style='font-size:12px' value = "Search" class = "btn btn-outline-light btn-warning" name = "search_data_product">
        <i class='fas fa-search'></i>
      </form>  
    </div>
  </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <ul class="navbar-nav me-auto">
           <li class='nav-item'>
                  <a class='nav-link text-light' style = "text-decoration: none;"href='#'>Secret hentai stash!</a>
            </li>
  </ul>
</nav>

<!--
<div class="bg-light">
  <h3 class="text-center">
    Manga
  </h3>
  <p class="text-center"></p>
</div>
-->


<div class="row px-1 mt-3">
  <div class="col-md-10 mb-4 mx-auto">
    <div class="row">

    <!--fetching data-->
    <?php
  
  view_details();
    //calling data

    ?>
     
  </div>
</div>


<?php
  include("./includes/footer.php")
?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous"></script>
</body>