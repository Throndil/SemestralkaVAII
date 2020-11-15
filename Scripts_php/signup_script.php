<?php

if (isset($_POST['submit'])) {

$uname = $_POST["uname"];
$email = $_POST["email"];
$passwd = $_POST["passwd"];
$passwdRepeat = $_POST["passwdRe"];



require_once 'DBConnector.php';
require_once 'Functions.php';

if (emptyInputSignup($uname,$email,$passwd,$passwdRepeat) !== false){

    header("location: ../HTML/signup.html?error=emptyinput");
    exit();
}

if (invalidUname($uname) !== false){

    header("location: ../HTML/signup.html?error=invaliduname");
    exit();
}

if (invalidEmail($email) !== false){

    header("location: ../HTML/signup.html?error=invalidemail");
    exit();
}
if (passwdMatch($passwd,$passwdRepeat) !== false){

    header("location: ../HTML/signup.html?error=passwdnonmatch");
    exit();
}


if (unameExists($conn, $uname) !== false){

    header("location: ../HTML/signup.html?error=unameexists");
    exit();
}

createUser($conn, $uname, $email , $passwd);




}
else
{

    header("location: ../HTML/signup.html?BADGATEWAY");
    exit();

}