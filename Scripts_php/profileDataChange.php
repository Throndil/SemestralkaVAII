<?php

session_start();

require_once "Functions.php";
require_once "DBConnector.php";

if (isset($_SESSION["userID"]) && isset($_SESSION["username"])) {


    $newFirstname = trim($_POST["newFirstname"]);
    $newLastName = trim($_POST["newLastName"]);
    $newUname = trim($_POST["newUname"]);
    $newEmail = trim($_POST["newEmail"]);
    $newProfileText = trim($_POST["newProfileText"]);

    changeUserData($conn, $_SESSION["userID"], $newFirstname, $newLastName, $newUname, $newEmail,$newProfileText);


} else {

    header("location: ../HTML/index.php?error=notLoggedIn");
    exit();

}

