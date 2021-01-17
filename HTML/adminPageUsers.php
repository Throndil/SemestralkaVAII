<?php
include_once '../Scripts_php/header.php';
include '../Scripts_php/DBConnector.php'
?>

<div class="kontajner">

    <div class="page_content">
        <script>
            $(document).ready(function (){

                $("#show").click(function (){

                    $("#commentSection").toggle();


                });

            })
        </script>
        <div class="form-group">
            <input type="submit" name="show" id="show" class="btn btn-show" value="Show users" />
        </div>

        <div class="commentSection" id="commentSection" >


            <?php

            $query = "SELECT * FROM users";

            $result = mysqli_query($conn, $query);


            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)):



                    ?>

                    <div >
                        <h3 class="commentUser" style="text-align: left">UserID:<?php echo $row['userID']; ?> </h3>
                        <h4 class="commentUser" style="text-align: left">User: <?php echo $row['username']; ?> </h4>
                        <p class="commentMessage" style="text-align: left; margin: auto">  <?php echo $row['email']; ?> </p>
                        <p style="text-align: left">  <?php echo $row['fullName']; ?> </p>
                        <div class="form-group">
                            <input style="font-size: 16px" type="submit" name="deleteUser" class="btn btn-info deleteUser" data-id="<?php echo $row['userID'];?>" value="Delete <?php echo $row['username']; ?>" />
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


<script>

    $(document).ready(function(){


        $('.deleteUser').click(function(){


            var deleteid = $(this).data('id');
            var deleteThis = $(this);

            var confirmalert = confirm("Are you sure?");
            if (confirmalert == true) {

                $.ajax({
                    url: '../Scripts_php/deleteUsers.php',
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

</script>

</body>


</html>


