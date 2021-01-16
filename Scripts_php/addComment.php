<?php

include "DBConnector.php";

if (isset($_POST['submit']))
{

    $userID = $_POST['userID'];
    $commentContent = $_POST['comment_content'];
    $date = date('Y-m-d H:i:s');

    if (!empty($commentContent))
    {

    $query = "INSERT INTO postcomment (commentContent, date, userID) VALUES ('$commentContent','$date','$userID')";
    mysqli_query($conn,$query);

    header("Location: ../HTML/races.php");
    exit();

    }


}


