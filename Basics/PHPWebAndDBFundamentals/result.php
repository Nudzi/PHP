<!DOCTYPE html>
<?php
include 'assets/include.php';

echo "<pre>";//tag for new line
print_r($_POST); //data stored in post from FORM METHOD
echo "</pre>";

if(isset($_SESSION['sessionData'])){//if session exist
$postData = $_SESSION['sessionData'];//sessionData is parameter from page that send data

unset($_SESSION['sessionData']);//removing session data //better
//session_destroy();//totally destroying session 
}
else{
    header("Location: index.php");//to redirect to data page if there is nothing to send
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Final</title>
                <link rel="stylesheet" type="text/css" href="assets/style.css"/>

    </head>
    <body>
        <div class="myDiv">
        <h1>Your choise</h1>
        <!--sending data by array name-->
        Author: <input type="text" value="<?= $postData['author']?>"><br>
        Century: <?= $postData['century']?><br>
        Email: <input type="text" value="<?= $postData['email']?>"><br>
        Comment: <input type="text" value="<?= $postData['comment']?>"><br>
        Newsletter: <input type="text" value="<?=$postData['news']?>"><br>

        <?php
        // put your code here
        ?>
        </div>
    </body>
</html>
