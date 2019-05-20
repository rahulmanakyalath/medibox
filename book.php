<?php
   include("dbConnect.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
		$opnum=mysqli_real_escape_string($con,$_POST['bopnum']);   
		$name=mysqli_real_escape_string($con,$_POST['bname']);   
		$admdate=mysqli_real_escape_string($con,$_POST['badmitdate']);  
		$rmtyp =   mysqli_real_escape_string($con,$_POST['rmtyp']);
		$bedno =   mysqli_real_escape_string($con,$_POST['bdno']);
		$tv =   mysqli_real_escape_string($con,$_POST['rqtv']);
		$wifi =   mysqli_real_escape_string($con,$_POST['rqwifi']);
		$telph =   mysqli_real_escape_string($con,$_POST['rqph']); 
		$rmnum=	mysqli_real_escape_string($con,$_POST['rumno']);

$sql= "INSERT INTO booking (opnum,name,admdate,roomnum)
VALUES ('$opnum','$name','$admdate','$rmnum')";

mysqli_query($con,$sql);

$sql="DELETE  from reqst where rqop='$opnum'";
if (mysqli_query($con, $sql)) {
	echo "<script type='text/javascript'>alert('Admitted Successfully!')</script>";
	header( "refresh:0.5;url=strequest.php" );
}
}
?>
