<?php
include_once '../Scripts_php/header.php';
?>


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


<?php
include_once '../Scripts_php/footer.php';
?>


</body>


</html>