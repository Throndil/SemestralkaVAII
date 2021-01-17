<?php
include_once '../Scripts_php/header.php';
include '../Scripts_php/DBConnector.php'
?>

<div class="kontajner">

    <div class="page_content">
        <div class="form-group">
            <input type="submit" name="show" id="show" class="btn btn-show" value="Show users" />
        </div>

        <div class="commentSection" id="commentSection" >


            <?php

            $query = "SELECT * FROM users";

            $result = mysqli_query($conn, $query);
            ?>

            <div>
                <p style="text-align: left">Current number of users <?php echo mysqli_num_rows($result); ?> </p>
            </div>

            <?php

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)):



                    ?>
                    <div >
                        <h3 class="commentUser" id="commentUser" style="text-align: left">UserID:<?php echo $row['userID']; ?> </h3>
                        <h4 class="commentUser" id="commentUser" style="text-align: left">User: <?php echo $row['username']; ?> </h4>
                        <p class="commentMessage" id="commentMessage" style="text-align: left; margin: auto">  <?php echo $row['email']; ?> </p>
                        <p style="text-align: left">  <?php echo $row['fullName']; ?> </p>
                        <div class="form-group">
                            <input style="font-size: 16px" type="submit" name="deleteUser" id="deleteUser" class="btn btn-info" data-ID="<?=$row['userID'];?>" value="Delete <?php echo $row['username']; ?>" />
                        </div>
                    </div>
                <?php

                endwhile;
            }

            ?>


        </div>

    </div>

</div>


<?php
include_once '../Scripts_php/footer.php';
?>


</body>


</html>


<script>

    $(document).ready(function (){

        $("#show").click(function (){

            $("#commentSection").toggle();


        });

    })




</script>