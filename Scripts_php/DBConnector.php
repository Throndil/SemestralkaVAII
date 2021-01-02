<?php


$serverName = "localhost";
$DBUsername = "root"; // nazov usera v databaze
$DBPasswd = "dtb456";
$DBNameOfSchema = "vaiisem"; //nazov databazy


$conn = mysqli_connect("localhost", "root", "dtb456", "vaiisem");


if (!$conn) {

    die("Connection failed " . mysqli_connect_error());

}