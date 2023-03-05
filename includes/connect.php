<?php

//$con=mysqli_connect('localhost','root', '', 'mangashop2');
//    if(!$con){
//        die(mysqli_error($con));
//    }
    
 ?>

<?php

//$week = new DateTime('+1 week');
//setcookie('key', 'value', $week->getTimestamp(), '/', null, null, true);

//turns off error messages that appear in test environment. errors show root folder location, hackers can use it to hack into root folder location
ini_set('display_errors', 'OFF'); //turns off error messages that appear in test environment
error_reporting(0); //turns off error messages that appear in test environment. errors show root folder, hackers can use it to hack into website root folder location

$username= "localhost";
$name= "root";
$password = "";
$db_name = "asianbabepenetration";

$con = mysqli_connect($username, $name, $password, $db_name);

if (!$con) {
	echo "Connection failed!";
}
?>