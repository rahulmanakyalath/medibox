<?php
   include("dbConnect.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
		$rmnum =   mysqli_real_escape_string($con,$_POST['rmnum']);   
		$rmtyp =   mysqli_real_escape_string($con,$_POST['brmtyp']);
		$bedno =   mysqli_real_escape_string($con,$_POST['bed']);
		$tv =   mysqli_real_escape_string($con,$_POST['tv']);
		$wifi =   mysqli_real_escape_string($con,$_POST['wifi']);
		$telph =   mysqli_real_escape_string($con,$_POST['telph']);
if($tv=="TV"){
		$tv='1';
	}else{
		$tv='0';
	}

if($wifi=="WiFi"){
		$wifi='1';
	}else{
		$wifi='0';
	}

if($telph=="Telephone"){
		$telph='1';
	}else{
		$telph='0';
	}
	
$sql = "INSERT INTO room (Room_no,Room_type,Bed_no,Tv,Wifi,Teleph)
VALUES ('$rmnum','$rmtyp','$bedno','$tv','$wifi','$telph')";

if (mysqli_query($con, $sql)) {
	echo "<script type='text/javascript'>alert('Inserted Successfully!')</script>";
	header( "refresh:0.5;url=stadd.php" );
} else {
    echo "<script type='text/javascript'>alert('Error!')</script>";
	header( "refresh:0.5;url=stadd.php" );
}




}
?>
