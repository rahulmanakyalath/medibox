<?php
   include("dbConnect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Staff Home</title>
</head>

<body>
    <center>
        <div class="container">
            <center>
                <div id="hdr">
                    <h1>ViZ HOSPITAL</h1>
                </div>
            </center>
            <div id="menu">
                <center>
                    <input id="men" type="button" name="home" value="Home" onClick="window.location.href='stfhome.php'" />
                     <input id="men" type="button" name="" value="ADD ROOM" onClick="window.location.href='stadd.php'" />
                    <input id="men" type="button" name="" value="BOOKINGS" onClick="window.location.href='strequest.php'" />
                    <input id="men" type="button" name="" value="VACATE" onClick="window.location.href='stvacate.php'" />
                    <input id="men" type="button" name="" value="LOGOUT" onClick="window.location.href='stflogin.html'" />
                </center>
            </div>
            <center>
                <div>
                    <br><br>
                    <?php
						$sql="Select COUNT(Room_no) as rmn from room";
						$result=mysqli_query($con, $sql);
						$row = mysqli_fetch_assoc($result);
						echo("<h2>ToTal rooms  =>" .$row['rmn']."</h2><br>");
						$sql2="Select COUNT(roomnum) as rmn2 from booking";
						$result2=mysqli_query($con, $sql2);
						$row2 = mysqli_fetch_assoc($result2); 
						echo("<h2>ToTal Rooms booked =>" .$row2['rmn2']."</h2><br>");
						$rem=	$row['rmn']-$row2['rmn2'];
						echo("<h2>Available rooms  =>" .$rem."</h2>");	
					
					?>                
                </div>
            </center>
        </div>
    </center>
</body>

</html>
