<?php
include_once '../Scripts_php/header.php';
include '../Scripts_php/DBConnector.php';
if ($_SESSION["username"] != "adminadmin"){

    header("Location: index.php");
    exit;

}
?>

<div class="kontajner">

    <div class="page_content">
        <div class="form-group">
            <input type="submit" name="show" id="show" class="btn btn-show" value="Show all logs" />
        </div>

        <div class="commentSection" id="commentSection">


            <?php

            $query = "SELECT * FROM logs ";

            $result = mysqli_query($conn, $query);


            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)):



                    ?>
                    <div>
                        <h3 class="commentUser" style="text-align: left; background-color: red">LogID:<?php echo $row['logID']; ?> </h3>
                        <h4 class="commentUser" style="text-align: left">User: <?php echo $row['userID']; ?> </h4>
                        <p class="commentMessage" style="text-align: left; margin: auto">  <?php echo $row['logContent']; ?> </p>
                        <p style="text-align: center">  <?php echo $row['logDate']; ?> </p>
                        <div class="form-group">
                            <input style="font-size: 16px" type="submit" name="deleteComment" class="btn btn-info deleteComment" data-id="<?php echo $row['logID'];?>" value="Delete <?php echo $row['logID']; ?>" />
                        </div>
                    </div>
                <?php



                endwhile;
            }

            ?>
            <button onclick="topFunction()" id="topButton" title="top">Top</button>

        </div>

    </div>

</div>


<?php
include_once '../Scripts_php/footer.php';
?>


<script>

    $(document).ready(function (){

        $("#show").click(function (){

            $("#commentSection").toggle();


        });

    })

    $(document).ready(function(){

        $('.deleteComment').click(function(){

            var deleteid = $(this).data('id');
            var deleteThis = $(this);

            var confirmalert = confirm("Are you sure?");
            if (confirmalert == true) {

                $.ajax({
                    url: '../Scripts_php/deleteLog.php',
                    type: 'POST',
                    data: { id:deleteid },
                    success: function(response){

                        if(response !== 0){

                            deleteThis.parent().parent().remove();

                        }else{
                            alert('Invalid ID.');
                        }

                    }
                });
            }

        });

    });


    button = document.getElementById("topButton");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            button.style.display = "block";
        } else {
            button.style.display = "none";
        }
    }

    function topFunction() {
        document.documentElement.scrollTop = 0;
    }

</script>

</body>


</html>

