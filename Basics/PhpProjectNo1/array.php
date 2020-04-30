<?php
//createing array
$random = array(1, "Ivo Andrić", true, 1.4);
$anotherRandom = ["Something new", "but same"];
print_r($random);

//associative array
$associative = [
    "First" => "I",
    "Second" => 2,
    "Empty, index 0, because there is no number before", //if not befor number index is 0
    11 => "Adding number to array index",
    "Index value +1 from past one" //it counts from the number befor
];
print_r($associative);

//printing one value of array, we use name or index
echo $associative["First"];
//checking if it exist
echo array_key_exists(11, $associative); //one if true, nothing if false

//finding a value in array
echo in_array(2, $associative);
echo in_array("2", $associative, true);//third parameter to question if there is the value we
                                       //are looking for with exact type we typed

//adding elements

array_push($associative, "New value with push");//only index arrays
$associative["adding new element"] = "New value with name and brackets";//better 
                        //if there is no this array, it will first create it and add element
                        //also you can change elements index

print_r($associative);

$associative[] = "Element to remove";//better 
//removing items
$removedValue = array_pop($associative);
echo $removedValue;
print_r($associative);//to check

//removing by index
unset($associative["First"], $random[0]);
print_r($associative);//to check
print_r($random);//to check
//removing whole array
unset($anotherRandom);

//sorting
ksort($associative);//sort indexes
print_r($associative);//to check

asort($associative);//sort values, but indexes remains the same
print_r($associative);//to check

//sort values, but indexes are all numbers, wihch is good to index array
//sort($associative);
//print_r($associative);//to check

//count number of values in array
echo count($associative)."\n";

$twoDimensionalArray = ["Even" => array(
    "Two", "Twelve" => array(10, "plus", 2), "Twentytwo"), 
    "Odd" => array("One", "Eleven" => array(1, "plus", 10))];

echo count($twoDimensionalArray, 1)."\n";// another parameter counts all arrays even inside ones
//1 as yes, i wanna see all, or COUNT_RECURSIVE (it does the same)

//foreach loop
foreach($associative as $key => $value){
    echo $value." (".$key.") \n";
}
//printing values from multidimensional arrays
echo ($twoDimensionalArray["Odd"]["Eleven"][1])."\n";//just for one value
print_r($twoDimensionalArray["Odd"]["Eleven"][1]);
