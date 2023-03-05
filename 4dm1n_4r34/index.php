<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();
//if session isnt equal to admin_name table variable, then return to website page
if(!isset($_SESSION['admin_name'])){
    echo "<script>window.open('../404.php','_self')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>

    <!-- boostrap html framework-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">

    
    <!--font boostrap icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel = "stylesheet" href = "../style.css">

    <style>
        .admin_image{
        width: 500px;
        object-fit: contain;
     }
        .footer{
            position: relative;
            bottom: 0;
        }
    body{
        overflow-x: hidden;
    }
/*  edit_products and editimageslide display images from database in form  */
    .product_img{
  width: 370px;
  object-fit: contain;
 }
 .logo{
    width:14%;
 }
    </style>
  </head>
<body class = "bg-dark">

    <div class="container-fluid p-0 bg-dark">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <img src = "../images/6cf949b75a7a016a9318602f8c92cd67.jpeg" class = "logo">
                <li class="nav-item me-auto mx-3">
                            <a class="nav-link active text-light" style="text-decoration: none;" aria-current="page" href="../index.php">Home</a>
                        </li>
                    <ul class="navbar-nav">
              
                    <?php
                        if(!isset($_SESSION['admin_name'])) {
                        echo "<li class='nav-item'>
                        <a href='' class='nav-link text-light'>Welcome back! @Admin</a>
                            </li>";
                        }else{
                        echo" <li class='nav-item'>
                        <a class='nav-link text-light' href=''>Welcome back! ".$_SESSION['admin_name']." </a>
                        </li>";
                        }
                ?>
                    </ul>

            </div>
        </nav>
    <!-- second child -->
        <div class="bg-danger">
            <h3 class="text-center p-2 text-light">Manage details </h3>
        </div>

            <!-- third child -->

            <div class="row ">
                <div class="col-md-12 bg-dark p-3 d-flex align-items-center">
                    <div class = "px-5">
                    <a href="#" > <img src="../images/qnk6acmurfe61.jpg" class = "admin_image"></a>
                <p class="text-light text-center"> Admin: Shana Tachibana</p>
                </div>
                <div class="button text-center">
                  <button class = "btn btn-light mb-5 px-3 mx-2"><a href="index.php" class="nav-link text-dark"> Admin panel</a></button>
                  <button class = "btn btn-primary mb-5 px-3 mx-2"><a href="image_slider.php" class="nav-link text-light"> Image slider</a></button>
                  <button class = "btn btn-success mb-5 px-3 mx-2"><a href="insert_product.php" class="nav-link text-light"> Insert Doujin</a></button>
                  <button class = "btn btn-danger mb-5 px-3 mx-2"><a href="index.php?view_products" class="nav-link text-light"> View Doujin</a></button>
                  <button class = "btn btn-info mb-5 px-3 mx-2"><a href="index.php?view_imageslider" class="nav-link text-light"> View imageslide</a></button> 
                  <button class = "btn btn-secondary mb-5 px-3 mx-2"><a href="logout.php" class="nav-link text-light"> Logout</a></button>
                    </div>
                </div>
            </div>

            <div class="container my-3">
                <?php 
                    if(isset($_GET['view_products'])){
                        include('view_products.php');
                    }
                    if(isset($_GET['view_imageslider'])){
                        include('view_imageslider.php');
                    }
                    if(isset($_GET['edit_products'])){
                        include('edit_products.php');
                    }
                    if(isset($_GET['edit_imageslide'])){
                        include('edit_imageslide.php');
                    }
                    if(isset($_GET['delete_product'])){
                        include('delete_product.php');
                    }
                    if(isset($_GET['delete_imageslide'])){
                        include('delete_imageslide.php');
                    }
                ?>
            </div>

            <div class="bg-primary p-3 text-center text-light">
                <p> All rights reserved© Hentai stash webshop</p>
            </div>
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>