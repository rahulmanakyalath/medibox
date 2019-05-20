<?php
   include("dbConnect.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
	$opnumber =   mysqli_real_escape_string($con,$_POST['bopnum']);

	$sql="Delete from booking where opnum = '$opnumber'";
	if (mysqli_query($con, $sql)) {
	echo "<script type='text/javascript'>alert('Room Vacated Successfully!')</script>";
	header( "refresh:0.5;url=stvacate.php" );
}
}
?>
