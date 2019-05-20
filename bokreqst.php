<?php
session_start();
   include("dbConnect.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {

		$opnumber =   mysqli_real_escape_string($con,$_POST['bopnum']);   
		$myusername = mysqli_real_escape_string($con,$_POST['bname']);
		$addate =   mysqli_real_escape_string($con,$_POST['badmitdate']);
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
	
$sql="Select Room_no From room Where Room_type = '$rmtyp' and Bed_no = '$bedno' and Tv = '$tv' and Wifi='$wifi' and Teleph = '$telph' limit 1";
$result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $rumno=$row['Room_no'];
if($row){
	$sql="INSERT INTO reqst (rqop,rqname,addate,rqrmty,rqbeno,rqtv,rqwifi,rqph,rmno) VALUES ('$opnumber','$myusername','$addate','$rmtyp','$bedno','$tv','$wifi','$telph','$rumno')";
if (mysqli_query($con, $sql)) {
	echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>";
	header( "refresh:0.5;url=booking.php" );
}else{
echo "<script type='text/javascript'>alert('You Have already submitted/Room Not Available! ')</script>";
header( "refresh:0.5;url=booking.php" );	
}
}else{
echo "<script type='text/javascript'>alert('Room Not Available! Change requirements')</script>";
header( "refresh:0.5;url=booking.php" );
}

   }
?>
 
