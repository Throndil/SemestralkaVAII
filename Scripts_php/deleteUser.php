<?php

session_start();

require_once "Functions.php";
require_once "DBConnector.php";


if (isset($_SESSION["userID"]) && isset($_SESSION["username"])) {

    if (isset($_POST["submitNo"])) {

        header("location: ../HTML/profilePage.php?error=noDataChanged");
        exit();

    } elseif (isset($_POST["submitYes"])) {

        deleteAccount($conn, $_SESSION["userID"]);


    }


}