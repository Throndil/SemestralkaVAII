<?php
include_once '../Scripts_php/header.php';
include_once '../Scripts_php/DBConnector.php';

?>


<div class="kontajner">

    <div class="page_content" id="load-Data">



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

                // Pagination code
                $(document).on("click", ".pagination li a", function(e){
                    e.preventDefault();
                    var pageId = $(this).attr("id");
                    loadData(pageId);
                });
            });
        </script>

    </div>

</div>


<?php
include_once '../Scripts_php/footer.php';
?>


</body>


</html>