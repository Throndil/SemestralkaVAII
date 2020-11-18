<?php

require_once "Functions.php";
require_once "DBConnector.php";

if (isset($_SESSION["userID"]) && isset($_SESSION["username"])){

$dataFromDB = unameExists($conn,$uname,$uname);





}