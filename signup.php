<?php
session_start();

$con = mysqli_connect("localhost","root","","shri","3308");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uemail=$_POST['ueamil'];
$upass=$_POST['upass'];

$sql = "insert into info(c_fname,c_lname,c_email,c_pass) values('$fname','$lname','$uemail','$upass')";
if (mysqli_query($con,$sql)) {
	$_SESSION['userfirstname']=$fname;
	echo "You are Sign_up SuccessFull";
	header("refresh:3;url=login.php");
}

else{
	echo "try again";
}


?>