<?php
include_once '../Scripts_php/header.php';
?>


<div class="kontajner">

    <div class="page_content">

        <form method="post" action="../Scripts_php/signup_script.php">
            <label for="uname">Username:</label><br>
            <input class="signupField" type="text" id="uname" name="uname"><br>
            <label for="email">Email:</label><br>
            <input class="signupField" type="text" id="email" name="email"><br>
            <label for="passwd">Password:</label><br>
            <input class="signupField" type="password" id="passwd" name="passwd"><br>
            <label for="passwdRe">Repeat Password:</label><br>
            <input class="signupField" type="password" id="passwdRe" name="passwdRe"><br>
            <input class="signupButton" type="submit" name="submit" value="Submit">
        </form>
        <?php

        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>All fields must be filled in!</p>";
            }
            if ($_GET["error"] == "invaliduname") {
                echo "<p>This username cannot be chosen!</p>";
            }
            if ($_GET["error"] == "passwdnonmatch") {
                echo "<p>The passwords do not match!</p>";
            }
            if ($_GET["error"] == "unameexists") {
                echo "<p>Chosen username is already in use!</p>";
            }
            if ($_GET["error"] == "emailexists") {
                echo "<p>Chosen email is already in use!</p>";
            }
            if ($_GET["error"] == "badstatement") {
                echo "<p>Something went wrong,try again!</p>";
            }
            if ($_GET["error"] == "noerror") {
                echo "<p>You have signed up!</p>";
            }
        }

        ?>

    </div>

</div>


<?php
include_once '../Scripts_php/footer.php';
?>


</body>


</html>