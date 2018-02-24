<?php

#Database connection credentials
$server="localhost";
$username="root";
$pass="";
$Database="project";
$ok="Success";

#Establishing connection
$conn=mysqli_connect($server,$username,$pass,$Database);
if (!$conn) 
{
	die("connection error:".mysql_connect_error());
}

$email=$_POST["eid"];
$pass=$_POST["pass"];
$query="select fname from users where email='$email' and password='$pass';";
$result=mysqli_query($conn,$query);

$resultcheck=mysqli_num_rows($result);

if($resultcheck)
{
	echo "hello";
	header('location:loginsuccess.html');
	session_start();
	$_SESSION["email"]=$email;

}
else
	
	header('location:login.html');


die($conn);
?>