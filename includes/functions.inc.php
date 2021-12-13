<?php

function emptyInputSignup($name, $email, $pwd, $pwdRepeat) {
    $result;
        if (empty($name) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
            $result = true;
        }
        else {
            $result = false;
        }
            return $result;

}

function invalidEmail($email) {
    $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else {
            $result = false;
        }
            return $result;

}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
        if ($pwd !== $pwdRepeat)) {
            $result = true;
        }
        else {
            $result = false;
        }
            return $result;

}

function uidExists($conn, $name, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn); 
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt); 
    
    if (mysqli_fetch_assoc($resultData)) {

    }

    else {
        $result = false;
        return $result;
    }

}