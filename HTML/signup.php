<!DOCTYPE html>
<html lang="en">





<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <link rel="icon" type="image/ico" href="../IMGS/favicon.ico"/>

    <title>Introduction into Warhammer:40000</title>


    <link rel="stylesheet" href="../CSS/styl.css">


</head>





<body>


<header>
    <div class="dropdown">
        <a class="vyber" href="index.php">Menu</a>


        <ul>
            <li><a href="introduction.php">Introduction</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="galaxy.php">The galaxy</a></li>
            <li><a href="races.php">The races</a></li>
            <li><a href="war.php">There's only war</a></li>

            <?php include "../Scripts_php/changeLogout.php" ?>
        </ul>

    </div>



</header>



<div class="kontajner">

    <div class="page_content">

        <form method="post" action="../Scripts_php/signup_script.php">
            <label for="uname">Username:</label><br>
            <input type="text" id="uname" name="uname" ><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" ><br>
            <label for="passwd">Password:</label><br>
            <input type="password" id="passwd" name="passwd"><br>
            <label for="passwdRe">Repeat Password:</label><br>
            <input type="password" id="passwdRe" name="passwdRe"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php

        if (isset($_GET["error"])){
            if ($_GET["error"]=="emptyinput"){
                echo "<p>All fields must be filled in!</p>";
            }
            if ($_GET["error"]=="invaliduname"){
                echo "<p>This username cannot be chosen!</p>";
            }
            if ($_GET["error"]=="passwdnonmatch"){
                echo "<p>The passwords do not match!</p>";
            }
            if ($_GET["error"]=="unameexists"){
                echo "<p>Chosen username is already in use!</p>";
            }
            if ($_GET["error"]=="emailexists"){
                echo "<p>Chosen email is already in use!</p>";
            }
            if ($_GET["error"]=="badstatement"){
                echo "<p>Something went wrong,try again!</p>";
            }
            if ($_GET["error"]=="noerror"){
                echo "<p>You have signed up!</p>";
            }
        }

        ?>

    </div>

</div>


<footer>


    <div class="footer">

        <p>
            Author: Monke
            Contact: Monke.ape@gmail.com

        </p>


    </div>



</footer>


</body>




</html>