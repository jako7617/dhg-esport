<?php
$serverName = "localhost";
$dBFullName = "root";
$dBPassword = "";
$dBName = "dhgdata";

$conn = mysqli_connect($serverName, $dBFullName, $dBPassword, $dBPassword);

if (!$conn) {
    die("Connection fejlede: " . mysqli_connect_error());
}


if (isset($_POST["submit"])) {
    
// du kan sige echo("det virker"); for at tjekke

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (emptyInputSignup($name, $email, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");     
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");     
        exit();   
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");     
        exit();   
    }
    
    createUser($conn, $name, $email, $pwd);

}

else {
    header("location: ../signup.php");
    exit();
}