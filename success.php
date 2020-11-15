<?php
session_start();

$a = $_SESSION["fname"];
$b = $_SESSION["fam"];
$c = $_SESSION["extension"];
$d = date("YmdHi");

rename("uploads/$a","uploads/$b-$d.$c");





session_destroy();

?>
<!DOCTYPE html>
<html>
    <header>
        <link rel="stylesheet" type="text/css" href="ache.css">
        <meta http-equiv="refresh" content="15;url=https://www.ache.blkfarms.com" />
        <title>Success!!!</title>
    </header>
<body>
    
    <div align=center>
    <h1>Thank you!!!</h1>
    <h1>Your File has been uploaded successfully</h1>
    <br>
    <br>
    <p>Page will redirect to home in 15 seconds</p>
    </div>

</body>
</html>