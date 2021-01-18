<?php
include_once '../Scripts_php/header.php';
if ($_SESSION["username"] != "adminadmin"){

    header("Location: index.php");
    exit;

}
?>

<div class="kontajner_profile_page">


    <div class="page_content_profile_middle ">



        <form method="post" action="../Scripts_php/addLog.php">

            <div class="form-group">
                <input type="hidden" name="userID" id="userID" class="form-control" value="<?php echo $_SESSION['userID'] ?>" />
            </div>
            <label>New log:</label><br>
            <p><textarea class="textarea resize-ta" onkeyup="autoGrow(this);" maxlength="2000" id="newLog" name="newLog" style="border:solid 3px green;"></textarea></p>

            <input class="changeProfileDataButton" type="submit" name="submit" id="submit" value="Send">


        </form>



    </div>

</div>

<?php
include_once '../Scripts_php/footer.php';
?>


<script>

    function autoGrow (oField) {
        if (oField.scrollHeight > oField.clientHeight) {
            oField.style.height = oField.scrollHeight + "px";
        }
    }

    let element = document.querySelector(".input-wrap .input");
    let widthChanger = document.querySelector(".input-wrap .width-Changer");
    element.addEventListener("keyup", () => {
        widthChanger.innerHTML = element.value;
    });


    function calcHeight(value) {
        let numberOfLineBreaks = (value.match(/\n/g) || []).length;
        let newHeight = 20 + numberOfLineBreaks * 20 + 12 + 2;
        return newHeight;
    }

    let textarea = document.querySelector(".resize-ta");
    textarea.addEventListener("keyup", () => {
        textarea.style.height = calcHeight(textarea.value) + "px";
    });
</script>

</html>

