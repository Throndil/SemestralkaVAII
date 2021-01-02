<?php
include_once '../Scripts_php/header.php';
?>

<div class="kontajner_profile_page">



        <?php
        include "../Scripts_php/vypisZDB.php";
        ?>


        <div class="page_content_profile_middle ">

            <p> <p>Current set first name: <?php echo $firstName; ?></p>
            <p>Current set last name: <?php echo $lastName; ?></p>


            <p>
                Currently signed in as: <?php echo $username; ?>
            </p>
            <p>
                Current set email: <?php echo $email; ?>
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
            </p>







    </div>

</div>

<?php
include_once '../Scripts_php/footer.php';
?>

</html>
