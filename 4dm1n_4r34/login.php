<?php include('../includes/connect.php');
      include('../functions/common_function.php');
      @session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        body{
            overflow-x: hidden;
        }
     .product_image{
        width: 690px;
     }
    </style>
</head>
<body class="bg-dark">
     <div class="row d-flex justify-content-center align-items-center mx-1">
            <div class="col-xl-6">
                <img src="../images/E52Wz54XsAQBkSi.jpg" class="product_image">
            </div>  
            <div class="col-xl-6">
               <form action="" method ="post">
               <h2 class="text-center text-light mt-5">Admin Login</h2>

                <div class="form-outline mb-4 text-light mx-5">
                <label for="username" class="form-label">Username</label>
                <input type="text" id = "username" placeholder= "Enter username" name ="username" class="form-control" required= "required">
                </div>

                <div class="form-outline mb-4 text-light mx-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" id = "password" placeholder= "Enter password" name ="password" class="form-control" required= "required">
                </div>
            
                <div>
                  <input type="submit" class="bg-info btn-outline-light py-2 px-3 btn mx-5 text-light" name="admin_login" value="Login">
              <!--    <p class="small fw-bold mt-2 pt-1 text-light mx-5">Dont have an account? <a href="registration.php" class="link-danger">Register</a></p> -->
                </div>
               </form>
            </div>  
        </div>
    </div>
</body>
</html>

<?php 
    //isset means on click, get data from name=admin_login via button 
    //then stores data from username and password fields in $admin_name and $admin pass
    //select query where admin_name(table name) is compared to data stored in $admin_name
    //query results= select query function. and table rows, row data are fetched. 
if(isset($_POST['admin_login'])){
    $admin_name=$_POST['username'];
    $admin_password=$_POST['password'];


    //select query both name and password, if only name is selected then $row_count works only for name. redirecting to login successful
    $select_query = "Select * from `admin_table` where admin_username='$admin_username'";
    $select_query = "Select * from `admin_table` where admin_pass='$admin_password'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);  
     @session_start();
    if($row_count=1){
$_SESSION['admin_name']=$admin_name; //this line initiates session. once session is active we can call table variables from database
        echo "<script>alert('Login successful')</script>";
        echo "<script>window.open('index.php','_self')</script>";
          
    }else{
        echo "<script>alert('Fuck off')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    } 
//    if($_SESSION['admin_pass'] != $admin_password){
 //       echo "<script>alert('Fuck off')</script>";
 //       echo "<script>window.open('../index.php','_self')</script>";
 //   }
}
?>
