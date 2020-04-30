<?php
//concating strings
$concat = "Wiliiam";
$concat .= " Shake speare"."\n";
echo $concat;
// == equal, === identical by value and type, and !== and !===
var_dump(7 == "7"); //it is true because it is same value
var_dump(7 === "7"); //it is false because it is not same type even it is same value
 //also there is <, >, <=, >=.

//spaceship <=>
//if left side is greater than right result is 1
//if left side is smaller than right result is -1
//if left side is equal to right result is 0
echo 2 <=> 1;//1
echo 1 <=> 1;//0
echo 1 <=> 2;//-1

//logical operators &&, ||, !

//statements
//if, else if, switch

switch (5 <=> 7){
    case -1:echo "Less than.";break;
    case 0:echo "Equal.";break;
    case 1:echo "Greater than.";break;
}
//ternary operator
//expression  ?  true    :    false
echo (5 > 6/3) ? "\nYes." : "\nNo.";

//null coalesce
//if variable is set return variable else print default
$firstValue = 1;
$secondValue = 2;
//if $firstValue is set return variable
echo $firstValue ?? "Default";
//if $firstValue is set return variable if not return $secondValue if not return default
echo $firstValue ?? $secondValue ?? "Default";
echo $thirdValue ?? "Default";// return Default

//alterative syntax, instead of {} we use: ednif, endwhile, endfor
if(4> 3/2):
    echo "Yes";
else:
    echo "No";
endif;

$expression = 1;
while($expression < 3):
      echo "It is while.\n";
      $expression++;
endwhile;

for ($i = 0; $i < 3; $i++):
    echo "It is for.\n";
endfor;




