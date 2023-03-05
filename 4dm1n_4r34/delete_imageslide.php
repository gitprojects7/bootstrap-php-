<?php 
    if(isset($_GET['delete_imageslide'])){
        $sql=$_GET['delete_imageslide'];

        $delete_banner="DELETE FROM `banner` WHERE banner_id=$sql";
        $result_product=mysqli_query($con,$delete_banner);
        if($result_product){
            echo "<script>alert('Doujin title deleted')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
    ?>