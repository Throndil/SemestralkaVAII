<?php

session_start();

require_once "Functions.php";
require_once "DBConnector.php";

if (isset($_SESSION["userID"]) && isset($_SESSION["username"])){



    $newFirstname = $_POST["newFirstname"];
    $newLastName = $_POST["newLastName"];
    $newUname = $_POST["newUname"];
    $newEmail = $_POST["newEmail"];

    changeUserData($conn, $_SESSION["userID"],$newFirstname, $newLastName,$newUname,$newEmail);



}else{

    header("location: ../HTML/index.php?error=notLoggedIn");
    exit();

}

