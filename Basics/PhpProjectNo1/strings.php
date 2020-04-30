<?php
$name = "coin";
echo 'My name is $name\n  ';//cant with one quotes \n work
echo "\n";
echo "My name is $name";
echo "\n";

$number = 2;

echo $number."nd place\n";
echo "{$number}nd place\n";
echo 'Nu\'s';

echo "Ja ", " sam ", $number;//you can print more parameter but now ith print
echo strtoupper("\nnesto");
echo strtolower("\nnesto\n");
echo strlen("Something");
echo "\n";

$quote = "To be or not to be, question is now!";
echo strpos($quote, "to");echo "\n";
echo strpos($quote, "To");echo "\n";//case sensitive
echo strpos($quote, "be", 4);//when we want to fiknd another word of "BE" 
//                           //in sentence, we use number that comes after 
//                           //the position of fist position
$replacedQuote = str_replace("be", "know", $quote, $count);//count is function made parametre
                //word to replace - new word               //how many times is word replaced
echo  "\n", $replacedQuote, "\n", $count, "\n";

echo substr($quote, 4); //from where to start
echo "\n";
echo substr($quote, -4); //from back how many caracters to write
echo "\n";
echo substr($quote, 2, -3); //from where to start - where to stop
echo "\n";
echo substr($quote, 2, 5); //from where to start - where to stop
echo "\n";
echo substr($quote, -5, -2); //from where to start - where to stop

$varArray = str_split($quote);//split string to array letter bu letter
print_r($varArray); //array is printed with print_r function
echo "\n";
$varArray = str_split($quote, 8);//split string to array in group of second parameter
print_r($varArray); //array is printed with print_r function
echo "\n";

echo <<<EOT
        I did something
        and I can't tell you what.
        "Goodbye" she said.
                    Nudžejma
EOT;
//it print the file how we wrote it. It must not be antything after last EOT line!


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

