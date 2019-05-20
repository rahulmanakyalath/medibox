<?php
session_start();
$opnumber = $_SESSION['varname1'];
$myusername =$_SESSION['varname2'];
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Booking</title>

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
                    <input id="men" type="button" name="" value="Patient" />
                    <input id="men" type="button" name="" value="About" />
                    <input id="men" type="button" name="" value="Contact" />
                    <input id="men" type="button" name="" value="LOGOUT" onclick="window.location.href='ptlogin.html'" />
                </center>
            </div>
            <div id="pt">
                <h2>Booking</h2>
                <form action = "bokreqst.php" method = "POST">
                    <center>
                        <table style="padding: 10px;">
                            <tr>
                                <td>Op Number</td>
                                <td>
                                    <input class="textbox" name="bopnum" type="text" value="<?php echo $opnumber;?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input class="textbox" name="bname" type="text" value="<?php echo $myusername;?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Admit Date</td>
                                <td>
                                    <input class="textbox" name="badmitdate" type="text" value="<?php echo date('d/m/y');?>">
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
                                    <input id="men" name="check" value="Check" type="Submit" />
                                </td>
                                <td>

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
