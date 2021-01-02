<?php
include_once '../Scripts_php/header.php';
?>

<div class="kontajner_profile_page">

    <div class="page_content page_content_profile_page">

        <?php
        include "../Scripts_php/vypisZDB.php";
        ?>

        <div class="page_content_profile_left">
            <img class="profile_page_img" src="../IMGS/question_mark.png" alt="question_mark" title="question_mark">

            <p>First name:<?php echo $firstName; ?></p>
            <p>Last name:<?php echo $lastName; ?></p>


            <p>
                Signed in as:<?php echo $username; ?>
            </p>
            <p>
                Email:<?php echo $email; ?>
            </p>


            <form method="post" action="../Scripts_php/profileDataChange.php">

                <label for="newFirstname">New first name:</label><br>
                <input type="text" id="newFirstname" name="newFirstname"><br>

                <label for="newLastName">New last name:</label><br>
                <input type="text" id="newLastName" name="newLastName"><br>

                <label for="newUname">New username:</label><br>
                <input type="text" id="newUname" name="newUname"><br>

                <label for="newEmail">New email:</label><br>
                <input type="text" id="newEmail" name="newEmail"><br>


                <input type="submit" name="changeProfile" value="Change">

                <?php

                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "bothNamesRequired") {
                        echo "<p>Both names must be edited!</p>";
                    }
                    if ($_GET["error"] == "usernameExists") {
                        echo "<p>This username already exists!</p>";
                    }
                    if ($_GET["error"] == "noDataChanged") {
                        echo "<p>No data has been changed!</p>";
                    }
                    if ($_GET["error"] == "noError") {
                        echo "<p>Data changed successfully!</p>";
                    }
                    if ($_GET["error"] == "emailExists") {
                        echo "<p>Chosen email is already in use!</p>";
                    }
                    if ($_GET["error"] == "badEmail") {
                        echo "<p>Chosen email is in a wrong format!</p>";
                    }

                }

                ?>


            </form>

        </div>
        <div class="page_content_profile_middle">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut massa quis nulla tempor sollicitudin et
                nec nunc. In facilisis, augue eu tempor semper, mauris ligula cursus risus, quis accumsan metus libero
                at augue. Nulla gravida lobortis tellus a sollicitudin. Fusce in sapien nec leo aliquet vehicula.
                Maecenas aliquam ut urna quis laoreet. Donec bibendum eros in ante facilisis eleifend. Aliquam erat
                volutpat.
            </p>


        </div>


        <div class="page_content_profile_right">


            <a class="deleteUserButton" href="deleteUser.php" style="text-decoration: none ">
                <button>Delete your account</button>
            </a>


        </div>


    </div>


    <?php
    include_once '../Scripts_php/footer.php';
    ?>


</div>


</html>