<?php
include_once '../Scripts_php/header.php';
include '../Scripts_php/DBConnector.php'
?>

<div class="kontajner">

    <div class="page_content">
        <div class="form-group">
            <input type="submit" name="show" id="show" class="btn btn-show" value="Show all comments" />
        </div>

        <div class="commentSection" id="commentSection">


            <?php

            $query = "SELECT * FROM postcomment JOIN users u on postcomment.userID = u.userID";

            $result = mysqli_query($conn, $query);

            ?>

            <div>
                <p style="text-align: left">Current number of comments <?php echo mysqli_num_rows($result); ?> </p>
            </div>

            <?php

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)):



                    ?>
                    <div>
                        <h3 class="commentUser" id="commentUser" style="text-align: left">CommentID:<?php echo $row['commentID']; ?> </h3>
                        <h4 class="commentUser" id="commentUser" style="text-align: left">User: <?php echo $row['username']; ?> </h4>
                        <p class="commentMessage" id="commentMessage" style="text-align: left; margin: auto">  <?php echo $row['commentContent']; ?> </p>
                        <p style="text-align: right">  <?php echo $row['date']; ?> </p>
                        <div class="form-group">
                            <input style="font-size: 16px" type="submit" name="deleteComment" id="deleteComment" class="btn btn-info" value="Delete" />
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