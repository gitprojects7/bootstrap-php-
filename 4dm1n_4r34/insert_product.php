<?php
include('../includes/connect.php');
@session_start();
if(!isset($_SESSION['admin_name'])){
    echo "<script>window.open('../index.php','_self')</script>";
  }
if(isset($_POST['insert_product'])){
 //   $product_tile=mysqli_real_escape_string($con,$_POST['product_title']);
        $product_tile=$_POST['product_title'];
        $description=$_POST['description'];
        $product_keywords=$_POST['product_keywords'];
        $product_link=$_POST['product_link'];
        $product_price=$_POST['product_price'];
        $product_status='true';

        $product_image1=$_FILES['product_image1']['name'];
        $product_image2=$_FILES['product_image2']['name'];
        $product_image3=$_FILES['product_image3']['name'];
  
        $temp_image1=$_FILES['product_image1']['tmp_name'];
        $temp_image2=$_FILES['product_image2']['tmp_name'];
        $temp_image3=$_FILES['product_image3']['tmp_name'];

        //if form fields == empty, echo script alert. else(if forms are filled) then upload file.
        if($product_tile=='' or $description=='' or $product_keywords=='' or $product_price=='' 
            or $product_image1=='' or $product_image2=='' or $product_image3=='' ){
                echo "<script>alert('Please fill all the available fields')</script>";
                exit();
            }else{
        //upload file, temp image to product_images folder. variable images
                move_uploaded_file($temp_image1,"./product_images/$product_image1");
                move_uploaded_file($temp_image2,"./product_images/$product_image2");
                move_uploaded_file($temp_image3,"./product_images/$product_image3");

                $insert_products="insert into `products` (product_title,product_description,product_keywords,
                product_image1,product_image2,product_image3,product_link,product_price,date,status) values ('$product_tile',
                '$description','$product_keywords','$product_image1','$product_image2','$product_image3',
                '$product_link','$product_price',NOW(),'$product_status')";
                $result_query=mysqli_query($con,$insert_products);
                if($result_query){
                    echo "<script>alert('Successfully inserted product')</script>";
                    echo "<script>window.open('../index.php','_self')</script>";
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
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "../style.css">

    </head>
    <body class = "bg-dark">
        <div class="container mt-3">
            <h1 class="text-center text-light"> Insert Doujin</h1>
            <form action="" method="post" enctype = "multipart/form-data"> 
                <!--form-->
                <div class="form-outline mb-4 w-50 m-auto text-light">
                    <label for="product_title" class="form-label"> Title</label>
                    <input type="text" name="product_title" id = "product_title" class = "form-control" placeholder = "Enter product title" autocomplete = "off" required = "required">
                </div>

        <!--description-->
                <div class="form-outline mb-4 w-50 mx-auto text-light">
                    <label for="description" class="form-label"> Product description</label>
                    <input type="text" name="description" id = "description" class = "form-control" placeholder = "Enter description" autocomplete = "off" required = "required">
                </div>

                    <!--keywords-->
                <div class="form-outline mb-4 w-50 m-auto text-light">
                    <label for="product_keywords" class="form-label"> Product keywords</label>
                    <input type="text" name="product_keywords" id = "product_keywords" class = "form-control" placeholder = "Enter keywords" autocomplete = "off" required = "required">
                </div>

                    <!--images-->
                <div class="form-outline mb-4 w-50 mx-auto text-light">
                    <label for="product_image1" class="form-label"> Product image 1</label>
                    <input type="file" name="product_image1" id = "product_image1" class = "form-control" required = "required">
                </div>

                     <!--images2-->
                     <div class="form-outline mb-4 w-50 mx-auto text-light">
                        <label for="product_image2" class="form-label"> Product image 2</label>
                    <input type="file" name="product_image2" id = "product_image2" class = "form-control" >
                </div>

                <!--images3-->
                <div class="form-outline mb-4 w-50 mx-auto text-light">
                    <label for="product_image3" class="form-label"> Product image 3</label>
                    <input type="file" name="product_image3" id = "product_image3" class = "form-control" >
                </div>
             <!--product link -->
             <div class="form-outline mb-4 w-50 m-auto text-light">
                    <label for="product_link" class="form-label"> Product link</label>
                    <input type="text" name="product_link" class = "form-control"
                     placeholder = "Enter product link" autocomplete = "off" required = "required">
                </div>
    
                          <!--price-->
                <div class="form-outline mb-4 w-50 m-auto text-light">
                    <label for="product_price" class="form-label"> Product price</label>
                    <input type="text" name="product_price" id="produce_price" class = "form-control"
                     placeholder = "Enter product price" autocomplete = "off" required = "required">
                </div>

                         <!--price button-->
                <div class="form-outline mb-4 w-50 m-auto text-light">
                    <input type="submit" name = "insert_product" class = "btn btn-danger mb-3 px-3" value = "Insert Product">
                </div>

            </form>
        </div>
    </body>
</html>