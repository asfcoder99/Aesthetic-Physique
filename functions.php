<?php

function uidexits($conn, $name, $email) {
    $sql = "SELECT * FROM usertable WHERE nameid = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=usernametaken");
    exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

mysqli_stmt_close($stmt);

}

function createUser($conn, $name, $email, $password) {
    $sql = "INSERT INTO usertable (nameid, email, userpassword) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: signup.php?error=none");
    exit();
}

function loginuser($conn, $name, $password) {
    $uidexists = uidexits($conn, $name, $name);

    if ($uidexists === false) {
        header("location: login.php?error=wronglogin");
        exit();
    }

    $pwdhashed = $uidexists["userpassword"];
    $checkpwd = password_verify($password, $pwdhashed);

    if ($checkpwd === false) {
        header("location: login.php?error=wronglogin");
        exit();
    }
    else if ($checkpwd === true) {
        session_start();
        $_SESSION["website"] = $uidexists["nameid"];
        header("location: ap.php");
        exit();
    }
}