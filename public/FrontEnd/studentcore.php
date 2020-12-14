<?php

require_once("connect.php");

$first_name = $_REQUEST ["first_name"];
$last_name = $_REQUEST ["last_name"];
$institution = $_REQUEST ["institution"];
$email = $_REQUEST ["email"];
$username = $_REQUEST ["username"];
$password = $_REQUEST ["password"];
$phone = $_REQUEST ["phone"];
$role = "student";

$insertQuery =
"INSERT INTO users(first_name,last_name,institution,email,password,phone,role) VALUES ('$first_name','$last_name','$institution','$email','$password',$phone,'$role')";
$runQuery = mysqli_query($con,$insertQuery);
if($runQuery == true)
	header("location:studentsSignUp.php?action=true");
else
	header("location:index.php?action=false");

?>