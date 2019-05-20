<?php
session_start();
   include("dbConnect.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {

	$opnumber =   mysqli_real_escape_string($con,$_POST['opnum']);   
	$myusername = mysqli_real_escape_string($con,$_POST['name']);
	$mypassword = mysqli_real_escape_string($con,$_POST['pass']);
$_SESSION['varname1'] = $opnumber;
$_SESSION['varname2'] = $myusername;
      $sql = "SELECT Op_Number FROM member WHERE Op_Number='$opnumber' and Patient_Name= '$myusername' and Password = '$mypassword'";

      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);


      if($count == 1) {
         header("location: booking.php");
      }else 
      {

         header( "location: ptlogin.html");
      }

   }
?>
