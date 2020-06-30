<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'cart_system');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location: shopping.php');
}else{
	header('location: signup.php');
}
?>