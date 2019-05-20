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
                    <input id="men" type="button" name="" value="BOOKINGS" onClick="window.location.href='strequest.html'" />
                    <input id="men" type="button" name="" value="VACATE" onClick="window.location.href='stvacate.html'" />
                    <input id="men" type="button" name="" value="LOGOUT" />
                </center>
            </div>
            <div id="pt">
                <h2>Booking Request</h2>
<?php
$result = mysqli_query($con,"SELECT * FROM reqst");

echo "<table border='1'>
<tr>
<th>Op Number</th>
<th>Name</th>
<th>Admit Date</th>
<th>Room Type</th>
<th>Bed Nos</th>
<th>TV</th>
<th>Wifi</th>
<th>Telephone</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['rqop'] . "</td>";
echo "<td>" . $row['rqname'] . "</td>";
echo "<td>" . $row['addate'] . "</td>";
echo "<td>" . $row['rqrmty'] . "</td>";
echo "<td>" . $row['rqbeno'] . "</td>";
echo "<td>" . $row['rqtv'] . "</td>";
echo "<td>" . $row['rqwifi'] . "</td>";
echo "<td>" . $row['rqph'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
                <form>
                    <center>
                        <table style="padding: 10px;">
                            <tr>
                                <td>Available rooms</td>
                                <td>
                                    <select>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">
                                    <td>
                                        <input id="men" name="Submit" value="Admit" type="button" />
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
