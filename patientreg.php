<?php

include("dbConnect.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

$opnum = $_POST['opnum'];
$ptname = mysqli_real_escape_string($con,$_POST['name']);
$age = mysqli_real_escape_string($con,$_POST['age']);
$gender = mysqli_real_escape_string($con,$_POST['gender']);
$add = mysqli_real_escape_string($con,$_POST['addr']);
$blood = mysqli_real_escape_string($con,$_POST['bg']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$pass = mysqli_real_escape_string($con,$_POST['password']);

$sql = "INSERT INTO member (Op_Number,Patient_Name,Age,Gender,Address,Blood_Group,PhoneNumber,Password)
VALUES ('$opnum','$ptname','$age','$gender','$add','$blood','$phone','$pass')";

if (mysqli_query($con, $sql)) {
	echo "<script type='text/javascript'>alert('Registration Complete! Now you can Login')</script>";
	header( "refresh:0.5;url=ptlogin.html" );
} else {
    header("location: patienthm.html");
}

}

mysqli_close($con);
?>
