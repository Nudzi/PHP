<?php
require 'assets/dbInfo.php';

//query for all authors to display in drop down from online db
$querySelect = "SELECT * FROM Authors";
$result = $connection->query($querySelect);

include 'assets/include.php';

//if there is something to send 
if(count($_POST) > 0){
    //check if there is email 
    if($_POST['email'] != ''){
        //if email is not empty send session data thath contains GET or POST, depends on method
        $_SESSION['sessionData'] = $_POST;
        //header constains link to new page
        //loction is way to send next location
        //after : is a name of page or online link
        header("Location: result.php");
    }
    else{
        //if there is no email display error that is equal to class name
        $error = "validation";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Authors</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css"/>
    </head>
    <body>
        <div class="myDiv">   
            <form method="post"  action="index.php"><!--result.php without validation-->
        <h1>Choose favourite author</h1>
        <label>Author: </label>
        <select name="author">
            <!--taking the data from db-->
            <?php while($row = $result->fetch_assoc()): ?>
            <!--display data in propriate fields-->
            <option value="<?=$row['id']?>"><?=$row['first_name']?> <?=$row['last_name']?></option>
            <!--end while-->
            <?php endwhile; ?>
        </select>
        <br>
        <label>Century: </label>
        17th <input  type="checkbox" name="century[]" value="17th">
        18th <input  type="checkbox" name="century[]" value="18th">
        19th <input  type="checkbox" name="century[]" value="19th">
        <br>
        <!--adding class with php, from up validation-->
        <div class="<?=$error?>" >     
        Email: <input  type="text" name="email" value="">
        </div>
        <br>
        <label>Comment: </label>
        <textarea name="comment"></textarea>

        <br>
        <label >Recive newletters: 
        Yes <input type="radio" name="news" value="yes">
        No <input type="radio" name="news"  value="no">
        </label>
        <br>
        <input type="submit" value="Save" >
        </form>
        </div>
        <?php
        // put your code here
        
        ?>
    </body>
</html>
