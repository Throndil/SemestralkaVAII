<?php

include "DBConnector.php";

if (isset($_POST['submit']))
{

    $userID = $_POST['userID'];
    $commentContent = $_POST['comment_content'];
    $date = date('Y-m-d H:i:s');

    if (!empty($commentContent))
    {

    $query = "INSERT INTO postcomment (commentContent, date, userID) VALUES ( ? , ? , ?)";
    //mysqli_query($conn,$query);

    $statement = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($statement, "sss",$commentContent,$date , $userID);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    header("Location: ../HTML/races.php");
    exit();

    }


}


