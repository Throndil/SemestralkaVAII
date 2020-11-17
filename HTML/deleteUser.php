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

        <form method="post" action="../Scripts_php/login_script.php">
            <label for="uname">Username:</label><br>
            <input type="text" id="uname" name="uname" ><br>
            <label for="passwd">Password:</label><br>
            <input type="password" id="passwd" name="passwd"><br>
            <label for="passwdRe">Repeat Password:</label><br>
            <input type="password" id="passwdRe" name="passwdRe"><br>
            <input type="submit" name="submit" value="Delete account">
        </form>
        <?php

        if (isset($_GET["error"])){
            if ($_GET["error"]=="nologin"){
                echo "<p>You have put in the wrong login!</p>";
            }
            if ($_GET["error"]=="nologinPasswd"){
                echo "<p>You have put in the wrong password!</p>";
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