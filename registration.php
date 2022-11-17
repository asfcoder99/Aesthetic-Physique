<?php

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["age"];
    $password = $_POST["height"];
    $password = $_POST["password"];

    require_once 'dbh.php';
    require_once 'functions.php';


    if (uidexits($conn, $name, $email) !== false) {
        header("location: signup.php?error=usernametaken");
    exit();
    }

createUser($conn, $name, $email, $password);





}
else {
    header("location: signup.php");
}

?>




