<?php
include_once '../Scripts_php/header.php';
include_once '../Scripts_php/DBConnector.php';

$sql = "SELECT * FROM posts ;";

$result = $conn->query($sql);

?>


<div class="kontajner">

    <div class="page_content">

        <?php
        while($parser = $result->fetch_assoc()):
        ?>

        <h1><?php echo $parser['postTitle'];  ?></h1>
        <div class="obal_rasy">
            <div class="obal_textu">

                <p>
                    <?php echo $parser['postContent']; ?>

                </p>


            </div>
            <div class="obal_textu obal_obrazku"><img class="races_obrazky" src="<?php echo $parser['postImagePath']; ?>"
                                                      alt="imperium_of_man" title="imperium_of_man"></div>

        </div>

        <?php
        endwhile;
        ?>

    </div>

</div>


<?php
include_once '../Scripts_php/footer.php';
?>


</body>


</html>