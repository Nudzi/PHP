<?php
class Person{
    //constants
    const AVG_YEAR_LIFE = 80; //all capital, ccan be used for equations
    //                         //but no use members of class
    //properties
    public $firstName;
    public $lastName;
    public $yearOfBirth;
    
    //methods
    function __construct($tempFirst = "", $tempLast = "", $tempBirth = "") {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearOfBirth = $tempBirth;

    }
    function getFirstName(){//we can set to public, but all functions are public by default
        return $this->firstName.PHP_EOL;
    }
    public function setFirstName($tempName){
        $this->firstName = $tempName;    
    }
    function getFullName(){
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
    
}
$myObject = new Person("Default first", "Default last" , 1990);
echo $myObject->firstName."\n";
echo $myObject->firstName = "Nudžejma"."\n"; //it stays the same even if it is in echo
echo $myObject->firstName."\n";

//print constants
echo Person::AVG_YEAR_LIFE."\n"; /*or*/ 
echo $myObject::AVG_YEAR_LIFE."\n" ;
$myObject->setFirstName("Nudži")."\n";
echo $myObject->getFirstName()."\n";
