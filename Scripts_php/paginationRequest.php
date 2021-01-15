<?php

include 'DBConnector.php';

$limit = 1;

if (isset($_POST['page_no'])) {
    $page_no = $_POST['page_no'];
}else{
    $page_no = 1;
}

$offset = ($page_no-1) * $limit;

$query = "SELECT * FROM posts LIMIT $offset, $limit";

$result = mysqli_query($conn, $query);

$output = "";

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $output.="<h1>" .$row['postTitle']. "</h1>
        <div class='obal_rasy'>
            <div class='obal_textu'>

                <p>
                  " .$row['postContent']. "

                </p>


            </div>
            <div class='obal_textu obal_obrazku'><img class='races_obrazky' src=' " .$row['postImagePath'] . " '
                                                      alt='imperium_of_man' title='imperium_of_man'></div>

        </div>";

    }


    $sql = "SELECT * FROM posts";

    $records = mysqli_query($conn, $sql);

    $totalRecords = mysqli_num_rows($records);

    $totalPage = ceil($totalRecords/$limit);

    $output.="<ul class='pagination justify-content-center' style='margin:20px 0'>";

    for ($i=1; $i <= $totalPage ; $i++) {
        if ($i == $page_no) {
            $active = "active";
        }else{
            $active = "";
        }

        $output.="<li class='page-item $active'><a class='page-link' id='$i' href=''>$i</a></li>";
    }

    $output .= "</ul>";

    echo $output;

}

?>





