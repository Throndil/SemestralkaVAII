<!DOCTYPE html>
<html lang="en">



<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <link rel="icon" type="image/ico" href="../IMGS/favicon.ico"/>

    <title>Introduction into Warhammer:40000</title>


    <link rel="stylesheet" href="../CSS/styl.css">


</head>





<body>


<header>
    <div class="dropdown">
        <a class="vyber" href="index.php">Menu</a>


        <ul>
            <li><a href="introduction.php">Introduction</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="galaxy.php">The galaxy</a></li>
            <li><a href="races.php">The races</a></li>
            <li><a href="war.php">There's only war</a></li>
            <?php include "../Scripts_php/changeLogout.php" ?>
        </ul>

    </div>



</header>




<div class="kontajner_profile_page">

    <div class="page_content page_content_profile_page" >

            <div class="page_content_profile_left">
            <img class="profile_page_img" src="../IMGS/question_mark.png" alt="question_mark" title="question_mark">

            <p>First name:</p>
            <p>Last name:</p>



          <p>
                 Signed in as:
          </p>
          <p>
                 Email:
          </p>
                <form method="post" action="">
                <label for="newuname">New username:</label><br>
                <input type="text" id="newuname" name="newuname">
                <input type="submit" name="submitNewuname" value="Change"><br>
                <label for="newEmail">New email:</label><br>
                <input type="text" id="newEmail" name="newEmail" >
                <input type="submit" name="submitEmail" value="Change"><br>
                <label for="changeBio">Click here to change bio:</label>
                <input type="submit" name="changeBio" value="Change">
                </form>
            </div>
            <div class="page_content_profile_middle">


            <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla lectus ac arcu varius, at hendrerit ligula consequat. Sed id risus ornare, iaculis nisi eget, luctus lectus. Curabitur vulputate nibh a nibh viverra tempus. Aliquam ac pulvinar nunc. Cras convallis gravida orci, sit amet mattis leo dictum eget. Proin odio erat, hendrerit sit amet massa non, convallis suscipit tortor. Donec placerat nec dolor nec accumsan. Nulla eu eros mollis justo fringilla tristique in vitae sem. Fusce blandit consequat ultrices. Ut suscipit, eros iaculis pharetra mattis, velit mauris consequat leo, vel bibendum nulla libero id ante. Cras lacinia blandit eros quis venenatis.
                Quisque eget tortor tortor. Nunc accumsan, neque porta egestas cursus, ante ante imperdiet eros, hendrerit placerat magna lorem ut turpis. Proin et blandit urna. Duis rutrum ac elit eget lobortis. Vivamus congue in justo in porttitor. Duis ornare a metus sed iaculis. Vestibulum sed felis hendrerit nisi pretium egestas ac sed urna. Curabitur in ultrices velit, ut auctor quam. Nunc malesuada ante dui, eu imperdiet leo egestas in.
                Morbi id faucibus augue. Morbi viverra sem orci, ac elementum est sagittis et. Cras eget euismod tellus. Sed id porta massa, eget euismod dolor. Etiam dictum est vitae porta dictum. Mauris vestibulum tortor augue, at aliquam leo mattis ut. Maecenas id venenatis eros. Quisque in consectetur ex, nec feugiat turpis. Nulla ultricies consectetur pharetra.
                Morbi consectetur, arcu vitae tempus rhoncus, diam urna porttitor ante, vitae pellentesque arcu mauris euismod velit. Aenean condimentum, augue id venenatis accumsan, turpis nunc aliquet ex, commodo suscipit odio neque ut magna. Suspendisse pretium commodo velit. Donec vestibulum nisi non lacus mattis elementum. Proin non diam id nisl porta sagittis. Ut ut hendrerit tellus, eu sodales velit. Proin rutrum ac turpis mollis luctus. Aliquam rhoncus eleifend quam, ac dignissim nunc accumsan et. Morbi blandit erat eu dignissim molestie. Duis cursus varius nibh, sed interdum dolor convallis eu. Fusce at scelerisque urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex ullamcorper, luctus lorem et, feugiat neque.
                Nam ut ultricies ipsum. Cras rhoncus mauris eu nibh auctor egestas. Phasellus cursus enim magna, et consectetur quam interdum eu. Nullam eu urna a ante luctus dictum lacinia et nisl. Phasellus at dui congue nibh accumsan porta at interdum urna. Quisque lobortis arcu nulla, eu aliquet diam blandit at. Integer ac vestibulum arcu. Donec finibus sagittis erat. Quisque vitae enim tincidunt, tempus purus id, finibus est. Etiam hendrerit fermentum purus et auctor. Praesent est risus, faucibus a dolor id, laoreet convallis eros. Vestibulum sed consequat nibh. Donec hendrerit metus sit amet tellus bibendum, finibus tristique risus venenatis. Etiam et luctus diam.
            </P>






            </div>






            <div class="page_content_profile_right">


             <a href="deleteUser.php" style="text-decoration: none ">Click here to delete your account</a>
             <a href="changePasswd.php" style="text-decoration: none ">Click here to change your password</a>

            </div>



</div>




<footer>


    <div class="footer">

        <p>
            Author: Monke
            Contact: Monke.ape@gmail.com

        </p>


    </div>



</footer>


</body>




</html>