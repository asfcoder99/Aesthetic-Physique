<?php
if(isset($_POST["submit"])) {

    $name = $_POST["name"];
    $password = $_POST["password"];

    require_once 'dbh.php';
    require_once 'functions.php';

    loginuser($conn, $name, $password);
}
else {
    header("location: login.php");
    exit();
}

?>