<?php


function emptyInputSignup($uname,$email,$passwd,$passwdRepeat){


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


    if ($passwd !== $passwdRepeat){

        $result = true;

    }
    else
    {

        $result = false;

    }

    return $result;
}
function unameExists($conn, $uname,$email){

    $sql = "SELECT * FROM users WHERE username = ? OR email = ? ;";


    if ($statement = mysqli_prepare($conn,$sql)){
    echo "";

    }else{

        header("location: ../HTML/signup.php?badstatement");
        exit();

    }

    mysqli_stmt_bind_param($statement, "ss",$uname , $email);

    mysqli_stmt_execute($statement);

    $dataResult = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($dataResult)){

        if($row["username"] !== NULL){

            return $row;

        }elseif($row["passwd"] !== NULL){

            return $row;

        }else{

            $result = false;
            return $result;
        }


    }else{

        $result = false;
        return $result;
    }


    mysqli_stmt_close($statement);

}
function createUser($conn, $uname, $email , $passwd){

    $sql = "INSERT INTO users (username,email,passwd) VALUES (? , ? , ? );";


    if ($statement = mysqli_prepare($conn,$sql)){

        echo "";


    }else{

        header("location: ../HTML/signup.php?error=badstatement");
        exit();

    }

    $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($statement, "sss",$uname, $email,$hashedPwd);

    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    header("location: ../HTML/signup.php?error=noerror");
    exit();
}
function emptyInputLogin($uname,$passwd)
{


    if (empty($uname) || empty($passwd)) {

        $result = true;

    } else {

        $result = false;

    }
    return $result;
}
function loginUser($conn,$uname,$passwd){

$usernameExists = unameExists($conn, $uname , $uname);

if (print_r($usernameExists) < 1){
    header("location: ../HTML/login.php?error=nologin");
    exit();
}

$passwdHash = $usernameExists["passwd"];

$checkPasswd = password_verify($passwd, $passwdHash);

if ($checkPasswd === false){
    header("location: ../HTML/login.php?error=nologinPasswd");
    exit();
}else{

    session_start();
    $_SESSION["userID"] = $usernameExists["userID"];
    $_SESSION["username"] = $usernameExists["username"];
    header("location: ../HTML/index.php?loginSuccessfull");
    exit();
}

}