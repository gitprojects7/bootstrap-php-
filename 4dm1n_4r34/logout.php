<?php 
    session_start();
    session_unset();
    session_destroy();
    echo "<script>window.open('../index.php','_self')</script>";
    //header("Location: ../index.php"); either code or line 5 has same output
?>