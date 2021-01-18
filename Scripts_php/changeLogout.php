<?php
session_start();

if (isset($_SESSION["userID"]) && $_SESSION["username"] == "adminadmin") {

    echo '<li><a href="../HTML/profilePage.php">Profile</a></li>';
    echo '<li class="adminPageMenu"><a >Admin page</a>
    <ul class="adminVyber">    
        <li ><a  href="../HTML/adminPageUsers.php">Users</a></li>    
        <li ><a  href="../HTML/adminPageComments.php">Comments</a></li>    
        <li ><a  href="../HTML/adminWriteLog.php">Write log</a></li>   
        <li ><a  href="../HTML/adminSeeLogs.php">Logs</a></li>
    </ul> </li>';
    echo '<li><a href="../Scripts_php/logout_script.php">Logout</a></li>';

} else if (isset($_SESSION["userID"])) {

    echo '<li><a href="../HTML/profilePage.php">Profile</a></li>';
    echo '<li><a href="../Scripts_php/logout_script.php">Logout</a></li>';


} else {

    echo '<li><a href="../HTML/signup.php">Signup</a></li>';
    echo '<li><a href="../HTML/login.php">Log in</a></li>';

}