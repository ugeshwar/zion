<?php
#Database connection credentials
$server="localhost";
$username="root";
$pass="";
$database="project";

#Establishing connection
$conn=mysqli_connect($server,$username,$pass,$database);
if (!$conn) 
{
	die("connection error:".mysql_connect_error());
}

#Data getting from form
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$mnumber=$_POST["mnumber"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$education=$_POST["education"];
$percentage=$_POST["percentage"];
$yop=$_POST["yop"];
$exp=$_POST["exp"];
$ps=$_POST["ps"];
$ss=$_POST["ss"];
$cctc=$_POST["cctc"];
$ectc=$_POST["ectc"];
$rfc=$_POST["rfc"];
$np=$_POST["np"];
$nperiod=$_POST["nperiod"];
$offers=$_POST["offers"];
$cl=$_POST["cl"];
$pl=$_POST["pl"];
$appc=$_POST["appc"];
$aadhar=$_POST["aadhar"];
$pan=$_POST["pan"];
$passport=$_POST["passport"];

#Executing Query
$query="insert into users (`fname`, `lname`, `dob`, `gender`, `mnumber`, `email`, `password`, `education`, `percentage`, `yop`, `exp`, `ps`, `ss`, `cctc`, `ectc`, `rfc`, `np`, `nperiod`, `offers`, `cl`, `pl`, `appc`, `aadhar`, `pan`, `passport`) values('$fname','$lname','$dob','$gender','$mnumber','$email','$pass','$education','$percentage','$yop','$exp','$ps','$ss','$cctc','$ectc','$rfc','$np','$nperiod','$offers','$cl','$pl','$appc','$aadhar','$pan','$passport');";

$result=mysqli_query($conn,$query);
if ($result) 
	{
		header('location:regsuccess.html');
 	}
else
	{
	header('location:reg.html');
	}
?>