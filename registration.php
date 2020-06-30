<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'cart_system');

$name = $_POST['user'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "Username already taken please login";
	header('location: login.php');
}else{
	$reg = "insert into usertable (name, mobile, email, password) values ('$name', '$mobile', '$email', '$password')";
	mysqli_query($con, $reg);
	echo "Registration successfull";
	header('location: shopping.php');
}
?>