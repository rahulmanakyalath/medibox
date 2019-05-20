<?php
   include("dbConnect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Room Request</title>
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
                    <input id="men" type="button" name="" value="LOGOUT" />
                </center>
            </div>
            <div id="pt">
                <h2>Booking Request</h2>
                <form action="book.php" method="POST">
                    <center>
<?php
$result = mysqli_query($con,"SELECT * FROM reqst limit 1");
while($row = mysqli_fetch_array($result))
{
?>
                        <table style="padding: 10px;">
                            <tr>
                                <td>Op Number</td>
                                <td>
                                    <input class="textbox" name="bopnum" type="text" value="<?php echo  $row['rqop'] ;?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input class="textbox" name="bname" type="text"  value="<?php echo  $row['rqname'] ;?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Admit Date</td>
                                <td>
                                    <input class="textbox" name="badmitdate" type="text"  value="<?php echo  $row['addate'] ;?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Room Type</td>
                                <td><input class="textbox" name="rmtyp" type="text"  value="<?php echo  $row['rqrmty'] ;?>">
                                    </td>
                            </tr>
                            <tr>
                                <td>Bed(Nos)</td>
                                <td>
                                    <input class="textbox" name="bdno" type="text"  value="<?php echo  $row['rqbeno'] ;?>"></td>
                            </tr>
                            <tr>
                                <td>TV</td>
                                <td>
                                    <input class="textbox" name="rqtv" type="text"  value="<?php echo  $row['rqtv'] ;?>"></td>
                            </tr>
<tr>
                                <td>Wifi</td>
                                <td>
                                    <input class="textbox" name="rqwifi" type="text"  value="<?php echo  $row['rqwifi'] ;?>"></td>
                            </tr>
<tr>
                                <td>Telephone</td>
                                <td>
                                    <input class="textbox" name="rqph" type="text"  value="<?php echo  $row['rqph'] ;?>"></td>
                            </tr>
                            <tr>
                                <td>Room No</td>
                                <td>
                                    <input class="textbox" name="rumno" type="text"  value="<?php echo  $row['rmno'] ;?>"></td>
                            </tr>
<?php
        }
        ?>
                            
                            <tr>
                                <td style="padding: 10px;">
                                    <td>
                                        <input id="men" name="Submit" value="Admit" type="Submit" />
                                    </td>
                            </tr>
                        </table>
                    </center>
                </form>
            </div>
        </div>
    </center>
</body>

</html>
