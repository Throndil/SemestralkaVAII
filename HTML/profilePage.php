<?php
include_once '../Scripts_php/header.php';
?>

<div class="kontajner_profile_page">

    <div class="page_content page_content_profile_page">

        <?php
        include "../Scripts_php/vypisZDB.php";
        ?>

        <div class="page_content_profile_left">
            <img class="profile_page_img" src="../IMGS/question_mark.png" alt="question_mark" title="question_mark">

            <p>First name:  <?php echo $firstName; ?></p>
            <p>Last name:  <?php echo $lastName; ?></p>


            <p>
                Signed in as:  <?php echo $username; ?>
            </p>
            <p>
                Email:  <?php echo $email; ?>
            </p>



        </div>
        <div class="page_content_profile_middle">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut massa quis nulla tempor sollicitudin et
                nec nunc. In facilisis, augue eu tempor semper, mauris ligula cursus risus, quis accumsan metus libero
                at augue. Nulla gravida lobortis tellus a sollicitudin. Fusce in sapien nec leo aliquet vehicula.
                Maecenas aliquam ut urna quis laoreet. Donec bibendum eros in ante facilisis eleifend. Aliquam erat
                volutpat.
            </p>


        </div>


        <div class="page_content_profile_right">


            <a class="deleteUserButton" href="deleteUser.php" >
                <button>Delete your account</button>
            </a>
            <a class="changeUserDataButton" href="profileChangeData.php" style="text-decoration: none ">
                <button>Change your profile data</button>
            </a>

        </div>


    </div>


    <?php
    include_once '../Scripts_php/footer.php';
    ?>


</div>


</html>