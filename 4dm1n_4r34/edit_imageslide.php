<?php 
        //if isset = on click. get function retrieves data from form
        if(isset($_GET['edit_imageslide'])){
            $edit_id=$_GET['edit_imageslide'];
            $get_data= "Select * from `banner` where  banner_id=$edit_id";
            $result=mysqli_query($con,$get_data);
            $row=mysqli_fetch_assoc($result);
            $banner_title=$row['banner_title'];
            $banner_image=$row['banner_image'];
        
        }
    ?>

<div class="container mt-5 bg-dark">
    <h5 class="text-center text-light"> Edit products</h5>
    <form action=""  method = "post" enctype = "multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4 text-light">
            <label for="banner_title" class="form-label">Image slider content</label>
            <input type="text" value = "<?php echo $banner_title ?>" name = "banner_title" class = "form-control">
        </div>
     

     <div class="form-outline w-50 mx-auto mb-4 text-light ">
      <label for="banner_image" class="form-label"> Image</label>
        <div class="d-flex">
         <span class="input-group-text" >
            <img src="../banner/<?php echo $banner_image ?>" class= "product_img"/>
            <input type="file" name = "banner_image" class = "form-control w-90 m-auto">
        </span>
        </div>
    </div>
        <div class="w-50 m-auto">
            <input type="submit" name = "edit_image" value = "Update product" class = "btn btn-danger px-3 mb-3">
        </div>
        </div>
     
    </form>
</div>

        <!--ecit products -- >
        <?php 
            if(isset($_POST['edit_image'])){
                $banner_title=mysqli_real_escape_string($con,$_POST['banner_title']);
                $banner_image=$_FILES['banner_image']['name'];

                $temp_image1=$_FILES['banner_image']['tmp_name'];
            
                    move_uploaded_file($temp_image1,"../banner/$banner_image");
// date=NOW() will make program fail because the code timestamps date/time and sends to database, banner has no table for date/time so cause error updating other query updates
                    $update_image = "UPDATE `banner` SET banner_title= '$banner_title', banner_image='$banner_image'
                     where banner_id = $edit_id";
                    $result=mysqli_query($con,$update_image);
                    location.reload();
                }
    
        ?>