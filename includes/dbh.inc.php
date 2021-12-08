<!-- data base handler -->
<?php

$serverName = "localhost";
$dBFullName = "root";
$dBPassword = "";
$dBName = "dhgdata";

$conn = mysqli_connect($serverName, $dBFullName, $dBPassword, $dBPassword);

if (!$conn) {
    die("Connection fejlede: " . mysqli_connect_error());
}