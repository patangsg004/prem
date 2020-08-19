<?php
session_start();
$con=mysqli_connect("localhost","root","","shri","3308");

$uem =$_POST['uem'];
$upass =$_POST['upass'];

$sql ="select c_fname from info where c_email='$uem' and c_pass='$upass'";


$result= mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
	
	$_SESSION['userfirstname'] = $row['c_fname'];

echo "Welcome To Our website";
header("refresh:3;url=index.php");
}
}


else{
	echo "please try again";
	header("refresh:3;url=login.php");
}

?>