<?php


function emptyInputSignup($uname,$email,$passwd,$passwdRepeat){
    $result = false;

if (empty($uname) || empty($email) || empty($passwd) || empty($passwdRepeat)){

    $result = true;

}
else
{

    $result = false;

}

return $result;
}
function invalidUname($uname){
    $result = false;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)){

        $result = true;

    }
    else
    {

        $result = false;

    }

    return $result;
}

function invalidEmail($email){
    $result = false;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $result = true;

    }
    else
    {

        $result = false;

    }

    return $result;
}
function passwdMatch($passwd,$passwdRepeat){
    $result = false;

    if ($passwd !== $passwdRepeat){

        $result = true;

    }
    else
    {

        $result = false;

    }

    return $result;
}
function unameExists($conn, $uname){

    $sql = "SELECT * FROM users WHERE username = ?;";
    $statement = mysqli_prepare($conn,$sql);

    if ($statement = mysqli_prepare($conn,$sql)){


    }else{

        header("location: ../HTML/signup.html?badstatement");
        exit();

    }

    mysqli_stmt_bind_param($statement, "s",$uname);

    mysqli_stmt_execute($statement);

    $dataResult = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($dataResult)){

        return $row;

    }else{

        $result = false;
        return $result;
    }

    mysqli_stmt_close($statement);
}
function createUser($conn, $uname, $email , $passwd){

    $sql = "INSERT INTO users (username,email,passwd) VALUES (? , ? , ? );";
    $statement = mysqli_prepare($conn,$sql);

    if ($statement = mysqli_prepare($conn,$sql)){


    }else{

        header("location: ../HTML/signup.html?badstatement");
        exit();

    }

    $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($statement, "sss",$uname, $email,$hashedPwd);

    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    header("location: ../HTML/signup.html?noerror");
    exit();
}