<?php

session_start();
session_unset();
session_destroy();

header("location: ap.php");
exit();

?>