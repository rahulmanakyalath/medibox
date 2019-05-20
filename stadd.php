<?php
   include("dbConnect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Add Room</title>
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
                <h2>Add Room</h2>
                <form action="addrm.php" method ="POST">
                    <center>
                    <?php
$result = mysqli_query($con,"SELECT * FROM room");

echo "<table border='1'>
<tr>
<th>Room No</th>
<th>Room Type</th>
<th>Bed Nos</th>
<th>Tv</th>
<th>Wifi</th>
<th>Telephone</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Room_no'] . "</td>";
echo "<td>" . $row['Room_type'] . "</td>";
echo "<td>" . $row['Bed_no'] . "</td>";
echo "<td>" . $row['Tv'] . "</td>";
echo "<td>" . $row['Wifi'] . "</td>";
echo "<td>" . $row['Teleph'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
                    
                        <table style="padding: 10px;">
                            <tr>
                                <td>Room Number</td>
                                <td>
                                    <input class="textbox" name="rmnum" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Room Type</td>
                                <td>
                                    <input name="brmtyp" value="AC" type="radio"> AC
                                    <br>
                                    <input name="brmtyp" value="NONAC" type="radio"> NON-AC</td>
                            </tr>
                            <tr>
                                <td>Bed(Nos)</td>
                                <td>
                                    <input name="bed" value="1" type="radio"> 1
                                    <br>
                                    <input name="bed" value="2" type="radio"> 2
                                    <br>
                                    <input name="bed" value="3" type="radio"> 3</td>
                            </tr>
                            <tr>
                                <td>Extra Facilities</td>
                                <td>
                                    <input type="checkbox" name="tv" value="TV">TV
                                    <br>
                                    <input type="checkbox" name="wifi" value="WiFi">WiFi
                                    <br>
                                    <input type="checkbox" name="telph" value="Telephone">Telephone
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">
                                </td>
                                <td>
                                    <input id="men" name="Submit" value="ADD" type="Submit" />
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
