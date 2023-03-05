<?php 
        //if isset = on click. get function retrieves data from form
        if(isset($_GET['edit_products'])){
            $edit_id=$_GET['edit_products'];
            $get_data= "Select * from `products` where  product_id=$edit_id";
            $result=mysqli_query($con,$get_data);
            $row=mysqli_fetch_assoc($result);
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_keywords=$row['product_keywords'];
            $product_image1=$row['product_image1'];
            $product_image2=$row['product_image2'];
            $product_image3=$row['product_image3'];
            $product_price=$row['product_price'];
            $product_link=$row['product_link'];
    
        }
    ?>
    
<div class="container mt-5 bg-dark">
    <h5 class="text-center text-light"> Edit products</h5>
    <form action="" method = "post" enctype = "multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4 text-light">
            <label for="product_title" class="form-label">Doujin title</label>
            <input type="text" value = "<?php echo $product_title ?>" name = "product_title" class = "form-control">
        </div>
        <div class="form-outline w-50 m-auto mb-4 text-light">
            <label for="product_desc" class="form-label">Doujin description</label>
            <input type="text" value = "<?php echo $product_description ?>" name = "product_desc" class = "form-control" >
        </div>
        <div class="form-outline w-50 m-auto mb-4 text-light">
            <label for="product_keywords" class="form-label">Keywords</label>
            <input type="text"  value = "<?php echo $product_keywords ?>" name = "product_keywords" class = "form-control" >
        </div>
        <div class="form-outline w-50 m-auto mb-4 text-light">
            <label for="product_link" class="form-label">Product checkout link</label>
            <input type="text"  value = "<?php echo $product_link ?>" name = "product_link" class = "form-control">
        </div>

     <div class="form-outline w-50 mx-auto mb-4 text-light ">
      <label for="product_image1" class="form-label"> Image 1</label>
        <div class="d-flex">
         <span class="input-group-text" >
            <img src="./product_images/<?php echo $product_image1 ?>" class= "product_img"/>
            <input type="file"  name = "product_image1" class = "form-control w-90 m-auto">
        </span>
        </div>
    </div>

    <div class="form-outline w-50 mx-auto mb-4 text-light ">
      <label for="product_image2" class="form-label">image 2</label>
        <div class="d-flex">
         <span class="input-group-text" >
            <img src="./product_images/<?php echo $product_image2 ?>" class= "product_img"/>
            <input type="file"  name = "product_image2" class = "form-control w-90 m-auto">
        </span>
        </div>
    </div>

    <div class="form-outline w-50 mx-auto mb-4 text-light ">
      <label for="product_image3" class="form-label">Image 3</label>
        <div class="d-flex">
         <span class="input-group-text" >
            <img src="./product_images/<?php echo $product_image3 ?>" class= "product_img"/>
            <input type="file" name = "product_image3" class = "form-control w-90 m-auto">
        </span>
        </div>
    </div>
  
        <div class="form-outline w-50 m-auto mb-5 text-light">
            <label for="product_price" class="form-label">Price</label>
            <input type="text" value = "<?php echo $product_price ?>" name = "product_price" class = "form-control">
        </div>

        <div class="w-50 m-auto">
            <input type="submit" name = "edit_product" value = "Update product" class = "btn btn-danger px-3 mb-3">
        </div>
        </div>
     
    </form>
</div>

        <!--ecit products -- >
        <?php 
            if(isset($_POST['edit_product'])){
                $product_title=$_POST['product_title'];
                $product_desc=$_POST['product_desc'];
                $product_keywords=$_POST['product_keywords'];
                $product_price=$_POST['product_price'];
                $product_link=$_POST['product_link'];

                $product_image1=$_FILES['product_image1']['name'];
                $product_image2=$_FILES['product_image2']['name'];
                $product_image3=$_FILES['product_image3']['name'];

                $temp_image1=$_FILES['product_image1']['tmp_name'];
                $temp_image2=$_FILES['product_image2']['tmp_name'];
                $temp_image3=$_FILES['product_image3']['tmp_name'];
              

                    move_uploaded_file($temp_image1,"./product_images/$product_image1");
                    move_uploaded_file($temp_image2,"./product_images/$product_image2");
                    move_uploaded_file($temp_image3,"./product_images/$product_image3");
    
                    //query to update products
                    //if updating entry other than image. replace image 1,2,3 otherwise they will cause empty productimage 1,2,3 entries in database
                    $update_product="UPDATE`products` set product_title='$product_title',product_description='$product_desc',
                    product_keywords= '$product_keywords',product_image1= '$product_image1',  product_image2= '$product_image2',
                    product_image3= '$product_image3',product_price='$product_price', product_link='$product_link', date=NOW()
                    where product_id = $edit_id";
                    $result_update=mysqli_query($con,$update_product);
                   
                    //php query will take forever to update so wont be executing code below
                    //dont even try  header("Location: index.php"); you will need to refresh page manually for entries to be updated in database
                    if($result_update){
                        echo "<script>alert('Successfully updated product')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
                    }
                }
    
        ?>