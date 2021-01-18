<?php


/**
 * @param $uname
 * @param $email
 * @param $passwd
 * @param $passwdRepeat
 * @return bool
 */
function emptyInputSignup($uname, $email, $passwd, $passwdRepeat)
{


    if (empty($uname) || empty($email) || empty($passwd) || empty($passwdRepeat)) {

        $result = true;

    } else {

        $result = false;

    }

    return $result;
}

/**
 * @param $uname
 * @return bool
 */
function invalidUname($uname)
{


    if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {

        $result = true;

    } else {

        $result = false;

    }

    return $result;
}

/**
 * @param $email
 * @return bool
 */
function invalidEmail($email)
{


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $result = true;

    } else {

        $result = false;

    }

    return $result;
}

/**
 * @param $passwd
 * @param $passwdRepeat
 * @return bool
 */
function passwdMatch($passwd, $passwdRepeat)
{


    if ($passwd !== $passwdRepeat) {

        $result = true;

    } else {

        $result = false;

    }

    return $result;
}

/**
 * @param $conn
 * @param $uname
 * @param $email
 * @return false|string[]|null
 */
function unameExists($conn, $uname, $email)
{

    $sql = "SELECT * FROM users WHERE username = ? OR email = ? ;";

    if ($statement = mysqli_prepare($conn, $sql)) {
        echo "";

    } else {

        header("location: ../HTML/signup.php?badstatement");
        exit();

    }

    mysqli_stmt_bind_param($statement, "ss", $uname, $email);

    mysqli_stmt_execute($statement);

    $dataResult = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($dataResult)) {

        if ($row["username"] !== NULL) {

            return $row;

        } elseif ($row["passwd"] !== NULL) {

            return $row;

        } else {

            $return = false;
        }


    } else {

        $return = false;
    }
    mysqli_stmt_close($statement);
    return $return;

}

/**
 * @param $conn
 * @param $uname
 * @param $email
 * @param $passwd
 */
function createUser($conn, $uname, $email, $passwd)
{

    $sql = "INSERT INTO users (username,email,passwd) VALUES (? , ? , ? );";


    if ($statement = mysqli_prepare($conn, $sql)) {

        echo "";


    } else {

        header("location: ../HTML/signup.php?error=badstatement");
        exit();

    }

    $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($statement, "sss", $uname, $email, $hashedPwd);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    header("location: ../HTML/signup.php?error=noerror");
    exit();
}

/**
 * @param $uname
 * @param $passwd
 * @return bool
 */
function emptyInputLogin($uname, $passwd)
{


    if (empty($uname) || empty($passwd)) {

        $result = true;

    } else {

        $result = false;

    }
    return $result;
}

/**
 * @param $conn
 * @param $uname
 * @param $passwd
 */
function loginUser($conn, $uname, $passwd)
{

    $usernameExists = unameExists($conn, $uname, $uname);

    if (print_r($usernameExists) < 1) {
        header("location: ../HTML/login.php?error=nologin");
        exit();
    }

    $passwdHash = $usernameExists["passwd"];

    $checkPasswd = password_verify($passwd, $passwdHash);

    if ($checkPasswd === false) {
        header("location: ../HTML/login.php?error=nologinPasswd");
        exit();
    } else {

        session_start();
        $_SESSION["userID"] = $usernameExists["userID"];
        $_SESSION["username"] = $usernameExists["username"];
        header("location: ../HTML/index.php?loginSuccessfull");
        exit();
    }
}

/**
 * @param $conn
 * @param $fullName
 * @param $uname
 * @return bool
 */
function fullNameExists($conn, $fullName, $uname)
{

    $sql = "SELECT * FROM users WHERE fullName = ? AND username = ? ;";

    if (($statement = mysqli_prepare($conn, $sql)) === false) {

        header("location: ../HTML/signup.php?badstatement");
        exit();

    }

    mysqli_stmt_bind_param($statement, "ss", $fullName, $uname);

    mysqli_stmt_execute($statement);

    $dataResult = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($dataResult)) {
        $return = true;


    } else {
        $return = false;

    }
    mysqli_stmt_close($statement);
    return $return;

}

/**
 * @param $conn
 * @param $userID
 * @param $newFirstname
 * @param $newLastName
 * @param $newUname
 * @param $newEmail
 * @param $newProfileText
 */
function changeUserData($conn, $userID, $newFirstname, $newLastName, $newUname, $newEmail, $newProfileText)
{

    if (!empty($newFirstname) && !empty($newLastName)) {
        if (empty($newFirstname) || empty($newLastName)) {

            header("location: ../HTML/profilePage.php?error=bothNamesRequired");
            exit();


        } else {
            $fullName = $newFirstname . " " . $newLastName;
            $sql = "UPDATE users SET fullName = ? WHERE userID = ? ;";

            if (($statement = mysqli_prepare($conn, $sql)) === false) {

                header("location: ../HTML/profilePage.php?badstatement");
                exit();

            }
            mysqli_stmt_bind_param($statement, "ss", $fullName, $userID);
            mysqli_stmt_execute($statement);
            mysqli_stmt_close($statement);

        }

    }
    if (!empty($newUname)) {

        if (unameExists($conn, $newUname, $newUname) === false) {
            $sql = "UPDATE users SET username = ? WHERE userID = ? ;";

            if (($statement = mysqli_prepare($conn, $sql)) === false) {

                header("location: ../HTML/profilePage.php?badstatement");
                exit();

            }
            mysqli_stmt_bind_param($statement, "ss", $newUname, $userID);
            mysqli_stmt_execute($statement);
            mysqli_stmt_close($statement);

            $_SESSION["username"] = $newUname;

        } else {

            header("location: ../HTML/profilePage.php?error=usernameExists");
            exit();


        }


    }
    if (!empty($newEmail)) {
        if (!invalidEmail($newEmail)) {
            if (unameExists($conn, $newEmail, $newEmail) === false) {
                $sql = "UPDATE users SET email = ? WHERE userID = ? ;";

                if (($statement = mysqli_prepare($conn, $sql)) === false) {

                    header("location: ../HTML/profilePage.php?badstatement");
                    exit();

                }
                mysqli_stmt_bind_param($statement, "ss", $newEmail, $userID);
                mysqli_stmt_execute($statement);
                mysqli_stmt_close($statement);


            } else {

                header("location: ../HTML/profilePage.php?error=emailExists");
                exit();

            }

        } else {

            header("location: ../HTML/profilePage.php?error=badEmail");
            exit();


        }
    }

    if(!empty($newProfileText)){

        $sql = "UPDATE users SET profileText = ? WHERE userID = ? ;";

        if (($statement = mysqli_prepare($conn, $sql)) === false) {

            header("location: ../HTML/profilePage.php?badstatement");
            exit();

        }
        mysqli_stmt_bind_param($statement, "ss", $newProfileText, $userID);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);


    }



    if (empty($newFirstname) && empty($newLastName) && empty($newUname) && empty($newEmail)) {

        header("location: ../HTML/profilePage.php?error=noDataChanged");
        exit();

    }

    header("location: ../HTML/profilePage.php?error=noError");
    exit();

}

/**
 * @param $conn
 * @param $userID
 */
function deleteAccount($conn, $userID)
{


    $queryComments = "DELETE FROM postcomment WHERE userID = ? ";

    if (($statement = mysqli_prepare($conn, $queryComments)) === false) {

        header("location: ../HTML/profilePage.php?badstatement");
        exit();

    }

    mysqli_stmt_bind_param($statement, "s",$userID);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    $sql = "DELETE FROM users WHERE userID = ? ;";


    if (($statement = mysqli_prepare($conn, $sql)) === false) {

        header("location: ../HTML/profilePage.php?badstatement");
        exit();

    }

    mysqli_stmt_bind_param($statement, "s", $userID);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    session_start();
    session_unset();
    session_destroy();

    header("location: ../HTML/index.php?accountDeleted");
    exit();


}