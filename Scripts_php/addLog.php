<?php

include "DBConnector.php";

if (isset($_POST['submit']))
{
    $userID = $_POST['userID'];
    $logContent = $_POST['newLog'];
    $logDate = date('Y-m-d H:i:s');

    if (!empty($logContent))
    {

        $query = "INSERT INTO logs (logContent, logDate, userID) VALUES ( ? , ? , ?)";
       // mysqli_query($conn,$query);

        $statement = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($statement, "sss",$logContent,$logDate , $userID);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);


        header("Location: ../HTML/adminWriteLog.php");
        exit();

    }


}


