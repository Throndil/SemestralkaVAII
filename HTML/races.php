<?php
include_once '../Scripts_php/header.php';
include_once '../Scripts_php/DBConnector.php';

?>


<div class="kontajner">


    <div class="page_content" >

        <div class="load-Data" id="load-Data">


        <script>
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



            </div>
            <button onclick="topFunction()" id="topButton" title="top">Top</button>
        </div>

    </div>



</div>


<?php
include_once '../Scripts_php/footer.php';
?>

<script>

  //  $(document).ready(function (){

       // $("#show").click(function (){

          //  $("#commentSection").toggle();


     //   });

  //  })

  $(document).ready(function ()
  {
     var commentCount = 0;
      $("#show").click(function (){
        commentCount = commentCount + 2;
          $("#commentSection").load("../Scripts_php/commentLoader.php", {
              commentLimiter: commentCount

          });
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

