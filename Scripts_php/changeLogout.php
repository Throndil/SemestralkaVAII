<?php
session_start();
if (isset($_SESSION["userID"])){

    echo  '<li><a href="../HTML/profilePage.php">Profile</a></li>';
    echo '<li><a href="../Scripts_php/logout_script.php">Logout</a></li>';


}else{

    echo  '<li><a href="../HTML/signup.php">Signup</a></li>';
    echo  '<li><a href="../HTML/login.php">Log in</a></li>';

}