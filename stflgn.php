<?php
   include("dbConnect.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {

	$stid =   mysqli_real_escape_string($con,$_POST['stid']);   
	$myusername = mysqli_real_escape_string($con,$_POST['stname']);
	$mypassword = mysqli_real_escape_string($con,$_POST['pass']);

      $sql = "SELECT Staff_Id FROM staff WHERE Staff_Id='$stid' and Staff_Name= '$myusername' and Password = '$mypassword'";

      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);


      if($count == 1) {

         header("location: stfhome.php");
      }else 
      {

         header( "location: stflogin.html");
      }

   }
?>
