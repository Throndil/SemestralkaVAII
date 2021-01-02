<?php
include_once '../Scripts_php/header.php';
?>

<div class="kontajner">

    <div class="page_content">

        <form method="post" action="../Scripts_php/login_script.php">
            <label for="passwd">Password:</label><br>
            <input type="password" id="passwd" name="passwd"><br>
            <label for="passwdRe">Repeat Password:</label><br>
            <input type="password" id="passwdRe" name="passwdRe"><br>
            <input type="submit" name="submit" value="Change password">
        </form>
        <?php

        if (isset($_GET["error"])) {
            if ($_GET["error"] == "nologin") {
                echo "<p>You have put in the wrong login!</p>";
            }
            if ($_GET["error"] == "nologinPasswd") {
                echo "<p>You have put in the wrong password!</p>";
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