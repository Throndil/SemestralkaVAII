<?php

if (isset($_POST['submit'])) {

    $uname = trim($_POST["uname"]);
    $email = trim($_POST["email"]);
    $passwd = trim($_POST["passwd"]);
    $passwdRepeat = trim($_POST["passwdRe"]);


    require_once 'DBConnector.php';
    require_once 'Functions.php';

    if (emptyInputSignup($uname, $email, $passwd, $passwdRepeat) !== false) {

        header("location: ../HTML/signup.php?error=emptyinput");
        exit();
    }

    if (invalidUname($uname) !== false) {

        header("location: ../HTML/signup.php?error=invaliduname");
        exit();
    }

    if (invalidEmail($email) !== false) {

        header("location: ../HTML/signup.php?error=invalidemail");
        exit();
    }
    if (passwdMatch($passwd, $passwdRepeat) !== false) {

        header("location: ../HTML/signup.php?error=passwdnonmatch");
        exit();
    }


    if (unameExists($conn, $uname, $uname) !== false) {

        header("location: ../HTML/signup.php?error=unameexists");
        exit();
    }
    if (unameExists($conn, $email, $email) !== false) {

        header("location: ../HTML/signup.php?error=emailexists");
        exit();
    }
    createUser($conn, $uname, $email, $passwd);


} else {

    header("location: ../HTML/signup.php?BADGATEWAY");
    exit();

}