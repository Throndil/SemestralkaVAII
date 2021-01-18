<?php
include "DBConnector.php";

$commentLimiter = $_POST['commentLimiter'];

$query = "SELECT * FROM postcomment JOIN users u on postcomment.userID = u.userID LIMIT $commentLimiter";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)):



        ?>
        <div>

            <h4 class="commentUser" style="text-align: left">User: <?php echo $row['username']; ?> </h4>
            <p class="commentMessage" style="text-align: left; margin: auto">  <?php echo $row['commentContent']; ?> </p>
            <p style="text-align: right">  <?php echo $row['date']; ?> </p>

        </div>
    <?php



    endwhile;
}else {

    echo "There are no more comments";
    
}

?>