<?php
include_once '../Scripts_php/header.php';
?>


<div class="kontajner">

    <div class="page_content">

        <form method="post" action="../Scripts_php/login_script.php">
            <label for="uname">Username:</label><br>
            <input class="loginField" type="text" id="uname" name="uname"><br>
            <label for="passwd">Password:</label><br>
            <input class="loginField" type="password" id="passwd" name="passwd"><br>
            <input class="loginButton" type="submit" name="submit" value="Log in">
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