<?php

include "DBConnector.php";

if (isset($_POST['submit']))
{
    $userID = $_POST['userID'];
    $logContent = $_POST['newLog'];
    $logDate = date('Y-m-d H:i:s');

    if (!empty($logContent))
    {

        $query = "INSERT INTO logs (logContent, logDate, userID) VALUES ('$logContent','$logDate','$userID')";
        mysqli_query($conn,$query);

        header("Location: ../HTML/adminWriteLog.php");
        exit();

    }


}


