<?php
   include("dbConnect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Room Vacate</title>
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
                <h2>Discharge Request</h2>
<?php
$result = mysqli_query($con,"SELECT * FROM booking");

echo "<table border='1'>
<tr>
<th>Op Number</th>
<th>Name</th>
<th>Admit Date</th>
<th>Room No</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['opnum'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['admdate'] . "</td>";
echo "<td>" . $row['roomnum'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
                <form action="dealocate.php" method="POST">
                    <center>
                        <table style="padding: 10px;">
                            <tr>
                                <td>Op Number</td>
                                <td>
                                    <input class="textbox" name="bopnum" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">
                                    <td>
                                        <input id="men" name="Submit" value="Vacate" type="Submit" />
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
