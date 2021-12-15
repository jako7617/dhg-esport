<!-- data base handler -->
<?php

$serverName = "localhost";
$dBFullName = "root";
$dBPassword = "";
$dBName = "dhgdata";

$conn = new mysqli ($serverName, $dBFullName, $dBPassword, $dBName);

if (!$conn) {
    die("Connection fejlede: " . mysqli_connect_error());
}