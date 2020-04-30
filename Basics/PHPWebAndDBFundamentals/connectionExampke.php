<?php

//install xampp
//whe open control panel set apache configuration to http.df
//open and modify server nam and port to 81
//run mysql
//close
//open new project and new file
//set run in script 
//navigate to xampp/php/php.exe
//you are done!

//we start mysql admin on our localhost:81
//we add user and give it previlages
//we create database on new (on left sidebar)
//than click on our db on left sidebar
//add table
//set values
//save

$dbPassword = "insertYourPass";
$dbUser = "insertYourUser";
$dbName = "insertYourDBName";
$dbServer = "localhost";

$connection = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
//it takes 6 parameters. Fifth is port and sixth is socet.
//print_r($connection);

//connect_errno is error number. If exist, coonection will fail
if($connection->connect_errno){
    exit("Database connection failed. Reason: ".$connection->connect_error);
    //connect_error is reason why database failed
}
$query = "UPDATE Authors SET pen_name = 'Mak' WHERE id=3";
//$query = "INSERT INTO Authors(first_name, last_name) VALUES('Nikola', 'Djokic')";
//$query = "DELETE FROM Authors WHERE id=4";

($connection->query($query));

//to see last id of last record we have shortcut
//works only if we use INSERT INTO before
echo "Last id in Authors table is: ".$connection->insert_id.PHP_EOL;


//SELECT
$querySelect = "SELECT * FROM Authors";
//we have to tore select somewhere
$result = $connection->query($querySelect);

//if there is rows in authors to last
if($result->num_rows > 0){
    //$single row is our new variable
    //$result->fetch_assoc() is fetching data from first to last
    while ($singleRow = $result->fetch_assoc()){
        //printing every row in table
        //print_r($singleRow);
        //my way of display
        echo "Author: ".$singleRow["first_name"]." ".$singleRow["last_name"].PHP_EOL;
    }
}

//close our query
$result->close();

//SEARCH
$mySearch = "Mehmedalija";
//creating query
$querySearch = "SELECT first_name, last_name, pen_name FROM Authors WHERE first_name = ?";
//  ? means that we will send our parameter later

//we take our query and we will do something with it
$statementObj = $connection->prepare($querySearch);

//first parameter represent type so we can write: $statementObj->bind_param("sdi", $mySearch, $someDecimal, $someInt);

$statementObj->bind_param("s", $mySearch);
//we execute it, we take our query and insert our search
$statementObj->execute();

//number of parameters must match number from query statement.
$statementObj->bind_result($first_name, $last_name, $pen_name);
//store in db
$statementObj->store_result();

if($statementObj->num_rows > 0){
    //takeing result with fetch()
    while($statementObj->fetch()){
        echo $first_name." ".$last_name." aka ".$pen_name;
    }
}
$statementObj->close();

//close connection with database
$connection->close();