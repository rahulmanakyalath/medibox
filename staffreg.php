<?php

include("dbConnect.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

$stfid = mysqli_real_escape_string($con,$_POST['stid']);
$stfname = mysqli_real_escape_string($con,$_POST['stname']);
$dept = mysqli_real_escape_string($con,$_POST['dept']);
$gndr = mysqli_real_escape_string($con,$_POST['gender']);
$phn = mysqli_real_escape_string($con,$_POST['stph']);
$psw = mysqli_real_escape_string($con,$_POST['pass']);

$sql = "INSERT INTO staff (Staff_id,Staff_Name,Department,Gender,PhoneNumber,Password)
VALUES ('$stfid','$stfname','$dept','$gndr','$phn','$psw')";

if (mysqli_query($con, $sql)) {
echo "<script type='text/javascript'>alert('Registration Complete! Now you can Login')</script>";
	header( "refresh:0.5;url=stflogin.html" );
} else {
    header("location: staffhm.html");
}

}

mysqli_close($con);
?>
