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

        <form method="post" action="../Scripts_php/deleteUser.php">
            <p>
                Are you sure you want to delete your account?
            </p>
            <input type="submit" name="submitNo" value="No I changed my mind"><br>
            <input type="submit" name="submitYes" value="Delete account">
        </form>






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