<?php 
    if(isset($_GET['delete_product'])){
        $delete_id=$_GET['delete_product'];

        $delete_product="Delete from `products` where product_id=$delete_id";
        $result_product=mysqli_query($con,$delete_product);
        if($result_product){
            echo "<script>alert('Doujin title deleted')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
    ?>

<?php 
//    if(isset($_POST['delete_product'])){
//        $delete_id=$_GET['delete_product'];
//        $delete_product="Delete from `user_orders` where order_id=$delete_id";
//        $result_product=mysqli_query($con,$delete_product);
//        if($result_product){
//            echo "<script>alert('Doujin title deleted')</script>";
//            echo "<script>window.open('index.php','_self')</script>";
//        }
//    }

    ?>
