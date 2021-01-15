<?php

require_once "Functions.php";
require_once "DBConnector.php";

if (isset($_SESSION["userID"]) && isset($_SESSION["username"])) {


    $dataFromDB = unameExists($conn, $_SESSION["username"], $_SESSION["username"]);
    $fullNameExists = fullNameExists($conn, $dataFromDB["fullName"], $_SESSION["username"]);


    if ($fullNameExists) {

        $arrayOfNames = explode(" ", $dataFromDB["fullName"]);
        if (sizeof($arrayOfNames) == 1) {

            $firstName = $arrayOfNames[0];
            $lastName = "Nezadane";

        } elseif (sizeof($arrayOfNames) < 1) {        // Kontrola naviac, pre istotu

            $firstName = "Nezadane";
            $lastName = "Nezadane";
        } else {

            $firstName = $arrayOfNames[0];
            $lastName = $arrayOfNames[1];

        }

    } else {

        $firstName = "Nezadane";
        $lastName = "Nezadane";

    }


    $username = $dataFromDB["username"];
    $email = $dataFromDB["email"];
    $profileText = $dataFromDB["profileText"];


} else {

    header("location: ../HTML/index.php?error=notLoggedIn");
    exit();

}