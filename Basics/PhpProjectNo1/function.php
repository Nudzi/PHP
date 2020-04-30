<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getAuthor(){
    echo "John Due\n";
}
$variableFunction = "getAuthor";
//cal of a function by parametre assigned
$variableFunction();

$something = "Something";
function getSomething(){
    global $something; // making it global inside of function
    $something = "Not something";
}
//call of a function by its name
getSomething();
echo $something;
?>