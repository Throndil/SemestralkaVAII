<?php
include "DBConnector.php";

$id = 0;
if(isset($_POST['id'])){
    $id = mysqli_real_escape_string($conn,$_POST['id']);
}
if($id > 0){


   $checkRecord = mysqli_query($conn,"SELECT * FROM users WHERE userID='$id'");


    $totalrows = mysqli_num_rows($checkRecord);


    if($totalrows > 0){

        $queryComments = "DELETE FROM postcomment WHERE userID = ? ";

        $statement = mysqli_prepare($conn, $queryComments);
        mysqli_stmt_bind_param($statement, "s",$id);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);



        $query = "DELETE FROM users WHERE userID = ? ";

        $statement = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($statement, "s", $id);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);


        echo 1;
        exit;
    }else{
        echo 0;
        exit;
    }
}

echo 0;
exit;