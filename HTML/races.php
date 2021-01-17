<?php
include_once '../Scripts_php/header.php';
include_once '../Scripts_php/DBConnector.php';

?>


<div class="kontajner">


    <div class="page_content" >

        <div class="load-Data" id="load-Data">
        <h1></h1>
        <div class="obal_rasy">
            <div class="obal_textu">

                <p>


                </p>


            </div>
            <div class="obal_textu obal_obrazku"><img class="races_obrazky" src=""
                                                      alt="imperium_of_man" title="imperium_of_man"></div>

        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                function loadData(page){
                    $.ajax({
                        url  : "../Scripts_php/paginationRequest.php",
                        type : "POST",
                        cache: false,
                        data : {page_no:page},
                        success:function(response){
                            $("#load-Data").html(response);
                        }
                    });
                }
                loadData();

                $(document).on("click", ".pagination li a", function(e){
                    e.preventDefault();
                    var pageId = $(this).attr("id");
                    loadData(pageId);
                });
            });
        </script>
        </div>

        <div class="container">
            <form method="POST" id="comment_form" action="../Scripts_php/addComment.php">
                <div class="form-group">
                    <input type="hidden" name="userID" id="userID" class="form-control" value="<?php if (isset($_SESSION["userID"])) echo $_SESSION['userID'] ?>" />
                </div>
                <div class="form-group">
                    <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                </div>

            </form>
            <div class="form-group">
                <input type="submit" name="show" id="show" class="btn btn-show" value="Show" />
            </div>
            <div class="commentSection" id="commentSection">

            <?php

            $query = "SELECT * FROM postcomment JOIN users u on postcomment.userID = u.userID";

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {

             while ($row = mysqli_fetch_assoc($result)):



            ?>
             <div>

                 <h4 class="commentUser" id="commentUser" style="text-align: left">User: <?php echo $row['username']; ?> </h4>
                 <p class="commentMessage" id="commentMessage" style="text-align: left; margin: auto">  <?php echo $row['commentContent']; ?> </p>
                 <p style="text-align: right">  <?php echo $row['date']; ?> </p>

             </div>
            <?php



            endwhile;
            }

            ?>


            </div>

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