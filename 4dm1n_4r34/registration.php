<?php include('../includes/connect.php');
      include('../functions/common_function.php');
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
    </style>
</head>
<body class="bg-dark">
    <div class="container-fluid bg-dark">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-6 col-xl-5">
                <img src="../images/E52Wz54XsAQBkSi.jpg" class="product_img">
            </div>  
            <div class="col-xl-6 col-xl-5">
               <form action="" method ="post">
               <h2 class="text-center text-light mt-5">Admin registration</h2>

                <div class="form-outline mb-4 text-light mx-5">
                <label for="username" class="form-label">Username</label>
                <input type="text" id = "username" placeholder= "Enter username" name ="username" class="form-control" required= "required">
                </div>

                <div class="form-outline mb-4 text-light mx-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" id = "password" placeholder= "Enter password" name ="password" class="form-control" required= "required">
                </div>

                <div>
                    <input type="submit" class="bg-danger py-2 px-3 btn mx-5 text-light" name="admin_register" value="Register">
                    <p class="small fw-bold mt-2 pt-1 text-light mx-5">Have an account? <a href="login.php" class="link-success">Login<a/a></p>
                </div>
               </form>
            </div>  
        </div>
    </div>
</body>
</html>
<?php 
        if(isset($_POST['admin_register'])){ //method to recieve input. if post data user register
            $admin_username=htmlspecialchars($_POST['username']); //$user_username is a parameter
            $admin_password=htmlspecialchars($_POST['password']);
            
            $select_query = "Select * from `admin_table` where admin_name= '$admin_username' or admin_pass= '$admin_password'";
            $result=mysqli_query($con,$select_query);
            $rows_count=mysqli_num_rows($result);
                if($rows_count>0){
                    echo "<script>alert('username and email exist')</script>";
                }else{
                    //prepared statements to counter hacking
                    $insert_query= "insert into `admin_table` (admin_name,admin_pass)
                    values (?,?)"; // $admin_username $admin_password
                    $stmt = mysqli_stmt_init($con);
                    if(!mysqli_stmt_prepare($stmt, $insert_query)){
                        echo"error";
                    }else{
                        mysqli_stmt_bind_param($stmt, "ss",  $admin_username, $admin_password);
                        mysqli_stmt_execute($stmt);
                    }
                   $sql_execute=mysqli_query($con,$insert_query); //execute 
                }
                
        }
    ?>