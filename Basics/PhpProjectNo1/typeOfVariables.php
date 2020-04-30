<?php

//echo "Hello world";

$int = 123;
$oct = 0123;
$hex = 0xABC; 
$bin = 0b1000;
$float = 1.234;
$scientific = 0.13E4;
$bool = true;
$varBool1 = "";//false
$varBool2 = 0;/*false*/
$varBool3 = "Hello";//true
$varBool4 = 123;#true


var_dump($bin);//print number and say the type int
var_dump($oct);
var_dump($hex);
var_dump($int);
var_dump($scientific);//float
var_dump($float);
var_dump($bool);
var_dump((bool)$varBool1);//if there is some content in variable
var_dump((bool)$varBool2);
var_dump((bool)$varBool3);
var_dump((bool)$varBool4);



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

