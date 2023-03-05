<?php
include('../includes/connect.php');

@session_start();
//if session isnt equal to admin_name table variable, then return to website page
if(!isset($_SESSION['admin_name'])){
    echo "<script>alert('Fuck off!')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
}
if(isset($_POST['insert_product'])){

        $product_image1=$_FILES['product_image1']['name'];
        $description=$_POST['description'];
   
        //if form fields == empty, echo script alert. else(if forms are filled) then upload file.
        if( $product_image1==''){ //or $description==''
                echo "<script>alert('Please fill all the available fields')</script>";
                exit();
            }else{
        //upload file, temp image to product_images folder. variable images
                move_uploaded_file($_FILES['product_image1']['tmp_name'], "../banner/$product_image1");

                $insert_products="insert into `banner` (banner_title,
                banner_image) values ('$description', '$product_image1')";
                $result_query=mysqli_query($con,$insert_products);
                if($result_query){
                    echo "<script>alert('Successfully inserted product')</script>";
                    echo "<script>window.open('./index.php','_self')</script>";
                }
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!--font boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel = "stylesheet" href = "../style.css">

    </head>
    <body class = "bg-dark">
        <div class="container mt-5">
            <h1 class="text-center text-light my-4">Image content slider</h1>
            <form action="" method="post" enctype = "multipart/form-data"> 
                <!--form-->
                <div class="form-outline mb-4 w-50 mx-auto text-light">
                    <label for="description" class="form-label my-3">Image description</label>
                    <input type="text" name="description" id = "description" class = "form-control" placeholder = "Enter description" autocomplete = "off">
                </div>

                    <!--images-->
                <div class="form-outline mb-4 w-50 mx-auto text-light">
                    <label for="product_image1" class="form-label my-3"> Product image 1</label>
                    <input type="file" name="product_image1" id = "product_image1" class = "form-control" required = "required">
                </div>

                         <!--price button-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name = "insert_product" class = "btn btn-danger mb-3 px-3 text-light" value = "Insert Product">
                </div>

            </form>
        </div>
    </body>
</html>