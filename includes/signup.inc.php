<?php

if (isset($_POST["submit"])) {
// du kan sige echo("det virker"); for at tjekke

    $name = $_POST["name"];
    $name = $_POST["email"];
    $name = $_POST["pwd"];
    $name = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

}

else {
    header("location: ../signup.php");
}