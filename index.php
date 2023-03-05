<?php
include('./includes/connect.php');
include('./functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
    <!-- fonts -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> <!--dont delete, controls carousel-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!--dont delete, controls carousel-->
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
   <link rel = "stylesheet" href = "style.css"/>
    <title>my Secret hentai stash webshop</title>
  </head>
  <style>
    .logo {
    width: 14%;
}
    .babe{
      width: 32%;
    }
.darkmode {
    width: 4%;
}
 body{
  overflow-x: hidden;
  //padding-top: 210px;
 }
 .card-img-top{
    object-fit: contain;
 }
 .background1 {background-color: white;}

 .sidebar .links a{
  display: block;
  padding: 15px;
 }
 .sidebar .links a.active,
 .sidebar .links a:hover{
  cursor: pointer;
  color: #00acee;
  background: #222;
 }
 .siderbar .links a i{
  display: inline-block;
  margin-left: 5px;
 }
  </style>
<body class ="border-collapse border-expand-md">

<div class = "container-fluid p-0 bg-dark">
<!-- body -->
<!--
    <sex class="navbar1 navbar-expand d-flex flex-column align-item-start bg-dark" id="sidebar">
      <a href="" class="navbar-brand text-light mt-5">
        <div class="d-flex text-danger">Secret Hentai stash</div>
      </a>
      <ul class="navbar flex-column w-100">
        <li class="list-unstyled">
          <a class="btn btn-danger mt-3 btn-outline-secondary text-light" href="index.php">   <i class="fal fa-home"> Home</i></a>
        </li>
        <li class=" list-unstyled">
          <a class="btn btn-warning  mt-3 btn-outline-secondary text-light" href="display_all.php"><i class="fal fa-book"> Doujin</i></a>
        </li>
        <li class=" list-unstyled">
          <a class="btn btn-success mt-3 btn-outline-secondary text-light" href="aboutme.php"> <i class="fal fa-brush">  Artist</i></a>
        </li>
       
    </ul>    
      <hr class="fs-1">
 <ul class="w-100 navbar flex-column">
      <li class=" list-unstyled">
          <a class="btn btn-info mt-3 mx-5 btn-outline-secondary text-light" href="terms.php"> Terms of use</a>
        </li>
        </ul>
</sex>
-->

 

<sex class="navbar1 navbar-expand d-flex flex-column sidebar bg-dark" id="sidebar">
        <div class="d-flex text-danger mx-5 mt-5">Secret Hentai stash
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        </div>
    
      <div class="links">
          <a class="mt-4 btn-outline-secondary text-light text-center" href="index.php">   
            <i class="fal fa-home mx-5"> Home </i>
          </a>
          <a class=" mt-4 btn-outline-secondary text-light" href="display_all.php">
            <i class="fal fa-book mx-5 fs-5"> Doujin</i>
          </a>
          <a class=" mt-4 btn-outline-secondary text-light" href="aboutme.php"> 
            <i class="fal fa-brush fs-5">  Artist</i>
          </a>

          <hr class="fs-50">
 <ol class="w-100 navbar flex-column">

          <a class=" mt-3 mx-5 btn-outline-secondary text-light" href="terms.php">Terms of use</a>
</ol>
</div>    

</sex>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid "> <!--fixed-top bg-dark-->
    <img src = "./images/qnk6acmurfe61.jpg" class = "logo mt-3">
  <!--   <a class="navbar-brand text-light mx-1" href="http://image.olch.biz/images/a1352/002.jpg">Secret hentai stash</a> -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation"> 
      <span class="navbar-toggler-icon"></span> 
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <button class="btn btn-success my-3 mx-2" id="menu-btn">
          <i class="fal fa-stream"></i>
        </button>
        <li class="nav-item">
          <a class="btn btn-outline-secondary nav-link text-light" style="text-decoration: none;" href="index.php">Home</a>
        </li>
         <li class='nav-item'>
          <!--https://krasavica.info/uploads/posts/2020-02/1582026814_8-p-yui-oba-instagram-16.jpg-->
            <a class='btn btn-outline-secondary nav-link text-light' style='text-decoration: none;' href='display_all.php'>Doujin</a>
          </li>
    
      </ul>
  
<!-- cursor:pointer-->
      <img src = "./images/moon.png" class="darkmode mx-2 btn btn-outline-secondary" id= "dark-mode">  
      
      <form class="d-flex col-md-3 pull-right" action="search_product.php" method = "get">
        <input class="form-control" type="search" placeholder="Search...." name = "search_data">
        <button   type="submit" style='font-size:12px' value = "Search" class = "btn btn-outline-light btn-warning" name = "search_data_product">
        <i class='fas fa-search'></i>
      </form>  
    </div>
  </div>
</nav>



<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <ul class="navbar-nav me-auto">  <!--me-auto puts all items on the left. ms-auto puts items on the right-->
     <li class='nav-item'>
        <a class='nav-link text-light mx-2' style="text-decoration: none;" 
        href='https://safebooru.org/samples/3301/sample_fa6e3049c9029607f0df389f44321dca848d50c6.jpg?3431972'>Secret hentai stash!</a>
      </li>
  </ul>
</nav>

<section class="bg-dark text-light pt-lg-5 text-center text-sm-start">
      <div class="container">
      <h1 class=" text-center me-5 text-align:center; mx-auto">Welcome to my shop!</h1>
    <!--    <div class="d-sm-flex align-items-center justify-content-between">
          <img class="img-fluid w-45 my-3" src="./images/27004 (1).jpg"/>
        </div> -->
      </div>
    </section>

 
  <div class="container-fluid " id="navbarSupportedContent">
    <div class="carousel-inner carousel slide" id="dynamic_slide_show" data-ride="carousel">
      <?php echo make_slides($con); ?>

    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>
   </div>
</div>

  <section class="bg-dark text-light pt-lg-5 text-sm-start">
      <div class="container">
      <h1>Doujinshi!</h1>
      </div>
  </section>
    
<!--
<div class="bg-light mb-3">
  <h3 class="text-center">
    Doujinshi shop
  </h3>
</div>
-->



    
<div class="row px-1 mt-3">
  <div class="col-md-10 mb-4 m-auto md-3 ">
    <div class="row">
    <!--fetching data from functions folder in common_functions-->
 <?php 
  getproducts();
 ?>
      <div class="col-md-4">
      <div class="card">
      <div class="card1">
  <img src="./images/98963497_p0.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong>Ganyu</strong></h5>
    <p class="card-text">Delectable babe</p>
    <a href="https://checkout.stripe.com/c/pay/cs_test_a1u1IzAYk4769nqxjddVbSvY6jNiH0Gjp6tm5UOaujD8fhjJ5CNctPyCtA#fidkdWxOYHwnPyd1blpxYHZxWjA0SWxsQEFARlN3UGtRQGIxM2s1U0h1f1VJYzx0dUFydVM0fWFfd2lQSXMxUVZzUGZDdXNEfVUwcWNXNW1pfFVwdjBwS1dWVGZSSmR3QjVMXWYxREc9MFQwNTVsUklwNVRQRicpJ3VpbGtuQH11anZgYUxhJz8ncWB2cVpnTFwzd3A9SGM8Z0g8aWg9cnIneCUl" class="btn btn-success">Purchase</a>
    <a href="#" class="btn btn-danger">View more</a>
    </div>
  </div>
</div>

    <div class="col-md-4">
      <div class="card" >
      <div class="card1">
        <img src="./images/149855141_1824180587756221_3844186070643977362_n.jpg" class="card-img-top img-fluid" >
        </div>
    <div class="card-body">
      <h5 class="card-title"><strong>Ganyu</strong></h5>
      <p class="card-text">Snack</p>
      <a href="https://buy.stripe.com/test_aEU4jme6z5ZAeFG289" class="btn btn-success">Purchase</a>
      <a href="#" class="btn btn-danger">View more</a>
    </div>
  </div>
</div>
   
      <div class="col-md-4">
      <div class="card">
      <div class="card1">
  <img src="./images/qnk6acmurfe61.jpg" class="card-img-top img-fluid" >
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong>Decadant babe</strong></h5>
    <p class="card-text">Pure nectarine.</p>
    <a href="https://buy.stripe.com/test_aEU4jme6z5ZAeFG289" class="btn btn-success">Purchase</a>
    <a href="#" class="btn btn-danger">View more</a>
      </div>
    </div>
  </div>
        
     
  <div class="col-md-4">
  <div class="card">
  <div class="card1" >
  <img src="./images/149855141_1824180587756221_3844186070643977362_n.jpg" class="card-img-top img-fluid" >
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong>Ganyu</strong></h5>
    <p class="card-text">Pure nectarine.</p>
    <a href="https://buy.stripe.com/test_bIYbLObYrbjU5569AC" class="btn btn-success">Purchase</a>
    <a href="#" class="btn btn-danger">View more</a>
      </div>
    </div>
  </div>
        
     
  <div class="col-md-4 mt-5">
      <div class="card" >
      <div class="card1">
  <img src="./images/002.jpg" class="card-img-top img-fluid">
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong>Ganyu</strong></h5>
    <p class="card-text">Pure nectarine.</p>
    <a href="https://buy.stripe.com/test_bIYbLObYrbjU5569AC" class="btn btn-success">Purchase</a>
    <a href="#" class="btn btn-danger">View more</a>
      </div>
    </div>
  </div>
        
  <div class="col-md-4 mt-5">
      <div class="card" >
        <div class="card1">
  <img src="./images/b98207d80186fa8389f9bf0448e1d59b.jpg" class="card-img-top img-fluid">
        </div>
  <div class="card-body">
    <h5 class="card-title"><strong>Ganyu</strong></h5>
    <p class="card-text">Pure nectarine.</p>
    <a href="https://buy.stripe.com/test_5kAaHK3rVew6gNO148" class="btn btn-success">Purchase</a>
    <a href="#" class="btn btn-danger">View more</a>
      </div>
    </div>
  </div>
        
  <div class="col-md-4 mt-5">
      <div class="card" >
        <div class="card1" >
  <img src="./images/1582026814_8-p-yui-oba-instagram-16.jpg" class="card-img-top img-fluid">
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong>Decadant babe</strong></h5>
    <p class="card-text">Pure nectarine.</p>
    <a href="https://buy.stripe.com/test_5kAaHK3rVew6gNO148" class="btn btn-success">Purchase</a>
    <a href="#" class="btn btn-danger">View more</a>
      </div>
    </div>
  </div>
        
  <div class="col-md-4 mt-5">
      <div class="card" >
      <div class="card1" >
  <img src="./images/6cf949b75a7a016a9318602f8c92cd67.jpeg" class="card-img-top img-fluid">
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong>Decadant babe</strong></h5>
    <p class="card-text">Pure nectarine.</p>
    <a href="https://buy.stripe.com/test_eVaaHK8MfbjU69a28b" class="btn btn-success">Purchase</a>
    <a href="#" class="btn btn-danger">View more</a>
      </div>
    </div>
  </div>
        
  <div class="col-md-4 mt-5">
      <div class="card" >
      <div class="card1" >
  <img src="./images/1582026822_23-p-yui-oba-instagram-49.jpg" class="card-img-top img-fluid" >
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong>Decadant babe</strong></h5>
    <p class="card-text">Pure nectarine.</p>
    <a href="https://buy.stripe.com/test_eVaaHK8MfbjU69a28b" class="btn btn-success">Purchase</a>
    <a href="#" class="btn btn-danger">View more</a>
      </div>
    </div>
  </div>

  </div>
  </div>


  <div class="cookie-consent-modal">
        <div class="content container-fluid"> <!--container-fluid makes modal expand width to cover page-->

        <div class="col-lg-6 text-center">
                <a href="">
                <img src="./images/2e56e71987feed06477f1738698eabf6.jpg" class="babe" alt="">
                </a>
              </div>
              <div class="col-md-6">
            <h1>Allow Cookies</h1>
            <p>This site gives users cookies and also session cookies. Are you willing to accept them?</p>
            <div class="btns">
                <button class="btnA accept">accept</button>
                <button class="btnA cancel">cancel</button>
            </div>
            </div>


        </div>
    </div>

<?php
  include("./includes/footer.php");
?>




<!--
<script> 
   var dark_mode = document.querySelector("#dark-mode")
       var sidebar = document.querySelector("#sidebar") 
  dark_mode.addEventListener("click", ()=>{
    var dark_mode = document.querySelector("#dark-mode")
      $("body").toggleClass("bg-light");
      $("section").toggleClass("bg-light");
    if(document.section.classList.contains("bg-light")){
      icon.src = "images/sun.png";
    }else{
      icon src = "images/moon.png";
    }
  }
 </script> -->
<script src="main.js"></script>

 <script>
    var dark_mode = document.getElementsByClassName("darkmode") //selects id = menu-btn
  var body = document.getbyId("dark") //selects id = sidebar
  var sidebar = document.querySelector("#sidebar")
   dark_mode.addEventListener("click", ()=> {  //after clicking button
     body.classList.toggle("bg-light") //toggles css class
     ("body").toggleClass("dark"); //toggles css class
});
;
  </script>
<script>
    var menu_btn = document.querySelector("#menu-btn") //selects id = menu-btn
    var sidebar = document.querySelector("#sidebar") //selects id = sidebar
    menu_btn.addEventListener("click", ()=> {  //after clicking button
      sidebar.classList.toggle("active-sex")  //toggles css class
    });
  </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>