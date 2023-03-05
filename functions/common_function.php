<?php

function getproducts(){
    global $con;
    $select_query="Select * from `products` order by rand()";
  //LIMIT 0,15 is only 15cards  $select_query="Select * from `products` order by rand() LIMIT 0,15";
    $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_link=$row['product_link'];
          $product_price=$row['product_price'];
          echo "<div class='col-md-4 mb-4'>
                  <div class='card'>
                  <div class='card1'>
                  <img src='./4dm1n_4r34/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                  </div>
          <div class='card-body'>
          <h5 class='card-title'><strong>$product_title</strong></h5>
          <p class='card-text'>$product_description</p>
          <a href='$product_link' class='btn btn-success'>Purchase</a>
          <a href='product_details.php?product_id=$product_id' class='btn btn-danger'>View more</a>
          <h4 style='display: inline-block;float: right'> $$product_price</h4>  
            </div>
        </div>
      </div>";
          }
    }
    
  function search_product(){
    global $con;    
    if(isset($_GET['search_data_product'])){
        //htmlspecialchars or replace with htmlentities prevent xss attacks. 
        //xss attacks user visiting website, which redirects them to another link. sql injection attacks the database
        //in that case we use real_escape_string
        $search_data_value=htmlspecialchars($_GET['search_data']);
    $search_query= "Select * from `products` where product_keywords like '%$search_data_value%'";
    $result_query=mysqli_query($con,$search_query);     
    $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
            echo "<h2 class = 'text-center text-danger'> No Doujinshi match </h2>";
        }
      while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_link=$row['product_link'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      echo "<div class='col-md-4 mb-4'>
              <div class='card'>
              <img src='./4dm1n_4r34/product_images/$product_image1' class='card-img-top' alt='$product_title'>
      <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>$$product_price</p>
      <a href='$product_link' class='btn btn-success'>Purchase</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-danger'>View more</a>
        </div>
    </div>
  </div>";
      }  
    }
}

function get_all_products(){
    global $con;
        $select_query="Select * from `products` order by rand()";
        $result_query=mysqli_query($con,$select_query);
          while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      echo "<div class='col-md-4 mb-4'>
              <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top ' alt = ' $product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>$$product_price</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-danger'>View more</a>
            </div>
                </div>
            </div>";
        }  
    }

    function getIPAddress() {  
        //whether ip is from the share internet  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                    $ip = $_SERVER['HTTP_CLIENT_IP'];  
            }  
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
         }  
    //whether ip is from the remote address  
        else{  
                 $ip = $_SERVER['REMOTE_ADDR'];  
         }  
         return $ip;  
    }  
 
    function view_details(){
            global $con;
            if(isset($_GET['product_id'])){
                $product_id=htmlentities($_GET['product_id']);
            $select_query="Select * from `products` where product_id=$product_id";
            $result_query=mysqli_query($con,$select_query);
              while($row=mysqli_fetch_assoc($result_query)){
              $product_id=$row['product_id'];
              $product_title=$row['product_title'];
              $product_description=$row['product_description'];
              $product_link=$row['product_link'];
              $product_image1=$row['product_image1'];
              $product_image2=$row['product_image2'];
              $product_image3=$row['product_image3'];
              $product_price=$row['product_price'];
              echo "<div class = 'container'>
                <div class='row ' >
                    <div class='col-md-12'>
                        <h4 class='text-center text-info mb-5'> More details</h4>
                    </div>
                <div class='col-md-4 '>
                    <div class='card '>
                    <img src='./4dm1n_4r34/product_images/$product_image1' class='card-img-top' alt=' $product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <p class='card-text'>$$product_price</p>
                    <a href='$product_link' class='btn btn-success'>Add to cart</a>
                    <a href='index.php' class='btn btn-danger'>Home</a>
                    </div>
                   </div>
                </div>
            <div class='col-md-8 '>
                <div class='row'>
                    <div class='col-md-6 '>
                        <img src='./4dm1n_4r34/product_images/$product_image2' class='card-img-top' alt = ' $product_title'>
                </div>
                <div class='col-md-6 '>
                    <img src='./4dm1n_4r34/product_images/$product_image3' class='card-img-top' alt = ' $product_title'>
                </div>
            </div>
        </div>
            </div>
        </div>";
              }
        }
    }

    function make_query(){
        global $con;
        $query = "SELECT * FROM banner ORDER BY banner_id ASC";
        $result = mysqli_query($con,$query);
        return $result;
    }

//        function make_slide_indicators(){ //pass $con connection variable parameter to connect to db table otherwise can use global $con
//            global $con;
//            $output = ''; 
//            $count = 0;
//            $result = make_query(); //pass $con connection variable parameter to connect to db table otherwise can use global $con
//           while($row = mysqli_fetch_array($result)){
//               if($count == 0){
//                   $output .= '<li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active">
//                      </li>';
//               }else{
//                   $output .= '<li data-target="#dynamic_slide_show" data-slide-to= "'.$count.'" class="text-center"> 
//                   </li>';
//               }
//                 $count = $count + 1;
//           }
//          return $output;
//      }

function make_slides($con){
    $count = 0;
    $result = make_query();
    
    while($row = mysqli_fetch_array($result)){
        if($count == 0){
            echo '<div class="item active p-5">';
        }else{
            echo '<div class="item p-5">';
         }
            echo  '
             <div class="card1">
           
                <img class="center-block" src="banner/'.$row["banner_image"].'" "'.$row["banner_title"].'"/>
            <div class="carousel-caption p-5">
                <h3 class="mx-5">'.$row["banner_title"].'</h3>
            </div>
                
            </div>
        </div>';
    $count++;
    }
}
?>