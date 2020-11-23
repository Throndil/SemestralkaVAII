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




<div class="kontajner_profile_page">

    <div class="page_content page_content_profile_page" >

        <?php
        include "../Scripts_php/vypisZDB.php";
        ?>
            <div class="page_content_profile_left">
            <img class="profile_page_img" src="../IMGS/question_mark.png" alt="question_mark" title="question_mark">

            <p>First name:<?php  echo $firstName;  ?></p>
            <p>Last name:<?php  echo $lastName;  ?></p>



          <p>
                 Signed in as:<?php  echo $username;  ?>
          </p>
          <p>
                 Email:<?php  echo $email;  ?>
          </p>


                <form method="post" action="../Scripts_php/profileDataChange.php">

                    <label for="newFirstname">New first name:</label><br>
                    <input type="text" id="newFirstname" name="newFirstname"><br>

                    <label for="newLastName">New last name:</label><br>
                    <input type="text" id="newLastName" name="newLastName" ><br>

                <label for="newUname">New username:</label><br>
                <input type="text" id="newUname" name="newUname"><br>

                <label for="newEmail">New email:</label><br>
                <input type="text" id="newEmail" name="newEmail" ><br>


                <input type="submit" name="changeProfile" value="Change">

                    <?php

                    if (isset($_GET["error"])){
                        if ($_GET["error"]=="bothNamesRequired"){
                            echo "<p>Both names must be edited!</p>";
                        }
                        if ($_GET["error"]=="usernameExists"){
                            echo "<p>This username already exists!</p>";
                        }
                        if ($_GET["error"]=="noDataChanged"){
                            echo "<p>No data has been changed!</p>";
                        }
                        if ($_GET["error"]=="noError"){
                            echo "<p>Data changed successfully!</p>";
                        }
                        if ($_GET["error"]=="emailExists"){
                            echo "<p>Chosen email is already in use!</p>";
                        }
                        if ($_GET["error"]=="badEmail"){
                            echo "<p>Chosen email is in a wrong format!</p>";
                        }

                    }

                    ?>






                </form>

            </div>
            <div class="page_content_profile_middle">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut massa quis nulla tempor sollicitudin et nec nunc. In facilisis, augue eu tempor semper, mauris ligula cursus risus, quis accumsan metus libero at augue. Nulla gravida lobortis tellus a sollicitudin. Fusce in sapien nec leo aliquet vehicula. Maecenas aliquam ut urna quis laoreet. Donec bibendum eros in ante facilisis eleifend. Aliquam erat volutpat.
                </p>





            </div>


            <div class="page_content_profile_right">


             <a class="deleteUserButton" href="deleteUser.php" style="text-decoration: none "> <button>Delete your account</button></a>


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