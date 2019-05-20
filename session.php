 <?php
   include("dbConnect.php");
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($con,"select Patient_Name from member where Patient_Name = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];

   if(!isset($_SESSION['login_user'])){
      header("location:ptlogin.html");
   }
?>
