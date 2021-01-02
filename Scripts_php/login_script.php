<?php
if (isset($_POST["submit"])) {

    $uname = $_POST["uname"];
    $passwd = $_POST["passwd"];

    require_once 'DBConnector.php';
    require_once 'Functions.php';

    if (emptyInputLogin($uname, $passwd) !== false) {

        header("location: ../HTML/login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $uname, $passwd);

} else {

    header("location: ../HTML/login.php");
    exit();


}